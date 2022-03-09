<?php

require_once("./connect.php");

if (isset($_POST["submit"])) {

    $aH = $_POST["aH"];
    $aS = $_POST["aS"];
    $aV = $_POST["aV"];

    $pH = $_POST["pH"];
    $pS = $_POST["pS"];
    $pV = $_POST["pV"];

    $sql = "UPDATE led SET value = ? WHERE ledID = 1";
    $stmt = $database->stmt_init();

    if (!$stmt = $database->prepare($sql)) {
        header("location: ../index.php");
        exit;
    }

    $stmt->bind_param("i", $aH);
    $stmt->execute();


    $sql = "UPDATE led SET value = ? WHERE ledID = 2";
    $stmt = $database->stmt_init();

    if (!$stmt = $database->prepare($sql)) {
        header("location: ../index.php");
        exit;
    }

    $stmt->bind_param("i", $aS);
    $stmt->execute();
    $sql = "UPDATE led SET value = ? WHERE ledID = 3";
    $stmt = $database->stmt_init();

    if (!$stmt = $database->prepare($sql)) {
        header("location: ../index.php");
        exit;
    }

    $stmt->bind_param("i", $aV);
    $stmt->execute();

    $sql = "UPDATE led SET value = ? WHERE ledID = 4";
    $stmt = $database->stmt_init();

    if (!$stmt = $database->prepare($sql)) {
        header("location: ../index.php");
        exit;
    }

    $stmt->bind_param("i", $pH);
    $stmt->execute();


    $sql = "UPDATE led SET value = ? WHERE ledID = 5";
    $stmt = $database->stmt_init();

    if (!$stmt = $database->prepare($sql)) {
        header("location: ../index.php");
        exit;
    }

    $stmt->bind_param("i", $pS);
    $stmt->execute();
    $sql = "UPDATE led SET value = ? WHERE ledID = 6";
    $stmt = $database->stmt_init();

    if (!$stmt = $database->prepare($sql)) {
        header("location: ../index.php");
        exit;
    }

    $stmt->bind_param("i", $pV);
    $stmt->execute();

    $stmt->close();
    header("location: ../index.php");
} else {
    header("location: ../index.php");
}
