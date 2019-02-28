<?php

namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;
use app\models\activerecords\User;

class FirstUserController extends Controller
{
    public $username;
    public $email;
    public $password;

    public function options()
    {
        return ['username', 'password', 'email'];
    }

    public function optionAliases()
    {
        return [
            'u' => 'username',
            'p' => 'password',
            'e' => 'email'
        ];
    }

    public function actionIndex()
    {
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->password_hash = \Yii::$app->security->generatePasswordHash($this->password);
        if ($user->save(false)) {
            echo "insert user success\n";
        }
        return ExitCode::OK;
    }
}
