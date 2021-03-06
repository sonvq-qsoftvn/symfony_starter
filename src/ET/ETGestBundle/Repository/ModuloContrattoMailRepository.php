<?php

namespace ET\ETGestBundle\Repository;

/**
 * ModuloContrattoMailRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ModuloContrattoMailRepository extends \Doctrine\ORM\EntityRepository
{
	public function findModuleByTravelIdAndDocumentType($id, $type)
	{
		if($id===null or $type===null) return;

		$qb = $this->getEntityManager()->createQueryBuilder('m');
		$qb->select('m.idModulo, m.idViaggio');
		$qb->addSelect("DATE_FORMAT(m.data, '%d %b %Y-%H%i%s') AS data");
		$qb->addSelect('m.titolo, m.nota, m.tipodocumento, m.codpromotorecreazione AS utente, m.codpromotoremodifica');
		$qb->addSelect("DATE_FORMAT(m.datamodifica, '%Y%m%d%H%i%s') AS dataModifica");
		$qb->addSelect('m.datainvio');
		$qb->addSelect('IFNULL(mn.stato, 0) AS statoLettura');
		$qb->addSelect('mn.codpromotore AS codPromotoreLettura, mn.datalettura');
		$qb->from('ETGestBundle:ModuloContrattoMail', 'm');
		$qb->leftJoin('ETGestBundle:ModuliNotificheLettura', 'mn', \Doctrine\ORM\Query\Expr\Join::WITH, $qb->expr()->andX( $qb->expr()->eq('m.idModulo', 'mn.idModulo'), $qb->expr()->eq('m.tipodocumento', 'mn.tipodocumento') ));
		$qb->where('m.idViaggio = :id');
		$qb->andWhere('m.tipodocumento = :type');
		$qb->setParameters( array('id'=>(int)$id, 'type'=>(int)$type ) );

		return $qb->getQuery()->getResult();
	}
}
