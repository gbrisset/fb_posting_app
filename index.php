



<?php 




// ---------------------------------------------------
// -- Config - instantiation -------------------------
// ---------------------------------------------------

//fba core files
require 'fba_core/fba_config.php';
// require 'fba_core/fba_config_reports.php'; //legacy file from the AMS app - GB 2021-02-08
require 'fba_core/fba_connections.php';// Sets $fba_pdo

// ---------------------------------------------------
// -- Classes - instantiation ------------------------
// ---------------------------------------------------

//fba libraries
require 'fba_classes/fba_utilities.php';
require 'fba_classes/fba_router.php'; 

$fba_utilities = new fba_utilities($fba_pdo);
$fba_dispatcher = new fba_router;

//FB SDK via Composer
require_once __DIR__ . '/vendor/autoload.php';


$fba_app = new Facebook\Facebook([
  'app_id' => $fba_app_id,								//}
  'app_secret' => $fba_app_secret,						//} Set in config
  'default_graph_version' => $default_graph_version,	//}
  ]);


// ---------------------------------------------------
// -- NavBar  ----------------------------------------
// ---------------------------------------------------

$navbar_items[] = array('href' => '/fba_app/', 'label' => 'HOME', 'target' => '' );
$navbar_items[] = array('href' => '/fba_app/login', 'label' => 'LOGIN', 'target' => '' );
$navbar_items[] = array('href' => '/fba_app/scheduled', 'label' => 'SCHEDULED POSTS', 'target' => '' );
$navbar_items[] = array('href' => '/fba_app/posted', 'label' => 'POSTED', 'target' => '' );
$navbar_items[] = array('href' => '/fba_app/create_post', 'label' => 'CREATE POSTS', 'target' => '' );

// ---------------------------------------------------
// -- Routing  ---------------------------------------
// ---------------------------------------------------

// $fba_dispatcher->add_route(slug, page_filename);
$fba_dispatcher->add_route("/fba_app/default", 			 "_test_page.php");// Default page -- Please refrain from changing the slug...
$fba_dispatcher->add_route("/fba_app/", 				 "home.php");
$fba_dispatcher->add_route("/fba_app/test", 			 "_test_page.php");
$fba_dispatcher->add_route("/fba_app/login", 			 "login.php");
$fba_dispatcher->add_route("/fba_app/scheduled", 		 "scheduled.php");
$fba_dispatcher->add_route("/fba_app/posted",			 "posted.php");
$fba_dispatcher->add_route("/fba_app/create_post", 		 "create_post.php");
// $fba_dispatcher->add_route("/fba_app/reports/keywords", "keyow_report.php");




// $my_routes = $fba_dispatcher->show_routes();
// $fba_utilities->better_vardump($my_routes,3);// 0- green; 1-red; 2-grey; 3-yellow   
// exit();

// -- URI Cleaning -----------------------------------
$uri = $_SERVER['REQUEST_URI'];
if (false !== $pos = strpos($uri, '?'))  $uri = substr($uri, 0, $pos); // remove query string if exists
$uri_cleaned = rawurldecode($uri);

if(substr($uri_cleaned, -9)=="/fba_app/") $uri_cleaned = substr($uri_cleaned, 0, strlen($uri_cleaned)-9);
if(strlen($uri_cleaned)==0) $uri_cleaned = "/fba_app/"; // index.php 

$page_requested = $fba_dispatcher->get_page($uri_cleaned);

// $fba_utilities->better_vardump($uri_cleaned,3);// 0- green; 1-red; 2-grey; 3-yellow   
// $fba_utilities->better_vardump($page_requested,3);// 0- green; 1-red; 2-grey; 3-yellow   
// exit();

// Prep querystring into usable array
$q_string = $_SERVER['QUERY_STRING'];
parse_str($q_string, $q_array);

// $fba_utilities->better_vardump($q_string,3);// 0- green; 1-red; 2-grey; 3-yellow   

include "fba_templates/fba_template_main.php";



// ---------------------------------------------------
// -- Closing  ---------------------------------------
// ---------------------------------------------------

require 'fba_core/fba_closing.php';// Kills $fba_pdo


  ?>

