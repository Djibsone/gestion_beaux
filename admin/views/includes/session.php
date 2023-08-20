<?php

if(!isset($_SESSION['admin']) || trim($_SESSION['admin']['id']) == ''){
    header('location: /login');
    exit();
}
