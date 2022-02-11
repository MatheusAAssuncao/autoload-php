<?php

namespace Source\Classes\Controller;

use Source\Classes\Model\UserModel;

class UserController {

    function text($text) {
        echo mb_strtoupper($text) . "<br>";
        $_model = new UserModel();
        echo $_model->user;
    }
}