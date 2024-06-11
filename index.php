<?php
include "./includes/help.php";

$action =  isset($_GET['action']) ? $_GET['action'] : 'home';

switch ($action) {
    case 'index':
        break;
    case 'form_create':
        break;
    case 'create':
        break;
    case 'delete':
        break;
    case 'form_update':
        break;
    case 'update':
        break;
    default:
        echo "case not match";
}