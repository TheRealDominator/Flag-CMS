<?php

include 'config.php'; // Include config file with variables.

define('CMS_NAME', $cmsName); // Define constant preventing API's from overwritting.
unset($cmsName);

define('SITE_TITLE', $siteTitle); // Define constant ...
unset($siteTitle);

define('SITE_URL', $siteurl); // Define constant ...
unset($siteurl);

?>
