<?php /**
 * @var $user_all
 */
global $user;
$user_all = $user->get_user();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Файлы ArtCraft</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2"/>

    <!-- jQuery and jQuery UI (REQUIRED) -->
    <link rel="stylesheet" type="text/css"
          href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <!-- elFinder CSS (REQUIRED) -->
    <link rel="stylesheet" type="text/css" href="elfinder/css/elfinder.min.css">
    <link rel="stylesheet" type="text/css" href="elfinder/css/theme.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/sass.css">
    <!-- elFinder JS (REQUIRED) -->
    <script src="elfinder/js/elfinder.min.js"></script>
    <script src="elfinder/js/i18n/elfinder.ru.js"></script>
    <script src="js/script.js"></script>
    <script src="js/psd.min.js"></script>

    <!-- GoogleDocs Quicklook plugin for GoogleDrive Volume (OPTIONAL) -->
    <!--<script src="js/extras/quicklook.googledocs.js"></script>-->

    <!-- elFinder translation (OPTIONAL) -->
    <!--<script src="js/i18n/elfinder.ru.js"></script>-->

    <!-- elFinder initialization (REQUIRED) -->
    <script type="text/javascript" charset="utf-8">
        // Documentation for client options:
        // https://github.com/Studio-42/elFinder/wiki/Client-configuration-options

        // Helper function to get parameters from the query string.
        function getUrlParam(paramName) {
            var reParam = new RegExp('(?:[\?&]|&amp;)' + paramName + '=([^&]+)', 'i');
            var match = window.location.search.match(reParam);

            return (match && match.length > 1) ? match[1] : '';
        }
        var h = document.documentElement.clientHeight;
        var user = getUrlParam('user');
        if (user == '') {
            var url = 'elfinder/php/connector.php';
        }
        else {
            var url = 'elfinder/php/connector.php?user=' + user;
        }
        $().ready(function () {
            var PSD = require('psd');

            var elf = $('#elfinder').elfinder({
                lang: 'ru',
                url: url,
                resizable: false,
                height: h - 63,
                getFileCallback: function(file, fm) {
                    if(file.mime == "image/vnd.adobe.photoshop"){
                        var psdModal = $('#psd-modal');
                        psdModal.css({display:'block'});
                        PSD.fromURL(file.path).then(function(psd) {
                            var psdBody = $('#psd-body');
                            var png = psd.image.toPng();
                            png.style.width = "100%";
                            png.style.height = "auto";
                            psdBody.html(png);
                        });
                    }
                    else {
                        fm.exec('open');
                    }
                }
            }).elfinder('instance');
        });
    </script>
</head>
<body>
<?php if (isset($_COOKIE['id'])): ?>
<div class="nav-bar">
    <a href="/"><img src="/image/logotip.png" alt="logo" class="logo"/></a>
   <img src="/upload/<?=$user_all['user_login']?>.png" class="photo"/>
    <a href="/?logout=1" class="butt">Выход</a>
    <a href="/profile/?profile=<?= user_get_login(); ?>" class="butt">Профиль</a>
    <a href="/settings/?settings=<?= user_get_login(); ?>" class="butt">Настройки</a>
    <a href="/?user=<?= user_get_login(); ?>" class="butt">Личные файлы</a>
</div>
<?php endif; ?>