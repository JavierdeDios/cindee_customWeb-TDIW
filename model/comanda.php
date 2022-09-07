<?php
function afegirComanda($conn, $nprods, $id, $preu) {
    $data = date("Y/m/d");
    $sql = "INSERT INTO `command` (`data`, `number_elements`, `total_price`, `user_id`) VALUES (:fecha, :nelem, :tprice, :userid)";
    $stmt = $conn->prepare($sql);
    $params = ['fecha' => $data, 'nelem' => $nprods, 'tprice' => $preu, 'userid' => $id,];
    $stmt->execute($params);
    $last_id = $conn->lastInsertId();
    return $last_id;
}

function afegirItemsComanda($conn, $arr, $cid) {
    foreach($arr as $x => $x_value) {
        $data = getByID($conn, $x);
        $preutot = $data['price'] * $x_value;
        $sql = "INSERT INTO `command_line` (`product_name`, `quantity`, `unit_price`, `total_price`, `command_id`, `product_id`) VALUES (:nom, :qtty, :price, :tprice, :cid, :pid)";
        $stmt = $conn->prepare($sql);
        $params = ['nom' => $data['name'], 'qtty' => $x_value, 'price' => $data['price'], 'tprice' => $preutot, 'cid' => $cid, 'pid' => $x,];
        $stmt->execute($params);
    }
    return true;
}

function getComandesByUserID($conn, $uid) {
    $sql = 'SELECT * FROM `command` WHERE `user_id`= :id ';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $uid);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getItemsByComandaID($conn, $cid) {
    $sql = 'SELECT `product_id`, `product_name`, `quantity` FROM `command_line` WHERE `command_id`= :id ';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $cid);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>