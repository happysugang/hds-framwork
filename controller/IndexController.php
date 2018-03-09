<?php

namespace app\controller;


use app\model\User;

class IndexController
{
    public function actionIndex()
    {
        $user = new User();
        echo $user->queryUser();

    }
}