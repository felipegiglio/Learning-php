<?php
    session_start();
    setcookie('nome','felipe',time(),'/');
    echo $_COOKIE['nome'];
?>