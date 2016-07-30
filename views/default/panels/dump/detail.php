<?php
/* @var $panel yii\debug\panels\ConfigPanel */
//$extensions = $panel->getExtensions();
?>
<h1>debug Dump info</h1>

<?php

$dumpData = $panel->data;
foreach ($dumpData as $value){
	echo $value;
}

