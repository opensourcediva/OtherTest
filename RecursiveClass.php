<?php

class RecursiveSearch{
	private $mainarray =array(3,6,9,33,44,55,67,88,99);
	private $valuetobefound = 44;
	
	public function __contruct(){
		$this->mainarray = asort($this->mainarray);	
	}
	
	public function chopArray(){
		$count = count($this->mainarray)-1;
		$half = floor(count($this->mainarray)/2);
		$halfvalue = $this->mainarray[$half];
		
		
		if ($this->valuetobefound<$halfvalue)
			$result= array_slice($this->mainarray, 0,$half);
		else if($this->valuetobefound==$halfvalue)
			$result= 1;
		else{
			$result= array_slice($this->mainarray, $half, $count);
		}	
		
		if(is_array($this->chopArray())){
			$this->chopArray();			
		}	
		return $half;
		
	}

}
