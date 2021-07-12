<?php 

require_once '../model/model.php';
if (deleteCharge($_GET['id']))
{
    header('Location: ../displayCharge.php');
}

?>