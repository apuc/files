<?php getHeader(); ?>
<script type="text/javascript" charset="utf-8">
    $().ready(function() {
        var elf = $('#elfinder').elfinder({
            url : 'elfinder/php/connector.php'  // connector URL (REQUIRED)
            ,lang: 'ru'          // language (OPTIONAL)
            ,height: 570
            ,resizable:false
        }).elfinder('instance');
    });
</script>
<div class="nav-bar">

</div>
<div id="elfinder"></div>
<?php getFooter(); ?>
