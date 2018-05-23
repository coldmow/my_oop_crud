<?php

class PageTemplates{
	private $template = [];
	private $page;

	public function getHTMLsct( $sections){
		
		$output = null;
		foreach ($sections as $key) {
			$output .= $this->template[ $key];
		}
		return '<body>
		'.$output.'
		</body>';
	}

	public function __construct(){

		/* the header must be constructed here with passed in parameters that define the pagetitle(gotten from the content), 
		stylepaths() 
		& scripts().

		<?=$page->print_header( [
			'(pagetitle)',
			'(stylepath(if different than default))', [
				'(script path 1)',
				'(script path 2)'
			]
		] )?>
		*/

		/*  <![CDATA[ ]]> */

		
		$this->template['headinfo'] =
'
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>OOP CRUD Project</title>

<link rel="stylesheet"  href="css' . DS . 'style.css" > 

</head>
';
		
		$this->template['header'] =
'
<div class="header">
	<img src="" alt="Carpenter B.V.">
	'./*
	<div class="login">
		<input type="text" name="" id="" placeholder="Gebruikersnaam">
		<br><br>
		<input type="text" name="" id="" placeholder="Wachtwoord">
		<br><br>
		<input type="submit" value="Inloggen">
	</div>
	*/'
</div>
';
		
		$this->template['menu'] =
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
	</ul>
</div>
';
		
		$this->template['content'] =
'
<div class="content">
	
	<h1>Welcome</h1>
	<p>
		Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus eius exercitationem nemo doloremque eveniet aperiam ipsum beatae qui error iste quos quisquam, est debitis maiores optio, voluptates consequuntur repellendus nisi voluptatem ratione asperiores amet fuga perferendis corrupti. Odio, iusto sunt dignissimos ipsum repellat officia hic libero esse, cumque tempore saepe sequi repudiandae aperiam enim velit quae dolor quos a eum.
	</p>
</div>
';
	}

}




?>