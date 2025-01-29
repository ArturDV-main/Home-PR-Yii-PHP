<?php

namespace app\controllers;

use yii\web\Controller;

class SayController extends Controller
{
    public function actionSay($message = 'Привет')
    {
        return $this->render('say', ['message' => $message]);
    }
}