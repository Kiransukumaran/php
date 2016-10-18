<?php
/*provide html encoding using html_entitiy_decode*/ 
$htmlstring="&lt;html&gt;&lt;body&gt;Hey!&lt;/body&gt;&lt;/html&gt;";
$encoded=html_entity_decode ($htmlstring);
echo "\n$encoded\n";
?>