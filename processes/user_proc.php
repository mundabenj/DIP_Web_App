<?php
require_once "../includes/DB_Connect.php";

if(isset($_POST["sign_up"])){
    $fullname = addslashes(ucwords(strtolower($_POST["fullname"])));
    $email_address = addslashes(strtolower($_POST["email_address"]));
    $phone_number = addslashes(strtolower($_POST["phone_number"]));
    $username = addslashes(strtolower($_POST["username"]));
    $password = addslashes($_POST["password"]);
    $Conf_password = addslashes($_POST["Conf_password"]);
    $roleId = addslashes($_POST["roleId"]);
    $tnc = addslashes($_POST["tnc"]);

    if(!filter_var($email_address, FILTER_VALIDATE_EMAIL)){
        die("Invalid sender_email");
    }

    // Verify Email Already Exists
    $stmt = $pdo->prepare("SELECT email_address FROM users WHERE email_address=? LIMIT 1");
    $stmt->execute([$email_address]);
    $fetched_email = $stmt->fetch();
    if ($fetched_email){
        die("Email Already Exists");
    }

    // Verify if the password and the confirmation password are similar_text
    if(!strcmp($password, $Conf_password) == 0){
        die("Passwords don't match");
    }

    // Verify the password length limit
    if(strlen($password) > 30 || strlen($password) < 6){
        die("The password length must be between 6 and 30 characters");
    }

    // Encrypting the password
    $hash_password = password_hash($Conf_password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (fullname, email_address, phone_number, username, password, roleId) VALUES (?, ?, ?, ?, ?, ?)");

    $stmt->execute([$fullname, $email_address, $phone_number, $username, $hash_password, $roleId]);

    header("Location: ../signin.php");
    exit();
    }

    if(isset($_POST["sign_in"])){
        $entered_username = addslashes(strtolower($_POST["username"]));
        $entered_password = addslashes($_POST["password"]);

    // Verify if username Exists
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username=? OR email_address=? LIMIT 1");
    $stmt->execute([$entered_username, $entered_username]);

    $_SESSION["consort"] = $stmt->fetch();
    if ($_SESSION["consort"]){
            // Use the session to fetch the stored password.
            $stored_password = $_SESSION["consort"]["password"];

            // Verify if the entered_password is identical to the stored_password
            if(password_verify($entered_password, $stored_password)){
                header("Location: ../view_messages.php");
                exit();
            }else{
                unset($_SESSION["consort"]);
                die("Incorrect Password");
            }
    }else{
        unset($_SESSION["consort"]);
        die("Incorrect Username");
    }
    }

    if(isset($_GET["sign_out"])){
        unset($_SESSION["consort"]);
        header("Location: ../signin.php");
        exit();
    }