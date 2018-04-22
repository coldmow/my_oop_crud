<?php 

class PageRenderer{
	
	private		$rendered_content	= [];
	// private		$router;
	private		$dynamic_content	= [];

	
	public function printer( $f ){
		
		return $this->rendered_content;
	}

	public function blubSans( $Page = '' ){
		if ( $Page === 'Artikelen' ){
			
		} 
		
		//return $contentReturned
		/* The page that is requested via the get variable, must return the unchanging content of the page. In there there must be a way to request a functionality that takes in parameters to set up its settings.
		- This can be a functionality that puts DB data in a table.
		*/
	}

	protected function content_render(){

		$this->rendered_content['Artikelen']['content'] = 
'
	<div class="content">
		<h1>Welcome</h1>
		' . $this->blubSans( $_GET['url'] ) . '
		<p>
			Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus eius exercitationem nemo doloremque eveniet aperiam ipsum beatae qui error iste quos quisquam, est debitis maiores optio, voluptates consequuntur repellendus nisi voluptatem ratione asperiores amet fuga perferendis corrupti. Odio, iusto sunt dignissimos ipsum repellat officia hic libero esse, cumque tempore saepe sequi repudiandae aperiam enim velit quae dolor quos a eum.
		</p>
		' . $this->dynamic_content['pageContent'] .'
	</div>
';

		$this->rendered_content['Artikelen']['headinfo'] = 
'
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>OOP CRUD Project</title>
	<link rel="stylesheet" href="css' . DS . 'style.css">
';
		
		$this->rendered_content['Artikelen']['header'] = 
'
	<div class="header">
		<img src="" alt="Carpenter B.V.">
		<div class="login">
			<input type="text" name="" id="" placeholder="Gebruikersnaam">
			<br><br>
			<input type="text" name="" id="" placeholder="Wachtwoord">
			<br><br>
			<input type="submit" value="Inloggen">
		</div>
	</div>
';

		
		$this->rendered_content['Artikelen']['menu'] = 
'
	<div class="menubox">
		<ul>
			<li><a href="Home">Home</a></li>
			<li><a href="Artikelen">Artikelen</a></li>
			<li><a href="Locaties">Locaties</a></li>
			<li><a href="Fabrieken">Fabrieken</a></li>
			<li><a href="Voorraad">Voorraad opvragen</a></li>
			<li><a href="Medewerkers">Medewerkers</a></li>
			<li><a href="Contact">Contact</a></li>
			<li><a href="*">test</a></li>
			<li><a href="*">test</a></li>
			<li><a href="*">test</a></li>
		</ul>
	</div>
';
		
		

	}
	public function __construct(){
		/**
		 * This constructor must run at the beginning of the document to immediately fill the document from the beginning
		 */
		
		$this->content_render();
	}



}