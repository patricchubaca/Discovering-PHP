<?php

$retorna = [10 => 'Hello Word'];

file_put_contents('/tmp/degubPatric', date('H:i:s').print_r($retorna, 1)."\n", FILE_APPEND);

echo json_encode($retorna);
