<?php 

class PageRenderer{
	
	private	$DOMhandler;
	private $templatesObj;
	private	$rqdPage;
	// private	$DB_control			= new DBcontroller();

	private function domEditor( $rqdElement, $appender){

		$Dmodule = new Dmodule( $this->DOMhandler);

		$Dmodule->DmoduleOutput( $rqdElement, $appender);
/* 
		$dom = $this->DOMhandler;

		$addedElement = $dom->createElement('h2', 'YES! H2 added with DOMdocument!');

		echo '<pre>';
		var_dump($selectedElement);
		echo '<br>-----------------------------------------------<br><br>';
		var_dump( get_class_methods( $selectedElement));
		echo '<br>-----------------------------------------------<br><br>';
		echo '</pre>'; 
		
		$selectedElement->appendChild( $addedElement);

		$addedTestElement = $dom->createElement('h3', 'Hmmmmh, interesting how the object that has been added to the document, has in itself the functionality to add something in relation to it... ');

		$addedElement->appendChild( $addedTestElement);
		*/
	}
	
	private function getTemplate( $sections ){

		$template = $this->templatesObj->getHTMLsct( $sections);

		$this->DOMhandler->loadHTML( $template);
	}
	
	private function moduleSelector(){
		switch ( isset($_GET['url']) ? $_GET['url'] : '' ) {
			case 'Artikelen':
				$this->getTemplate( ['header', 'menu', 'content'] );
				$this->domEditor('DBtable', ['div', 2 ] );
				break;
			case 'Locaties':
				$this->getTemplate( ['header', 'menu', 'content'] );
				break;
			case 'Fabrieken':
				$this->getTemplate( ['header', 'menu', 'content'] );
				break;
			case 'Voorraad':
				$this->getTemplate( ['header', 'menu', 'content'] );
				break;
			case 'Medewerkers':
				$this->getTemplate( ['header', 'menu', 'content'] );
				break;
			case 'Contact':
				$this->getTemplate( ['header', 'menu', 'content'] );
				break;
			default:
				$this->getTemplate( ['header', 'menu', 'content'] );
				$this->domEditor('DBtable', ['div', 'menubox'] );
				//			 $rqdelement, $append

				break;
		}
	}

	public function print_content(){
		$this->moduleSelector();
		return $this->DOMhandler->saveHTML();
	}

	public function __construct(){
		$this->DOMhandler = new DOMDocument();
		$this->templatesObj = new PageTemplates();
		
		if ( isset( $_GET['url'] ) /* && {GET'url' exists in the json array}*/){
			$this->rqdPage = $_GET['url'];
		}
		//is it efficient to load in all content when just instantiating the object? It's better to load it in when running the object methods that request the page section.	:
	}
	
	public function print_hard( $sections){
		return $this->templatesObj->getHTMLsct( $sections );
	}
}


//------------------------------------
/*


private function contentProvider(){
	$json = file_get_contents(PageContent.json);
	return json_decode($json, true);

}

public function print_sct( $section ){
	if ( isset( $_GET['url'] )){
		//check if it will run for non existing pages 
		return $this->rendered_content[$section][$this->rqdPage];

	}
	// if ( isset( $this->rendered_content[$section][$this->rqdPage]/*condition looks for if this class has been instantiated and loaded in the content in the property array. It should look only for if the GET contains a requested page  ) ){
		// return $this->rendered_content[$section][$this->rqdPage];

	// }
	elseif (! isset( $_GET['url'])){
		return $this->rendered_content[$section]['home'];

	}else{
		return '';
	}
}

*/