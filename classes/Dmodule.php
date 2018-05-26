<?php

class Dmodule{
	private	$DOMhandler;
	private $NewElem = [];
	

	public function __construct($DOMobj){
		$this->DOMhandler = $DOMobj;

		// DOMDOC for table element:
		$dom = $this->DOMhandler;
		$this->NewElem['DBtable'] = $dom->createElement( 'table');
		$tablAttr = $dom->createAttribute( 'class');
		$tablAttr->value = '';
		//{
			$tr = $dom->createElement( 'tr');
			$this->NewElem['DBtable']->appendChild( $tr);
			//{	
				$td = $dom->createElement( 'td');
				$tr->appendChild( $td);
				//{
					$link = $dom->createElement('a', 'try me!');
					$td->appendChild( $link);
					$ahref = $dom->createAttribute('href');
					$ahref->value = 'https://www.google.nl';
					$link->appendChild( $ahref);
			//}
		//}
	}


	public function DmoduleOutput( $rqdElement, $appender){
		$dom = $this->DOMhandler;

		if( is_string( $appender[1] )){

			foreach ( $dom->getElementsByTagName( $appender[0]) as $elements){

				if ($elements->getAttribute( 'class') == $appender[1] ){
					$selectedElement = $elements;
					break;
				}
			}

		}else if( is_int( $appender[1] )){
			$appender[1]--;

			$selectedElement = $dom->getElementsByTagName( $appender[0])->
			item( $appender[1] );
			echo '<pre>';
			echo $appender[1];
			// var_dump( $selectedElement);
			echo '</pre>';
			
		}
		
		$selectedElement ? $selectedElement->appendChild( $this->NewElem[$rqdElement]) : '' ;

		/* if( isset( $selectedElement)){
			$selectedElement->appendChild( $this->NewElem[$rqdElement]);
		} */
	
	}
}
