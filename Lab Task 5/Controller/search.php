<?php

require_once 'model/model.php';

if (isset($_POST['search'])) 
{
    $charges = searchCharge($_POST['name']);
    require 'displayCharge.php';
}
?>