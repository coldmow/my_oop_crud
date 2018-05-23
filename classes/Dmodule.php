<?php

class Dmodule{
	private	$DOMhandler;
	private $NewElem = [];
	// private $module = [];
	
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
					$ahref->value = 'www.google.nl';
					$link->appendChild( $ahref);
			//}
		//}
	} 

	public function DmoduleOutput( $rqdElement, $appender){
		$dom = $this->DOMhandler;
		

		// if( append after specific element mode){
		if( is_string( $appender)){


			foreach ( $dom->getElementsByTagName('div') as $elements){

				if ($elements->getAttribute( 'class') == $appender){
					$selectedElement = $elements;
					
					
				}else{
					echo 'error';
					return;
				}
			}

		// else if ( append after nth element mode){

		}else if( is_int( $appender)){

			$selectedElement = $dom->getElementsByTagName('div')->
			item( $appender);
			
			/* $elementsArr = $dom->getElementsByTagName('div');
			
			for($i = 1; $i < $elementsArr->length; $i++){
				$elementsArr->item($i);

			} */
		}
		
		// }end if

		$selectedElement->appendChild( $this->NewElem[$rqdElement]);
	
	}
}
