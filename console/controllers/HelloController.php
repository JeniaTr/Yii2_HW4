<?php

namespace console\controllers;

use yii\console\Controller;
use yii\helpers\Console;

class HelloController extends Controller
{
    public $message;

    public function options()
    {
        return ['message'];
    }

    public function optionAliases()
    {
        return ['m' => 'message'];
    }

    public function actionIndex()
    {
        echo $this->stdout( $this->message . "\n", console::BOLD);
        $mess  = $this->stdout($this->message , console::BOLD, console::BG_BLUE);
        echo "oho oho ho  $mess .\n ";

    }

}