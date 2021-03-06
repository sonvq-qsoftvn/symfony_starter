<?php

namespace ET\ETGestBundle\Repository;

/**
 * AllegatiRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AllegatiRepository extends \Doctrine\ORM\EntityRepository
{
	public function findAttachmentsByDocumentTypeAndModuleId($documentType, $moduleId)
	{
		$qb = $this->getEntityManager()->createQueryBuilder('a');
		$qb->select('a.percorso, a.nomefile');
		$qb->from('ETGestBundle:Allegati','a');
		$qb->where('a.tipodocumento = :type');
		$qb->andWhere('a.idModulo = :id');
		$qb->setParameters(array(
			'id'  => (int)$moduleId,
			'type' => (int)$documentType
		));

		return $qb->getQuery()->getResult();
	}
}
