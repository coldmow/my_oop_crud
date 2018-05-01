<?php 

class PageRenderer{
	
	private	$DOMhandler;
	private	$rqdPage;
	// private	$DB_control			= new DBcontroller();
	
	private function primeHTML( $section ){
		$templatesObj = new PageTemplates();

		$template = $templatesObj->getHTMLsct( $section);

		$this->DOMhandler->loadHTML( $template );
	}

	public function outputHTML( $section){
		$this->primeHTML( $section);
		echo $this->DOMhandler->saveHTML();
	}

	public function __construct(){
		$this->DOMhandler = new DOMDocument();
		
		if ( isset( $_GET['url'] ) /* && {GET'url' exists in the json array}*/){
			$this->rqdPage = $_GET['url'];
		}
		//is it efficient to load in all content when just instantiating the object? It's better to load it in when running the object methods that request the page section.	:
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