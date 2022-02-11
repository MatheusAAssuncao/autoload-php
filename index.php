<?php
require_once 'vendor/autoload.php';

use Source\Classes\Controller\UserController;
use Source\Classes\Model\UserModel;
use Source\Classes\View\UserView;

$user = new UserController();
$user->text("teste");
// $user = new UserModel();
// echo $user->user;
// $user = new UserView();
// echo $user->user;

?>