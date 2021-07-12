<?php

/* 
 *  This is the main page.
 *  the templates, and any content-specific modules.
 */


// Validate what page to show:
if (isset($_GET['p'])) {
    $p = $_GET['p'];
} elseif (isset($_POST['p'])) { // Forms
    $p = $_POST['p'];
} else {
    $p = NULL;
}

// Determine what page to display:
switch ($p) {

    case 'about':
        $page = 'about.php';
        $page_title = 'About This Site';
        break;
    
    case 'videos':
        $page = 'videos.php';
        $page_title = 'Videos';
        break;
    
    // Default is to include the main page.
    default:
        $page = 'home.php';
        $page_title = 'Site Home Page';
        break;
        
} // End of main switch.

// Make sure the file exists:
if (!file_exists('./modules/' . $page)) {
    $page = 'main.php';
    $page_title = 'Site Home Page';
}

// Include the header file:
include('./includes/header.inc.php');

// Include the content-specific module:
// $page is determined from the above switch.
include('./modules/' . $page);

// Include the footer file to complete the template:
include('./includes/footer.inc.php');

?>