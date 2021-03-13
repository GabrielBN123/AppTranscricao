<?php
    $teste = pathinfo($_SERVER["REQUEST_URI"]);
    echo $teste['filename'];
//  echo  substr($_SERVER["REQUEST_URI"], 15, 6) . '<br>' . $_SERVER['SERVER_NAME'];
?>