<?php
/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 12.07.2016
 * Time: 11:24
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

    <div class="container">
        <div class="row">
            <div class="register-box">
                <div class="register-box-body">
                    <p class="login-box-msg"></p>
                    <h3 align="center">Профиль пользователя</h3>
                    <form action="" method="post">

                        <lable>Изменить email</lable>
                        <div class="form-group has-feedback">

                            <input type="email" name="user_email" class="form-control"  value="<?= $user_all['user_email']; ?>">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <lable>Изменить Пароль</lable>
                        <div class="form-group has-feedback">

                            <input type="password" pattern="[a-zA-Z0-9]{6,}" name="pass" class="form-control"
                                    value="">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>

                        <div class="row">
                            <div class="col-xs-4">

                            </div>
                            <!-- /.col -->
                            <div class="col-xs-4">
                                <button type="submit" name="save" class="btn btn-primary btn-block btn-flat">
                                    Сохранить
                                </button>
                            </div>
                            <!-- /.col -->
                            <div class="col-xs-4">

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


<?php getFooter(); ?>