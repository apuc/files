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
    <div>
        <table border="1">
            <form action="" method="post">
                <tr>
                    <td>
                        <lable class="setting">Закрыть доступ к личным файлам</lable>
                    </td>
                    <td><input type="checkbox" <?= ($user_all['close_file'] == 0) ? '' : 'checked' ?> name="close"></br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="col-xs-4">
                            </div>
                        <div class="col-xs-4">
                            <button type="submit" name="save" class="btn btn-primary btn-block btn-flat">
                                Сохранить
                            </button>
                        </div>
                        <div class="col-xs-4">
                            </div>
                    </td>
                </tr>
            </form>
        </table>
    </div>
</div>
<?php getFooter(); ?>
