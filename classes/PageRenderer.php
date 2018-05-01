<?php 
require_once ROOT.'';

class PageRenderer{
	
	private	$rendered_content	= [];
	private	$rqdPage;
	// private	$DB_control			= new DBcontroller();

	private function contentProvider(){
		$json = file_get_contents(PageContent.json);
		return json_decode($json, true);

	}
	
	public function print_sct( $section ){
		if ( isset( $_GET['url'] )){
			//check if it will run for non existing pages 
			return $this->rendered_content[$section][$this->rqdPage];

		}
		// if ( isset( $this->rendered_content[$section][$this->rqdPage]/*condition looks for if this class has been instantiated and loaded in the content in the property array. It should look only for if the GET contains a requested page */ ) ){
			// return $this->rendered_content[$section][$this->rqdPage];

		// }
		elseif (! isset( $_GET['url'])){
			return $this->rendered_content[$section]['home'];

		}else{
			return '';
		}
	}

	protected function content_render(){
		
	}
	
	/**
	 * Undocumented function
	 *
	 * @param [type] $html
	 * @return void
	 */
	private function loadHTML( $html ){
		$html = new 
		headinfo
		header
		menu
		content

		$doc = new DOMDocument();
		return $doc->loadHTML( $html );

		//TODO: build a function that reads html and converts it into objects with php DOM manupulation
		// when should the dynamic content be added to the document?
	
		
	}

	public function outputHTML(){
		$this->loadHTML(  );
	}

	public function __construct(){
		if ( isset( $_GET['url'] ) /* && {GET'url' exists in the json array}*/){
			$this->rqdPage = $_GET['url'];
		}
		//is it efficient to load in all content when just instantiating the object? It's better to load it in when running the object methods that request the page section.	:
		$this->content_render();
	}



}