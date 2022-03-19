<!DOCTYPE html>
<html>
<head>
    <title>Trueletter</title>
    <link rel="stylesheet" type="text/css" href="css/style12345.css" charset="utf-8" >
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
function mouseOver() {
  document.getElementByClassName("menu").style.color = "red";
}

function mouseOut() {
  document.getElementByClassName("menu").style.color = "black";
}
function handlerMouseBig (){
uv.width="500";
uv.height="500";
}
function handlerMouseSmall (){
uv.width="100";
uv.height="100";
}
function hideMenu() {
  $('.menu_dropdown').slideUp(700);
}
function showMenu() {
  $('.menu_dropdown').slideDown(700);
}
$(document).ready(function() {
  $(".footer_item_headerButton2").on("mouseover", showMenu);
  $(".footer_item_headerButton2").on(" mouseleave", hideMenu);
});
</script>
<body>
    <div class="header">
        <div class="header_section">
            <div class="header_item headerlogo">            
            </div>
            <div class="header_item1"><a href="=">TrueLetter</a></div>
            <div class="header_item3"><a href="="><form action="">             
                <input type="text" size="20px">
                <input type="button" value="Поиск"> 
                </h1>
            </form></a></div>           
        </div>      
        <div class="header_section">
            <div class="header_item headerButton"><a href="registr.php">Вход/Регистрация</a></div>
            <div class="header_item headerButton"><a href="=">Моя библиотека</a></div>
        </div>
    </div>
    <div class="slaider">
        <img src="img/book2.jpg" height="500" width="100%"></li>
    </div>
    <div class="menu" onmouseover="mouseOver()" onmouseout="mouseOut()">
            <div class="footer_item"><a href="=">Популярное на этой неделе</a></div>
            <div class="footer_item"><a href="=">Авторы</a></div>
            <div class="footer_item headerButton"><a href="=">Рекомендации</a></div>
            <div class="footer_item_headerButton2"><a href="=">Жанры</a>
                <div class="menu_dropdown">
                    <div clsss ="punkt_1"><p><a href="=">Классика</a></p></div>
                    <div clsss ="punkt_2"><p><a href="=">Научная литераутра</a></p></div>
                    <div clsss ="punkt_3"><p><a href="=">Фантастика</a></p></div>
                </div>
            </div>
    </div>
    <div class="img">
        <div class="img1">
            <img ID = "uv" src="img/img1.jpg" height="250" width="150" onmouseover="handlerMouseBig()" onmouseout="handlerMouseSmall()">
        </div>
        <div class="img2">
            <img ID = "uv" src="img/img2.jpg" height="250" width="150" onmouseover="handlerMouseBig()" onmouseout="handlerMouseSmall()">
        </div>
    </div>
    <div class="text">
        <div class="text1"><a href="=">Грегори Лэвил Робертс "Духовный путь"</a></div>
        <div class="text2"><a href="=">Дж. Д. Сэлинджер "Над пропастью во ржи"</a></div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="imgg">
        <div class="imgg1">
            <img src="img/img3.jpg" height="250" width="150">
        </div>
        <div class="imgg2">
            <img src="img/img4.jpg" height="250" width="150">
        </div>
    </div>
    <div class="textt">
        <div class="textt1"><a href="=">Джордж Оруэлл "1984"</a></div>
        <div class="textt2"><a href="=">Илона Волынская "Ловушка на жадину"</a></div>
    </div>
    <br>
    <br>
    <br>
    <div class="arrow"><a href="=">
        <img src="img/arrow3.png" height="30" width="50">
        </a>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="footer">
        <div class="footer1">TrueLetter</div>
        <div class="footer2">TrueLetter</div>
        <div class="footer3">TrueLetter</div>
    </div>
    </div>
</body>
</html>