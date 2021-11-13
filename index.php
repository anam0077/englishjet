<?php
if (!session_id()) 
{
    session_start();
}
require_once 'init.php';


$app= new App;
