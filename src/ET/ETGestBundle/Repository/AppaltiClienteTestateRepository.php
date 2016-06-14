<?php

namespace ET\ETGestBundle\Repository;

use Doctrine\ORM\EntityRepository;

class AppaltiClienteTestateRepository extends EntityRepository
{
	/**
   * @param int $uid
   * @return Array
   */
  public function findRecipientUserContracts($uid)
  {
      return $this->getEntityManager()
            ->createQueryBuilder('a')
            ->select('a')
            ->from('ETGestBundle:AppaltiClienteTestate', 'a')
            ->where('a.codpromotoredestinatario = :uid')
            ->setParameter('uid', $uid)
            ->getQuery()->getResult();
  }
}
