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
echo $page->print_head();
?>
</head>
<body>

	<?php
	echo $page->print_header();
	
	echo $page->print_menu();

	echo $page->print_content()
	?>

</body>
</html>



<?php
/**
 * TODO:
 * find the best way to initialize a class when navigating to a certain page.
 * build router
 * perfect & complete 'PageRenderer' class
 * build login class
 * build crud classes
 * build search crud function
 
 √ make .htaccess file 
 √ make root and directory-seperator contstants 

 */
?>
