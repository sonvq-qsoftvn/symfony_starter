<?php

namespace ET\ETGestBundle\Repository;

/**
 * DocumentiRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DocumentiRepository extends \Doctrine\ORM\EntityRepository
{
	/**
	 * @param array $status
     * @return Array
     */
	public function findDocumentsByStatus($status = array())
	{
		$qb = $this->getEntityManager()->createQueryBuilder('doc');
		$qb->select('MONTH(vg.datainizioviaggio) AS mese, YEAR(vg.datainizioviaggio) AS anno');
		$qb->from('ETGestBundle:Documenti','doc');
		$qb->leftJoin('ETGestBundle:Viaggi', 'vg', \Doctrine\ORM\Query\Expr\Join::WITH, 'doc.idViaggio = vg.idViaggio');
		$qb->leftJoin('ETGestBundle:Anagrafiche', 'ana', \Doctrine\ORM\Query\Expr\Join::WITH, 'ana.idAnagrafica = vg.idAnagrafica');
		$qb->where('doc.ecStato IN (:status)');
		$qb->andWhere('doc.tipo IN (:type)');
		$qb->setParameters(array(
				'status' => $status,
				'type'	 => array('estrattoContoVisibile', 'estrattoContoInvisibile')
			));
		$qb->groupBy('anno, mese');
		$qb->orderBy('anno, mese');

		return $qb->getQuery()->getResult();
	}

	/**
	 * @param array $status
     * @return Array
     */
	public function findTravelDocumentByStatus($status = array(), $start=false, $end=false)
	{
		$sql = '
				SELECT doc.id AS id_modulo, 
						 doc.tipo AS tipoDocumento,
						 doc.data, doc.titolo,
						 doc.descrizione AS nota,
						 doc.datamodifica,
						 doc.ec_stato AS stato_modulo,
						 doc.codpromotore, doc.codpromotoremodifica,
						 doc.ec_codPromotoreStato AS codPromotoreStato,
						 doc.ec_codPromotoreLavorazione AS codPromotoreLavorazione,
						 doc.prenotazioni_letturaStato AS letto,
						 doc.prenotazioni_letturaCodPromotore AS codPromotoreLetto,
						 doc.prenotazioni_letturaData AS dataLetto,
						 0 AS conferma_prenotazione,
						 vg.id_anagrafica,
						 vg.id_viaggio,
						 vg.dataViaggio AS dataModulo,
						 vg.codPromotore AS codPromotoreViaggio,
						 vg.tipologia AS tipologia,
						 vg.titolo_It AS descrizione, vg.dataInizioViaggio, vg.dataFineViaggio, vg.versione,
						 ana.cognome, ana.nome
				FROM `documenti` doc
				INNER JOIN `viaggi` vg ON (doc.id_viaggio = vg.id_viaggio)
				INNER JOIN `anagrafiche` ana ON (ana.id_anagrafica = vg.id_anagrafica)
				INNER JOIN `vacanzev_agenti`.`users` u ON (vg.codPromotore = u.id)
				WHERE vg.status IN ('.implode(',', $status['vgStatus']).')
				AND doc.ec_stato IN ('.implode(',', $status['ecStato']).')
				AND doc.tipo IN ('.implode(',', array('"estrattoContoVisibile"', '"estrattoContoInvisibile"') ).')
				AND vg.agenzia = "ETIta"
			';
		if($start and $end) {
			$sql .= 'AND vg.datainizioviaggio BETWEEN "' . $start . ' 00:00:00" AND "' . $end . ' 23:59:59"';
		} elseif($start and !$end) {
			$sql .= 'AND vg.datainizioviaggio >= "' . $start . ' 00:00:00"';
		} elseif(!$start and $end) {
			$sql .= 'AND vg.datainizioviaggio <= "' . $end . ' 23:59:59"';
		}
		$sql .= ' ORDER BY vg.dataInizioViaggio, dataModulo'; 
		$stmt  = $this->getEntityManager()->getConnection()->prepare($sql);
		$stmt->execute();
		return $stmt ->fetchAll();
	}

	/**
	 * @param array $status
     * @return Array
     */
	public function findTravelDocumentNoteByStatus($status = array())
	{
		$sql = '
				SELECT doc.id AS id_modulo, 
						doc.id_viaggio,
						 doc.tipo AS tipoDocumento,
						 doc.data, doc.titolo,
						 doc.descrizione AS nota,
						 doc.codPromotoreCreazione AS utente,
						 doc.prenotazioni_letturaStato AS letto,
						 doc.prenotazioni_letturaCodPromotore AS codPromotoreLetto,
						 doc.prenotazioni_letturaData AS dataLetto,
						 vg.id_anagrafica,
						 vg.id_viaggio,
						 vg.dataViaggio AS dataModulo,
						 vg.codPromotore AS codPromotoreViaggio,
						 vg.tipologia AS tipologia,
						 vg.titolo_It AS descrizione, vg.dataInizioViaggio, vg.dataFineViaggio, vg.versione,
						 ana.cognome, ana.nome
				FROM `documenti` doc
				INNER JOIN `viaggi` vg ON (doc.id_viaggio = vg.id_viaggio)
				INNER JOIN `anagrafiche` ana ON (ana.id_anagrafica = vg.id_anagrafica)
				INNER JOIN `vacanzev_agenti`.`users` u ON (vg.codPromotore = u.id)
				WHERE vg.status IN ('.implode(',', $status['vgStatus']).')
				AND doc.tipo IN ('.implode(',', array('"estrattoContoVisibile"', '"estrattoContoInvisibile"') ).')
				AND vg.agenzia = "ETIta"
			';
		$sql .= ' ORDER BY doc.data DESC'; 

		$stmt  = $this->getEntityManager()->getConnection()->prepare($sql);
		$stmt->execute();
		return $stmt ->fetchAll();
	}

	/**
	 * @param string $typePannel, int $id 
     * @return Array
     */
    public function	findProcessingPromoterId($typePannel, $id)
    {
    	if(!$typePannel or !$id) return;

    	if($typePannel == 'documenti')
    		$entity = 'ETGestBundle:Documenti';

    	$qb = $this->getEntityManager()->createQueryBuilder('doc');
    	$qb->select('doc.ecCodpromotorelavorazione AS codPromotoreLavorazione');
    	$qb->from($entity,'doc');
    	$qb->where('doc.id = :id');
    	$qb->setParameter('id', $id);

    	return $qb->getQuery()->getOneOrNullResult();
    }

    /**
	 * @param string $table, int $id 
     * @return Array
     */
    public function updateProcessingPromoterId($typePannel, $uid, $id)
    {
    	if(!$typePannel or !$id) return;

    	if($typePannel == 'documenti')
    		$entity = 'ETGestBundle:Documenti';

    	$qb = $this->getEntityManager()->createQueryBuilder('doc');
    	$qb->update($entity,'doc');
    	$qb->set('doc.ecCodpromotorelavorazione', $uid);
    	$qb->where('doc.id = :id');
    	$qb->setParameter('id', $id);

    	return $qb->getQuery()->getOneOrNullResult();
    }
}
