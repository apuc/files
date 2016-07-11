<?php getHeader() ?>
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
                height: h - 63,
                driver: 'MySQL'
            }).elfinder('instance');
        });
    </script>
<div class="nav-bar">

</div>
<!-- Element where elFinder will be created (REQUIRED) -->
<div id="elfinder"></div>
<?php getFooter() ?>