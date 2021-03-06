<?php

namespace ET\ETTicketBundle\Repository;

/**
 * RequestChangelogRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RequestChangelogRepository extends \Doctrine\ORM\EntityRepository
{
	/**
	 * @param array $filters
     * @return Array
     */
	public function findChangeLogsBy($filters = array(), $returnArr = false)
	{
		if(empty($filters)) return null;

		$condition = '';
		$conparationOperator = 'LIKE';
		$parameters = array();
		$index = 0;

		$qb = $this->getEntityManager()->createQueryBuilder('req');
		$qb->select('req, reqas');
		$qb->from('ETTicketBundle:RequestChangelog','req');

		foreach($filters as $key => $val) {
			$index++;

			if(is_numeric($val)) {
				$conparationOperator = '=';
			} else {
				$conparationOperator = 'LIKE';
			}

			$condition .= 'req.'.$key.' '.$conparationOperator.' :'.$key;
			if($index<count($filters)) {
				$condition .= ' AND ';
			}
			$parameters[$key] = $val;
		}

		$qb->leftJoin('ETTicketBundle:RequestAssignmentReason', 'reqas', \Doctrine\ORM\Query\Expr\Join::WITH, 'req.assignmentReason = reqas.assignmentReason');

		$qb->where($condition);
		$qb->setParameters($parameters);

		if($returnArr == true)
			return $qb->getQuery()->getResult(\Doctrine\ORM\Query::HYDRATE_SCALAR);

		return $qb->getQuery()->getResult();
	}
}
