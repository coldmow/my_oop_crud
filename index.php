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

?>

<!DOCTYPE html>
<html lang="en">
	
	<!-- the only distinct functions to call here must be only print_content with all the articles per page, and print_header with the header info per page -->
	
	<?=$page->print_content()?>
	<!--?=$page->print_content(['header', 'menu', 'content'])?-->
</html>

<?php



/**
 * TODO:
 * - (active) perfect & complete 'PageRenderer' class
 * - (active) build content control functions and cms
 * - add a parameter to the constructor of the pagetemplates class to specify which page to request, also add a destructor but check when it will run first and if it keeps the rest of the code still working.
 * 
 * - every link points to a class that is automatically instantiated(made into an obj) when the link is clicked, optionally you can destroy this page object when the user navigates away, but you can keep it if you want specifically the page to remember something.
 * - build login class
 * - find the best way to initialize a class when navigating to a certain page.
 * - build crud classes
 * - build crud search function
 
 √ (active) generate the html elements of the pages with the DOMDocument class in a generic way as possible
 √ make .htaccess file 
 √ make root and directory-seperator contstants 
 √ build a seperate file that contains all the required content and let the PageRenderer class summon it. Use a fitting format like JSON or similar.
 
 * Deprecated:
 * - link Artikelen will instantiate the sub-class 'Artikelen' so that it can change the content rendering property of its parent class 'PageRenderer'
 * - build operations that can decide which page can use it, example:
 * 		a global db read operation that only reads tables from the db
 * 			a specific read operation that uses the global db op to specify what the app needs
 * 		build router for user pages:
 * 

*/?>