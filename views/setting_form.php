<?php
/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 12.07.2016
 * Time: 12:41
 * @var $user_all
 */
getHeader();
?>
<link rel="stylesheet" href="/css/bootstrap.min.css">
<div class="nav-bar">
    <a href="/"><img src="/image/logotip.png" alt="logo"/></a>
    <a href="/?logout=1" class="butt" >Выход</a>
    <a href="/profile.php/?profile=<?= user_get_login(); ?>" class="butt" >Профиль</a>
    <a href="/settings.php/?settings=<?= user_get_login(); ?>" class="butt" >Настройки</a>
    <a href="/?user=<?= user_get_login(); ?>" class="butt" >Личные файлы</a>
    <!--в value записываю значение id-->

</div>
<h3 align="center">Настройки</h3>
<div class="container">
    <div >
        <form action="" method="post">
<lable class="setting">Закрыть доступ к личным файлам</lable>
<input type="checkbox" <?= ($user_all['close_file'] == 0) ? '' : 'checked'?> name="close" ></br>

            <div class="col-xs-2">
                <button type="submit" name="save" class="btn btn-primary btn-block btn-flat">
                    Сохранить
                </button>
            </div>

            </form>
        </div>
        </div>
<?php getFooter(); ?>
