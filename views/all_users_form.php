<?php
/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 12.07.2016
 * Time: 11:24
 * @var $all_users
 * @var $user_all
 */

getHeader();
global $db;
$all_users = $db->find('user', '*')->all();
?>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <div class="container">
        <div class="row">
            <div class="register-box">
                <div class="register-box-body">
                    <p class="login-box-msg"></p>
                    <h3 align="center">Все пользователи</h3>
                   <table border="1">
                       <tr>
                           <td>№</td>
                           <td>Логин</td>
                           <td>E-mail</td>
                           <td>Удалить</td>

                       </tr>
                       <?php foreach($all_users as $user): ?>
                       <tr>
                           <td><?= $user['id']; ?></td>
                           <td><?= $user['user_login']; ?></td>
                           <td><?= $user['user_email']; ?></td>
                           <td><a href="/users/?del=<?= $user['id'] ?>">Удалить</a></td>

                       </tr>
                     <?php endforeach; ?>
                   </table>
                </div>
            </div>
        </div>
    </div>


<?php getFooter(); ?>