<?php

namespace ET\UserBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UsersRepository extends EntityRepository 
{

    /**
     * @return Array
     */
    public function findPromotersNotInHoliday() {
        return $this->getEntityManager()
                        ->createQueryBuilder('u')
                        ->select('u.contrattoCognome, u.contrattoNome, u.id, u.ferie')
                        ->from('ETUserBundle:Users', 'u')
                        ->where('u.ferie NOT IN (:feries)')
                        ->setParameter('feries', array("archivia", "disattivo"))
                        ->orderBy('u.contrattoCognome', 'ASC')
                        ->getQuery()->getResult();
    }

    public function searchPromoterByName($value = '') {
        if (empty($value)) {
            return null;
        }

        $queryGetPromotoreId = $this->getEntityManager()
                ->createQueryBuilder('a')
                ->select('a.id')
                ->from('ETUserBundle:Users', 'a')
                ->where("a.contrattoNome LIKE :contrattoNome")
                ->orWhere("a.contrattoCognome LIKE :contrattoCognome")
                ->orWhere("CONCAT(a.contrattoNome, ' ', a.contrattoCognome) LIKE :fullname")
                ->setParameter('contrattoNome', '%' . $value . '%')
                ->setParameter('contrattoCognome', '%' . $value . '%')
                ->setParameter('fullname', '%' . $value . '%')
                ->getQuery();

        return $queryGetPromotoreId->getResult();
    }

    /**
     * @return Array
     */
    public function getPromotersByArrayCondition($field, $value) {
        return $this->getEntityManager()
                        ->createQueryBuilder('u')
                        ->select("u.url1, u.email, u.nominativo, u.contrattoNome, u.contrattoCognome, CONCAT(u.contrattoCognome, ' ', u.contrattoNome) as fullname, u.id")
                        ->from('ETUserBundle:Users', 'u')
                        ->where("u.$field IN (:placeholder)")
                        ->setParameter('placeholder', $value)
                        ->orderBy('fullname', 'ASC')
                        ->getQuery()->getResult();
    }

    /**
     * @param int $uid
     * @return Array
     */
    public function findPromotersRegisteredName($uid) {
        return $this->getEntityManager()
                        ->createQueryBuilder('u')
                        ->select('u.nominativo')
                        ->from('ETUserBundle:Users', 'u')
                        ->where('u.id = :id')
                        ->setParameter('id', $uid)
                        ->getQuery()->getOneOrNullResult();
    }

    /**
     * @param array $uid
     * @return Array
     */
    public function findPromoterContractName($uid) {
        $qb = $this->getEntityManager()->createQueryBuilder('u');
        $qb->select($qb->expr()->concat('u.contrattoCognome', $qb->expr()->concat($qb->expr()->literal(' '), 'u.contrattoNome')));
        $qb->from('ETUserBundle:Users', 'u');
        $qb->where('u.id = (:uid)');
        $qb->setParameter('uid', $uid);

        return $qb->getQuery()->getOneOrNullResult();
    }

    public function findPromoterEmailById($id) {
        $sql = "SELECT u.email FROM `users` AS u WHERE u.id = {$id}";
        $stmt = $this->getEntityManager()->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getPromotoreListByArrayId($arrayCodPromotoreId = array()) {
        // Get promotore name
        $queryGetPromotore = $this->createQueryBuilder('a')
                        ->select('a.id, a.contrattoNome, a.contrattoCognome')
                        ->where("a.id IN (:placeholder)")->setParameter('placeholder', $arrayCodPromotoreId)->getQuery();
        return $queryGetPromotore->getResult();
    }

    /**
     * @param array $uid
     * @return Array
     */
    public function findPromotersById($uid) {
        $qb = $this->getEntityManager()->createQueryBuilder('u');
        $qb->select('u');
        $qb->from('ETUserBundle:Users', 'u');
        $qb->where('u.id = (:uid)');
        $qb->setParameter('uid', $uid);

        return $qb->getQuery()->getResult();
    }

}
