<?php
    session_start();
    if (isset($_SESSION['logado'])) {
        include('bem_vindo.php');
    } else {
        include('login.php');
    }