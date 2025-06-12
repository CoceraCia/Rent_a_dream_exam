<?php
session_start();
function createUserIfnotExists()
{
    if (!isset($_SESSION["users"])) {
        $_SESSION["users"] = [
            [
                "email" => "admin@admin.net",
                "name" => "admin",
                "dni" => null,
                "password" => password_hash("admin", PASSWORD_DEFAULT),
                "rol" => "admin"
            ],
            [
                "email" => "user@user.net",
                "name" => "user",
                "dni" => null,
                "password" => password_hash("user", PASSWORD_DEFAULT),
                "rol" => "user"
            ]
        ];
    }
}

function printUserControllerError(): void
{
    echo ($_SESSION['Error']);
}

function printUserName(): void
{
    $resultPrintUsername = (isset($_SESSION['logged'])) ? $_SESSION['username'] : null;
    echo $resultPrintUsername;
}
function printRol(): void
{
    $resultPrintRol = (isset($_SESSION['logged'])) ? $_SESSION['rol'] : null;
    echo $resultPrintRol;
}

function validPhoneNumber($phone_number)
{
    $phone_number_validation_regex = "/^\\+?\\d{1,4}?[-.\\s]?\\(?\\d{1,3}?\\)?[-.\\s]?\\d{1,4}[-.\\s]?\\d{1,4}[-.\\s]?\\d{1,9}$/";
    $length = strlen($phone_number);
    if($length == 0){
        $_SESSION["error"] = "phone number is empty";
        return false;
    } else if (!preg_match($phone_number_validation_regex, $phone_number) && !$length == 11){
        $_SESSION["error"] = "invalid phoneNumber";
        return false;
    }
}
