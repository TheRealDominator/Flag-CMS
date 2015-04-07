<?php

include 'config.php'; // Include config file with variables.

/*
* Defining constants of the "normal" variables preventing plugins from overwritting.
* Don't define database-credentials related stuff!
*/
define('CMS_NAME', $cmsName);
define('SITE_TITLE', $siteTitle);
define('SITE_URL', $siteurl);

/*
* Call this function if you need a database connection,
* so it will not create a database connection any time you include bootstrap.php
*/
function createDB()
{
  $db = new PDO('mysql:host=' . $dbHost . ';dbname=' . $dbName . ';charset=' . $dbChar, $dbUser, $dbPass); //.. Later we need to use a database class for this.
}

/*
* Unsetting variables.
*/
unset($cmsName);
unset($siteTitle);
unset($siteurl);

unset($dbHost);
unset($dbName);
unset($dbUser);
unset($dbPass);
unset($dbChar);

?>
