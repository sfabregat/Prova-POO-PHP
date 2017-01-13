<?php 

require 'quadre.php';

class Tauler{
	private $peces=array();
	private $tipus;// escac o aleat
	private $nRows=null;
	private $nCols=null;
	function __construct ($nRows=null,$nCols=null,$tipus){
		$this->tipus=$tipus;
		switch($this->tipus){
			case 'escac': $this->escac($nRows=null,$nCols=null,$tipus);
			break;
			case 'aleat': $this->aleat($nRows=null,$nCols=null,$tipus);
			break;
		}

	}

	function escac($nRows=null,$nCols=null,$tipus){
		$this->nRows=8;
		$this->nCols=8;
		for($i=0; $i < $this->nRows; $i++){
			for($j=0; $j < $this->nCols; $j++)
    		{
    			if($i%2){
    			if($j%2){
    			$this->peces[$i][$j]=new Quadre('#FFF');
    			}
    			else{
    			$this->peces[$i][$j]=new Quadre('#000');
    			}
    		}else{
    			if($j%2){
    			$this->peces[$i][$j]=new Quadre('#000');
    			}
    			else{
    			$this->peces[$i][$j]=new Quadre('#FFF');
    			}
    		}
    		}
    		}
	}

	function aleat($nRows=null,$nCols=null,$tipus){
		$this->nRows=8;
		$this->nCols=8;
		$aleat= array('blanco','negro');
		for($i=0; $i < $this->nRows; $i++){
			for($j=0; $j < $this->nCols; $j++)
    		{
    			$col=rand(0, 1);
    			if($aleat[$col]=='blanco'){
    			$this->peces[$i][$j]=new Quadre('#FFF');
    		}else{
    			$this->peces[$i][$j]=new Quadre('#000');
    		}
    		}
    		}
    		
	}

	function show(){
		echo '<body bgcolor="tomato"><table>';
			for($i=0; $i < $this->nRows; $i++){
			echo '<tr>';
			for($j=0; $j < $this->nCols; $j++)
    		{
        		$this->peces[$i][$j]->show();
    		}
    		echo '</tr>';	
	}

}
}
?>