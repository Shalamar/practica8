<?php

$time = date('d/m/Y h:i:s a', time());
$payload = json_decode(file_get_contents('php://input'));

file_put_contents('logs/github.txt', print_r(' It\'s works: '.$time.' ', TRUE), FILE_APPEND);

if ($payload->ref === 'refs/heads/master')
    {

      echo "Probando";
      shell_exec('./script.sh');
    }
    
?>