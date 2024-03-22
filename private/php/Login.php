<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $stmt = $pdo->prepare("SELECT ID, username, password FROM user WHERE username = ?");
        $stmt->bindParam(1, $_POST["username"]);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row && $_POST["password"] === $row["password"]) {
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $_POST["username"];
            echo "success";
            exit;
        } else {
            echo "error";
            exit;
        }
    }
}
?>
