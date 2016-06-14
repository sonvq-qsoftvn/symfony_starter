<?php

namespace ET\ETGestBundle\Services;

use \ArrayIterator;
use ET\ETGestBundle\Helpers\PropertyFilter;

class DocumentsManager
{
	private $config = null;
	private $params = null;

	public function __construct($file)
	{
		if($this->params === null) {
			$this->params = array(
					'file' => $file
				);
		}
	}

	public function getConfig($tipoDoc = false, $property = false)
	{
		if($this->config === null) {
			$this->config = new ArrayIterator($this->params['file']);
		}

		if($tipoDoc!==false and $property!==false) {
			if( isset( $this->config['doc'][$tipoDoc][$property] ) ) {
				return $this->config['doc'][$tipoDoc][$property];
			}
		} elseif($tipoDoc!==false and $property===false) {
			if( isset( $this->config['doc'][$tipoDoc] ) ) {
				return $this->config['doc'][$tipoDoc];
			}
		}

		return $this->config['doc'];
	}

	public function getConfigByProperty($filter)
	{
		$docs = array();

		foreach($this->getConfig() as $key => $doc) {
			$docs[$key] = array();

			if ( is_array($filter) ) {
				foreach($filter as $name => $value){
					if ( isset($doc[$name]) ) {
						$docs[$key][$name] = $doc[$name];
					} else {
						if( isset($doc[$value]) )
							$docs[$key][$value] = $doc[$value];
					}
				}
			} else {
				$docs[$key][$filter] = $doc[$filter];
			}
		}

		$docs = new ArrayIterator($docs);
		//Verifico se devo filtrare gli elementi
		if ( is_array($filter) ){
			foreach($filter as $property => $values){
				if ( is_array($values) ){
					$docs = new PropertyFilter($docs, $property, $values);
				}
			}
		}

		return $docs;
	}

	public function getUnionFields($tipoDoc = false)
	{
		$extra = array();
		
		foreach($this->getConfig() as $key => $val) {
			switch ($key) {
				case 0:
				case 1:
				case 2:
				case 3:
				case 10:
				case 12:
					$extra['union'][$key] = '`id_modulo`, `id_viaggio`, DATE_FORMAT(`data`, \'%Y%m%d%H%i%s\') AS data, `titolo`, `nota`, `tipoDocumento`, `codPromotoreCreazione` AS utente, `codPromotoreModifica`, DATE_FORMAT(`dataModifica`, \'%Y%m%d%H%i%s\') AS dataModifica, `erroriViaggio`, `dataInvio`';
				break;
				
				default:
					$extra['union'][$key] = '`id_modulo`, `id_viaggio`, DATE_FORMAT(`data`, \'%Y%m%d%H%i%s\') AS data, `titolo`, `nota`, `tipoDocumento`, `codPromotoreCreazione` AS utente, `codPromotoreModifica`, DATE_FORMAT(`dataModifica`, \'%Y%m%d%H%i%s\') AS dataModifica, "" AS erroriViaggio, `dataInvio`';
					break;
			}
		}

		if($tipoDoc) {
			return $extra['union'][$tipoDoc];
		}

		return $extra['union'];
	}
}