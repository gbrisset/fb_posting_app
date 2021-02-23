<?php 

/* ---------------------------------------------------------------------------------- */
/* -------- KILL THESE TWO LINES ON LIVE SITE --------------------------------------- */
/* ---------------------------------------------------------------------------------- */

  error_reporting(E_ALL);
  ini_set('display_errors', '1');

//---------------------------------------------------

/* ---------------------------------------------------------------------------------- */
/* -------- LOCAL SERVER DETECTION -------------------------------------------------- */
/* ---------------------------------------------------------------------------------- */
// Add local detection for MAMP or other WAMP configuration
// PLEASE NOTE - this does work because a virtual host has been set on WAMP

// $fba_isLocal = false; 
//Cannot use PATH_ABS_ROOT yet
// if ($_SERVER['DOCUMENT_ROOT'] == "C:/wamp64/www/smf/httpdocs") {$fba_isLocal = true; } 


/* ---------------------------------------------------------------------------------- */
/* -------- PATH CONSTANTS ---------------------------------------------------------- */
/* ---------------------------------------------------------------------------------- */


/* ---------------------------------------------------------------------------------- */
/* -------- DATABASE ---------------------------------------------------------------- */
/* ---------------------------------------------------------------------------------- */

// DEV ----------------------------------------------------

 //    define("DB_HOST", "localhost:3308");//MySQL server on WAMP is using port 3308
 //    define("DB_NAME", "fb_posting_app");
 //    define("DB_CHRS", "utf8");
 //    define("DB_USER", "root");
 //    define("DB_PASS", "");

	// define("DB_XXXXXXXXXXXXXX_TABLE", "xxxxxxxxx_xxxxx");

// LIVE ----------------------------------------------------

    define("DB_HOST", "localhost");//MySQL server on WAMP is using port 3308
    define("DB_NAME", "fb_posting_app");
    define("DB_CHRS", "utf8");
    define("DB_USER", "fb_posting_usr"); // permissions SELECT, UPDATE - GB 2021-02-18
    define("DB_PASS", "fb_posting_pwd");

	// define("DB_XXXXXXXXXXXXXX_TABLE", "xxxxxxxxx_xxxxx");

/* ---------------------------------------------------------------------------------- */
/* -------- META DATA --------------------------------------------------------------- */
/* ---------------------------------------------------------------------------------- */

/* ---------------------------------------------------------------------------------- */
/* -------- FB PARAMETERS ----------------------------------------------------------- */
/* ---------------------------------------------------------------------------------- */

$default_graph_version = 'v9.0';

// LBM Page ID
$fba_lbm_page_id = '1237831906246757';


// LBM OG Live app
$fba_app_id = '834799380062835';
$fba_app_secret = '4b5eb2c6ebf79ddacd553301539796b9';
//$fba_default_access_token = 'EAAPIRKuxwQYBAIZAq6Uff8vSW6NZANOB9Ybou2u1bNeexxZAvanLiMESsuwOnZA5Q1trRCOw7BCeNlmidvnWju7d6chyNfeQ5R1YsiSLsKeKmln8eMtb5xTMtRus7Hr6rl3NWOUfQ2rOBOZBPZAIjVu8Uwa7aGuALM8wOiGkTDAaselIrfByJTNmhoY7ZCkqXsZD';


?>