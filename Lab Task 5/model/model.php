<?php 

require_once 'db_connect.php';

function addCharge($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO `charge_info`(`Name`, `Delivery Charge`, `Location`, `Display`)  VALUES (:name, :deliveryCharge, :location, :display)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':deliveryCharge' => $data['deliveryCharge'],
            ':location' => $data['location'],
            ':display' => $data['display']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function showAllcharges(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `charge_info` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function updateCharge($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `charge_info` set `Name` = ?, `Delivery Charge` = ?, `Location` = ?, `Display` = ? where `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['deliverCharge'], $data['location'], $data['display'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteCharge($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `charge_info` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function showCharge($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `charge_info` where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchCharge($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `charge_info` WHERE Name LIKE '%$name%'";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
?>
