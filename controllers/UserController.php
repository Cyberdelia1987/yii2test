<?php

namespace app\controllers;

use yii\rest\ActiveController;

/**
 * @author Alexandr Sibov<cyberdelia1987@gmail.com>
 */
class UserController extends ActiveController
{
    public $modelClass = \app\models\User::class;
}