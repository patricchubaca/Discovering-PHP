<?php



echo $lista = "Hello Word";

file_put_contents('/tmp/degubPatric', date('H:i:s').print_r($lista, 1)."\n", FILE_APPEND);