<?php

    require_once("./php/connect.php");

    $sql = "SELECT * FROM led";
    $result = $database->query($sql);
    $row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LED</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <form action="./php/send.php" method="post">
    <div class="box">
        <div class="appearance">
            <h1>Asztal</h1>
            <div class="icon">
                <img src="./img/desk.svg">
            </div>
        </div>
        <div class="sliders">
            <p>SZÍN</p>
            <div class="color"></div>
            <div class="slider">
                <?php
                    echo '<input type="range" name="aH" min="0" max="360" value="'. $row['value']. '">';
                ?>
               
            </div>

            <p>FEHÉRSÉG</p>

            <div class="whithness"></div>
            <div class="slider">
            <?php
                $row = $result->fetch_assoc();
                    echo '<input type="range" name="aS" min="0" max="100" value="'. $row['value']. '">';
                ?>

                <!-- <input type="range" name="aS" min="0" max="100"> -->
            </div>

            <p>FÉNYERŐ</p>
            <div class="brightness"></div>
            <div class="slider">
                <?php
                    $row = $result->fetch_assoc();
                    echo '<input type="range" name="aV" min="0" max="100" value="'. $row['value']. '">';
                ?>
                <!-- <input type="range" name="aV" min="0" max="100"> -->
            </div>

        </div>
        <button type="submit" name="submit">KÜLDÉS</button>
    </div>
    <div class="box">
        <div class="appearance">
            <h1>POLC</h1>

            <div class="icon">
                <img src="./img/shelf.svg">
            </div>
        </div>
        <div class="sliders">
            <p>SZÍN</p>
            <div class="color"></div>
            <div class="slider">
            <?php
                    $row = $result->fetch_assoc();
                    echo '<input type="range" name="pH" min="0" max="360" value="'. $row['value']. '">';
                ?>
                <!-- <input type="range" name="pH" min="0" max="360"> -->
            </div>

            <p>FEHÉRSÉG</p>

            <div class="whithness"></div>
            <div class="slider">
            <?php
                    $row = $result->fetch_assoc();
                    echo '<input type="range" name="pS" min="0" max="100" value="'. $row['value']. '">';
                ?>
                <!-- <input type="range" name="pS" min="0" max="100"> -->
            </div>

            <p>FÉNYERŐ</p>
            <div class="brightness"></div>
            <div class="slider">
            <?php
                    $row = $result->fetch_assoc();
                    echo '<input type="range" name="pV" min="0" max="100" value="'. $row['value']. '">';
                ?>
                <!-- <input type="range" name="pV" min="0" max="100"> -->
            </div>

        </div>
        <button type="submit" name="submit">KÜLDÉS</button>
    </div>

    </form>


</body>

</html>