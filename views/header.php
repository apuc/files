<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Файлы ArtCraft</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />

    <!-- jQuery and jQuery UI (REQUIRED) -->
    <link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <!-- elFinder CSS (REQUIRED) -->
    <link rel="stylesheet" type="text/css" href="elfinder/css/elfinder.min.css">
    <link rel="stylesheet" type="text/css" href="elfinder/css/theme.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/style.css">
    <!-- elFinder JS (REQUIRED) -->
    <script src="elfinder/js/elfinder.min.js"></script>
    <script src="elfinder/js/i18n/elfinder.ru.js"></script>

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
            var reParam = new RegExp('(?:[\?&]|&amp;)' + paramName + '=([^&]+)', 'i') ;
            var match = window.location.search.match(reParam) ;

            return (match && match.length > 1) ? match[1] : '' ;
        }
        var h = document.documentElement.clientHeight;
        $().ready(function() {
            var elf = $('#elfinder').elfinder({
                lang: 'ru',
                url : 'elfinder/php/connector.php',
                resizable: false,
                height: h - 63
            }).elfinder('instance');
        });
    </script>
</head>
<body>