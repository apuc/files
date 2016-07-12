<?php getHeader();
?>

    <div class="nav-bar">
        <img src="/image/logotip.png" alt="logo"/>
        <a href="/?logout=1" class="butt" >Выход</a>
        <a href="/?user=<?= user_get_login(); ?>" class="butt" >Личные файлы</a>

        <!--в value записываю значение id-->
    </div>


    <!-- Element where elFinder will be created (REQUIRED) -->
    <div id="elfinder"></div>
<?php getFooter() ?>