<?php

namespace ET\ETGestBundle\Repository;

/**
 * ViaggiRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ViaggiRepository extends \Doctrine\ORM\EntityRepository
{    
    
    public function getViaggiArrayById($arrayViaggiId = array()) {
        if (count($arrayViaggiId) <= 0) {
            return null;
        }
        
        $queryGetViaggi = $this->getEntityManager()
            ->createQueryBuilder('a')
            ->select('a.idViaggio, a.datainizioviaggio')
            ->from('ETGestBundle:Viaggi','a')
            ->where("a.idViaggio IN (:placeholder)")->setParameter('placeholder', $arrayViaggiId)->getQuery();        
        
        return $queryGetViaggi->getResult();
    }
    
    public function getArrayViaggiIdByField($fieldForFilter = '', $value = '')
	{
		if(empty($value) || empty($fieldForFilter)) {
            return null;
        }

		$queryGetIdViaggi = $this->getEntityManager()
                ->createQueryBuilder('a')
                ->select('a.idViaggio')
                ->from('ETGestBundle:Viaggi','a');

        if (strpos($value, '<=') !== false) {
            // case <= a date
            $endTimeStamp = substr($value, 2, 10);
            $endDate = date("Y-m-d 00:00:00", $endTimeStamp);

            $queryGetIdViaggi->andWhere("a.$fieldForFilter <= :placeholder")->setParameter('placeholder', $endDate); 
        } else if (strpos($value, '>=') !== false) {
            // case >=
            $startTimeStamp = substr($value, 2, 10);                        
            $startDate = date("Y-m-d 00:00:00", strtotime(date("Y-m-d 00:00:00", $startTimeStamp) . "+1 days"));                        

            $queryGetIdViaggi->andWhere("a.$fieldForFilter >= :placeholder")->setParameter('placeholder', $startDate); 
        } else {
            // case A - B
            $arrayStartEndTimeStamp = explode(" - ", $value);
            $startTimeStamp = substr($arrayStartEndTimeStamp[0], 0, 10);   
            $startDate = date("Y-m-d 00:00:00", strtotime(date("Y-m-d 00:00:00", $startTimeStamp) . "+1 days"));
            $endTimeStamp = substr($arrayStartEndTimeStamp[1], 0, 10);
            $endDate = date("Y-m-d 00:00:00", $endTimeStamp);

            $queryGetIdViaggi->andWhere("a.$fieldForFilter BETWEEN :placeholder1 AND :placeholder2")
                    ->setParameter('placeholder1', $startDate)
                    ->setParameter('placeholder2', $endDate);                                   
        }

        // Todo: remove setMaxResults, must to get all
        $arrayQueryViaggiId = $queryGetIdViaggi
//                ->setMaxResults(4)
                ->getQuery()
                ->getResult();
        
        return $arrayQueryViaggiId;
	}

    public function findTravelById($id)
    {
        if(!$id) return;

        $qb = $this->getEntityManager()->createQueryBuilder('v');
        $qb->select('v.idViaggio AS id_viaggio, v.idAnagrafica AS id_anagrafica, v.codpromotore, v.tipologia, v.descrizione, v.valutazione, v.status, v.data, v.datacompleto, v.dataviaggio');
        $qb->addSelect("DATE_FORMAT(v.datainizioviaggio, '%d/%m/%Y') AS dataInizioViaggio");
        $qb->addSelect("DATE_FORMAT(v.datafineviaggio, '%d/%m/%Y') AS dataFineViaggio");
        $qb->from('ETGestBundle:Viaggi', 'v');
        $qb->where('v.idViaggio = :id');
        $qb->setParameter('id', (int)$id);

        return $qb->getQuery()->getOneOrNullResult();
    }

    public function findClientNameByTravelId($id)
    {
        if(!$id) return;

        $qb = $this->getEntityManager()->createQueryBuilder('v');
        $qb->select($qb->expr()->concat('a.cognome', $qb->expr()->concat($qb->expr()->literal(' '), 'a.nome')));
        $qb->from('ETGestBundle:Viaggi', 'v');
        $qb->innerJoin('ETGestBundle:Anagrafiche', 'a', \Doctrine\ORM\Query\Expr\Join::WITH, 'v.idAnagrafica = a.idAnagrafica');
        $qb->where('v.idViaggio = :id');
        $qb->setParameter('id', (int)$id);

        return $qb->getQuery()->getOneOrNullResult();
    }
}
