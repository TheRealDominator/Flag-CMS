<?php

/*
* ---------------------------
* | Configuration           |
* ---------------------------
* | In this file, you can   |
* | configure everything    |
* | what we need to let     |
* | FlagCMS work properly.  |
* | Edit the values between |
* | '' if you haven't did   |
* | already or used the     |
* | installer located at    |
* | /install.               |
* ---------------------------
*/


/*
* ---------------------------
* | Site configuration      |
* ---------------------------
* | In this section of the  |
* | configuration, you can  |
* | configure the site name,|
* | site url, and the title.|
* ---------------------------
*/

$cmsName = 'FlagCMS'; //.. This is the name your CMS will be shown as
$siteTitle = 'The Hackflag CMS'; //.. This will be displayed in the title of the web page
$siteurl = 'http://127.0.0.1/Flag-CMS/'; //.. URL of the website

$debug = true; //.. If your website is under development, set this to true, if your website is in production, set this to false. Don't place quotes around this.


/*
* ---------------------------
* | MySQL configuration     |
* ---------------------------
* | In this section, config-|
* | ure MySQL. Otherwise you|
* | are not able to use our |
* | FlagCMS properly.       |
* ---------------------------
*/
$dbHost = '127.0.0.1'; //.. MySQL hostname, if you're using normally localhost, use 127.0.0.1 instead, please.
$dbUser = 'root'; //.. MySQL username
$dbPass = ''; //.. MySQL password, if you are not using a password (what I do not suggest!), you may leave it as ''
$dbName = 'flagcms'; //.. MySQL databasename
$dbChar = 'utf8'; //.. Charset to use, you don't have to touch this line, you can leave it so, it's good.
?>
