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
/*
TODO: 
- perfect & complete 'PageRenderer' class
- build router
- build login class
- build crud classes
- build search crud function

√ make .htaccess file 
√ make root and directory-seperator contstants 
*/
?>
