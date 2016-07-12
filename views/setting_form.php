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
