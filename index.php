<?php
/* 
* Later in this file, we have to parse the template files using a TPL engine. 
* Now we redirect the visitor to public/, while we haven't setup a TPL engine.
*/
header('Location: public/index.html');
?>