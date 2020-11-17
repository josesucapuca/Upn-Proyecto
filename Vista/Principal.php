<?php 
require_once("../PHP_version/PHP_HTML_Version/inc/init.php");
require_once("../PHP_version/PHP_HTML_Version/inc/config.ui.php");

$page_title = "Dashboard";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["dashboard"]["active"] = true;

?>