<?php
// Prepare error reporting as precaution 
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

// For cross OS compatibility
define('DS', DIRECTORY_SEPARATOR);

// For folder structure consistency & prevention of overcomplicated filepaths: 
define('ROOT', __DIR__);

// class autoloader:
spl_autoload_register( function($class){
	require_once ROOT . DS . 'classes' . DS . $class . '.php';	
});


$page = new PageRenderer();








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
 * build a seperate file that contains all the requires content and let the PageRenderer class summon it. Use a fitting format like JSON or similar.
 * find the best way to initialize a class when navigating to a certain page.
 * perfect & complete 'PageRenderer' class
 * build login class
 * build crud classes
 * build search crud function
 
 √ make .htaccess file 
 √ make root and directory-seperator contstants 
_


<!DOCTYPE html>
<html lang="en">

<head>
<?php
echo $page->print_sct('headinfo');
?>
</head>

<body>
	<?php
	echo $page->print_sct('header');
	
	echo $page->print_sct('menu');

	echo $page->print_sct('content');
	?>
</body>
</html>


*/?>