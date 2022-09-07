<?php
function registra($conn) {
    try {
        $mail = $pass = $name = $add = $city = "";
        $profpicture = '/../media/utility/default_avatar.png';
        $mail = $_POST["email"];
        $pass = $_POST["psw"];
        $hpass = password_hash($pass, PASSWORD_DEFAULT);
        $name = $_POST["name"];
        $add = $_POST["address"];
        $city = $_POST["city"];
        $code = intval($_POST["code"]);
        if (filter_var($mail, FILTER_VALIDATE_EMAIL) && is_int($code)) {
        $sql = "INSERT INTO `users` (`mail`, `pass`, `name`, `address`, `city`, `postal_code`, `profile_picture`) VALUES (:email, :passw, :nom, :address, :city, :pcode, :profpicture)";
        $stmt = $conn->prepare($sql);
        $params = ['nom' => $name, 'email' => $mail, 'passw' => $hpass, 'address' => $add, 'city' => $city, 'pcode' => $code, 'profpicture' => $profpicture, ];
        $stmt->execute($params);
        return true;
        }
        return false;
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        return false;
    }
}

function login($conn)
{
    try {
        $email = $pass = "";
        $email = $_POST["email"];
        $pass = $_POST["psw"];
        $sql = "SELECT `mail`, `pass` FROM users WHERE mail = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue('email', $email);
        $stmt->execute();

        $prova = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($prova != false) {
            if (password_verify($pass, $prova['pass'])) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        return false;
    }
}

function getdades($conn)
{
    try {
        $email = $pass = "";
        $email = $_POST["email"];
        $pass = $_POST["psw"];
        $sql = "SELECT * FROM users WHERE mail = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue('email', $email);
        $stmt->execute();
        $prova = $stmt->fetch(PDO::FETCH_ASSOC);
        return $prova;
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        return false;
    }
}

function getdadesbyid($conn, $id)
{
    try {
        $sql = "SELECT * FROM users WHERE ID = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue('id', $id);
        $stmt->execute();
        $prova = $stmt->fetch(PDO::FETCH_ASSOC);
        return $prova;
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        return false;
    }
}

function actdades($conn, $id)
{
    try {
        $dades = getdadesbyid($conn, $id);
        $mail = $passw = $name = $address = $city = $code = "";
        if (!empty($_POST["name"])) {
            $name = $_POST["name"];
        } else {
            $name = $dades['name'];
        }
        if (!empty($_POST["email"])) {
            $mail = $_POST["email"];
        } else {
            $mail = $dades['mail'];
        }
        if (!empty($_POST["psw"])) {
            $passw = $_POST["psw"];
            $passw = password_hash($passw, PASSWORD_DEFAULT);
        } else {
            $passw = $dades['pass'];
        }
        if (!empty($_POST["address"])){
            $address = $_POST["address"];
        } else {
            $address = $dades['address'];
        }
        if (!empty($_POST["city"])){
            $city = $_POST["city"];
        } else {
            $city = $dades['city'];
        }
        if (!empty($_POST["pcode"])){
            $code = $_POST["pcode"];
        } else {
            $code = $dades['postal_code'];
        }
        $sql = "UPDATE users SET  `name` = :nom, `mail` = :mail, `pass` = :passw, `address` = :address, `city` = :city, `postal_code` = :pcode WHERE ID = :id";
        $stmt = $conn->prepare($sql);
        $params = ['nom' => $name, 'mail' => $mail, 'passw' => $passw, 'address' => $address, 'city' => $city, 'pcode' => $code, 'id' => $id,];
        $stmt->execute($params);
        return true;
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        return false;
    }
}

function actfoto($conn, $id) {
    try {
        $dades = getdadesbyid($conn, $id);
        $ppicture = "";
        $filesAbsolutePath = '/home/TDIW/tdiw-m4/public_html/media/users/';
        if (isset($_FILES['profile_image']) && !empty($_FILES['profile_image'])) {
            $destinationPath = $filesAbsolutePath.$id;
            move_uploaded_file($_FILES['profile_image']['tmp_name'], $destinationPath);
            $ppicturepath = '/../media/users/'.$id;
            $sql = "UPDATE users SET  `profile_picture` = :ppicture WHERE `ID` = :id";
            $stmt = $conn->prepare($sql);
            $params = ['ppicture' => $ppicturepath, 'id' => $id,];
            $stmt->execute($params);
            return true;
        }
        return false;
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        return false;
    }
}
?>