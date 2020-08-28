<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include('estaticos/head.php') ?>
    <title>Cultura del agua | CAPDAM</title>
</head>
<body id="main">
    <?php include('estaticos/nav.php') ?>
    <div class="container">
        <a class="w3-btn middleblue" href="javascript:history.back(-1);" style="color:white"><img style="width:30px;vertical-align:middle;" src="images/iconos/icon_regresar.png"> Regresar</a>
        <center>
            <div class="div_titles" style="width: 400px;"></div>
                <h1>Cultura del agua</h1>
            <div class="div_titles" style="width: 400px;"></div>
        </center><br>
        <blockquote><h2>Videos</h2></blockquote>
            <div class="w3-content" style="max-width:1200px">
                <iframe class="mySlides" width="560" height="315" src="https://www.youtube.com/embed/vcLNOTc9HVE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width:100%;display:block"></iframe>
                <iframe class="mySlides" width="560" height="315" src="https://www.youtube.com/embed/cf6gcUdPSiM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width:100%;display:none"></iframe>
                <iframe class="mySlides" width="560" height="315" src="https://www.youtube.com/embed/Swr9nceWK40" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width:100%;display:none"></iframe>

              <div class="w3-row-padding w3-section">
                <div class="w3-col s4">
                    <img class="demo w3-opacity w3-hover-opacity-off" src="images/videos/2.png" style="width:100%;cursor:pointer" onclick="currentDiv(1)">
                </div>
                <div class="w3-col s4">
                    <img class="demo w3-opacity w3-hover-opacity-off" src="images/videos/3.png" style="width:100%;cursor:pointer" onclick="currentDiv(2)">
                </div>
                <div class="w3-col s4">
                    <img class="demo w3-opacity w3-hover-opacity-off" src="images/videos/1.png" style="width:100%;cursor:pointer" onclick="currentDiv(3)">
                </div>
            </div>
        </div>
    </div>
    <?php include('estaticos/scripts.php') ?>  
    <?php include('estaticos/footer.php') ?>
</body>
</html>