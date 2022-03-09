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
                <input type="range" id="aH" min="0" max="360">
            </div>

            <p>FEHÉRSÉG</p>

            <div class="whithness"></div>
            <div class="slider">
                <input type="range" id="aS" min="0" max="100">
            </div>

            <p>FÉNYERŐ</p>
            <div class="brightness"></div>
            <div class="slider">
                <input type="range" id="aV" min="0" max="100">
            </div>
            
        </div>
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
                <input type="range" id="aH" min="0" max="360">
            </div>

            <p>FEHÉRSÉG</p>

            <div class="whithness"></div>
            <div class="slider">
                <input type="range" id="aS" min="0" max="100">
            </div>

            <p>FÉNYERŐ</p>
            <div class="brightness"></div>
            <div class="slider">
                <input type="range" id="aV" min="0" max="100">
            </div>
            
        </div>
    </div>

    <script src="./js/app.js"></script>
</body>
</html>