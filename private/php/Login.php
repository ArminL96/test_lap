<?php
require_once('includes.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $stmt = $pdo->prepare("SELECT * FROM user WHERE username = ?");
        $stmt->bindParam(1, $_POST["username"]);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row !== false && $_POST["password"] === $row["password"]) {
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $_POST["username"];
            if ($row["is_admin"] === 1) {
                $_SESSION["is_admin"] = true;
            }
            else {
                $_SESSION["is_admin"] = false;
            }
            
            echo "success";
            exit;
        } else {
            echo "Password from form: " . $_POST["password"]. "| Password from database: " . $row["password"];
            exit;
        }
    }
}
?>
