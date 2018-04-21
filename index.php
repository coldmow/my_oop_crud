<?php

// For cross OS compatibility
define('DS', DIRECTORY_SEPARATOR);

// For folder structure consistency & prevention of overcomplicated filepaths: 
define('ROOT', __DIR__);

// class autoloader:
spl_autoload_register( function($class){
	require ROOT . DS . 'classes' . DS . $class . '.php';	
});


$page = new PageRenderer();

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php
echo $page->printer()['headinfo'];
?>
</head>

<body>
	<?php
	echo $page->printer()['header'];
	
	echo $page->printer()['menu'];

	echo $page->printer()['content']
	?>
</body>
</html>



<?php
/**
 * TODO:
 * build operations that can decide which page can use it, example:
 * 		a global db read operation that only reads tables from the db
 * 			a specific read operation that uses the global db op to specify what the app needs
 * 		build router for user pages:
 * 			every link points to a class that is automatically instantiated(made into an obj) when the link is clicked, optionally you can destroy this page object when the user navigates away, but you can keep it if you want specifically the page to remember something.
 * 		
 * - link Artikelen will instantiate the sub-class 'Artikelen' so that it can change the content rendering property of its parent class 'PageRenderer'
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * find the best way to initialize a class when navigating to a certain page.
 * perfect & complete 'PageRenderer' class
 * build login class
 * build crud classes
 * build search crud function
 
 √ make .htaccess file 
 √ make root and directory-seperator contstants 

 */
?>
