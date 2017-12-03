<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="../css/owl.carousel.min.css">
    <title>INPN</title>
</head>
<body>
    <div class="header">
        <div class="h-social">
            <a href="http://google.com"><span></span></a>
            <a href="http://google.com"><span></span></a>
            <a href="http://google.com"><span></span></a>
        </div>
        <div class="h-lang">
            <a href="http://google.com">UA</a>
            <a href="http://google.com">RU</a>
            <a href="http://google.com">EN</a>
        </div>
        <div class="h-regis">
            <div class="header-search">
                <form id="demo-b" method="post" action="/">
                    <input type="search" id="s" name="s" placeholder="">
                </form>
            </div>
            <div class="autorization">
                <a href="http://google.com">Вхід<span></span></a>
            </div>
        </div>
    </div>
    <div class="main-cont">
        <nav class="m-nav">
            <div class="m-name">
                <a href="http://">
                    <span></span>
                </a>
                <p>ДЕРЖАВНА УСТАНОВА <br> "Інститут неврології, психіатрії та наркології національної академії медичних наук України" ДУ ІНПН НАМН</p>
            </div>
            <div class="m-menu">
                <a href=""><span></span><p>адміністрація</p> </a>
                <a href=""><span></span><p>клініка</p> </a>
                <a href=""><span></span><p>наука</p> </a>
                <a href=""><span></span><p>освіта</p> </a>
            </div>
        </nav>
    </div>
    <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item"><img src="../img/pic-f.jpg" alt="Clinik">
            <p>Ми започаткували електронну чергу</p>
            <a href="">детальніше</a>
        </div>
        <div class="item"><img src="../img/pic-s.jpg" alt="Clinik">
            <p>Зміни у структурі ДНК</p>
            <a href="">детальніше</a>
        </div>
        <div class="item"><img src="../img/pic-t.jpg" alt="Clinik">
            <p>Перелік заборонених препаратів для людини</p>
            <a href="">детальніше</a>
        </div>
        </div>
    </div>
    <div class="main-cont">
        <div id="m-info">
            <component :is="currentView">

            
            </component>
            <nav class="info-nav">
                <a href="#" data-type="word" @click="switchView('word')">Привітання директора</a>
                <a href="#" data-type="history" @click="switchView('history')">Історія установи</a>
                <a href="#" data-type="other" @click="switchView('other')">Додаткова інформація</a>
            </nav>
        </div>
    </div>
    <footer>
    
    </footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.9/vue.js"></script>
<script src="../js/main.js"></script>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
        $(document).ready(function() {
            $('a[href^="http://"], a[href^="https://"]').attr('target','_blank');
        });
</script>
<script src="../js/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      navigation : true, // показывать кнопки next и prev 
 
      slideSpeed : 500,
      paginationSpeed : 400,
      autoplay : true,
      loop : true,
      items : 1, 
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false
 
  });
 
});
</script>

</body>
</html>