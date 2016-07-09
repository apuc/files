<?php
/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 09.07.2016
 * Time: 11:39
 */
getHeader();
?>
    <div class="container">
        <div class="row">
            <div class="register-box">
                <div class="register-box-body">
                    <p class="login-box-msg">Регистрация нового пользователя</p>

                    <form action="" method="post">
                        <div class="form-group has-feedback">
                            <input type="text" name="user_login" class="form-control" pattern="[a-zA-Z0-9]{3,}" placeholder="Ваш логин">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="email"  name="user_email" class="form-control" placeholder="Ваш email">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <input type="password" pattern="[a-zA-Z0-9]{6,}" name="pass" class="form-control" placeholder="Пароль">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>

                        <div class="row">
                            <div class="col-xs-4">

                            </div>
                            <!-- /.col -->
                            <div class="col-xs-4">
                                <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Регистрация</button>
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