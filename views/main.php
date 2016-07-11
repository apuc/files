<?php getHeader();
?>

    <div class="nav-bar">
        <img src="/image/logotip.png" alt="logo"/>
        <a href="/?user=<?= user_get_login(); ?>" >Личные файлы</a>
        <a href="/?logout=1" >Выход</a>
        <!--в value записываю значение id-->
    </div>


    <!-- Element where elFinder will be created (REQUIRED) -->
    <div id="elfinder"></div>
<?php getFooter() ?>