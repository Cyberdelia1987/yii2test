<?php

namespace app\controllers;

use yii\rest\ActiveController;

/**
 * @author Alexandr Sibov<cyberdelia1987@gmail.com>
 */
class CommentController extends ActiveController
{
    public $modelClass = \app\models\Comment::class;
}