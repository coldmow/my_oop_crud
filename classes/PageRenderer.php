<?php 

class PageRenderer{
	
	private		$rendered_content	= [];
	// protected	$dynamic_content	= [];


	public function print_head(){
		return $this->rendered_content['headinfo'];
	}
	public function print_header(){
		return $this->rendered_content['header'];
	}
	public function print_menu(){
		return $this->rendered_content['menu'];
	}
	public function print_content(){
		return $this->rendered_content['content'];
	}

	public function process_dyn_data(){
		if ( isset( $_GET['url'] ) ){
			return $_GET['url'];
		} else {
			return '';
		}
	}


	public function __construct(){
		$this->content_filler();
	}

	protected function content_filler(){

		$this->rendered_content['headinfo'] = 
'
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>OOP CRUD Project</title>
	<link rel="stylesheet" href="css' . DS . 'style.css">
';
		
		$this->rendered_content['header'] = 
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
		
		$this->rendered_content['menu'] = 
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
		
		$this->rendered_content['content'] = 
'
	<div class="content">
	hello
		'. $this->process_dyn_data() .'
	</div>
';

	}



}