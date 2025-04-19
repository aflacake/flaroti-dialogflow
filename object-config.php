<?php
$xml=simplexml_load_file("config.xml") or die ("Can't create oject"); //file config.xml [branch: main]
  echo $xml -> name . "\n";
  echo $xml -> description . "\n";
  echo $xml -> author;
?>
