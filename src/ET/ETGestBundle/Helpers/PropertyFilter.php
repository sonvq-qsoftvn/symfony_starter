<?php
namespace ET\ETGestBundle\Helpers;

use \FilterIterator;

class PropertyFilter extends FilterIterator
{
	protected $property;
	protected $values;

	/*** The filteriterator takes  a iterator as param: ***/
	public function __construct( Iterator $it, $property, $values ){
  		parent::__construct($it);

		//Memorizzo le propriet� da filtrare
		$this->property = $property;
		$this->values = $values;
	}

	public function accept(){
		$current = $this->current();
		foreach($this->values as $value){
			if ($current[$this->property] === $value){
				return TRUE;
			}
		}

		return FALSE;
	}
}