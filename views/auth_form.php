<?php getHeader(); ?>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <div class="container">
        <div class="row">
            <div class="login-box">

                <!-- /.login-logo -->
                <div class="login-box-body">
                    <p class="login-box-msg">Заполните поля для авторизации</p>

                    <form action="/auth.php" method="post">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="user_login" placeholder="Ваш логин">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="pass" placeholder="Ваш пароль">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <input type="hidden" name="auth_form" value="auth">
                        <div class="row">
                            <div class="col-xs-4">

                            </div>
                            <!-- /.col -->
                            <div class="col-xs-4">
                                <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Вход</button>
                            </div>
                            <div class="col-xs-4">

                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <!-- /.social-auth-links -->



                </div>
                <!-- /.login-box-body -->
            </div>
        </div>
    </div>

<?php getFooter(); ?>