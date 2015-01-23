<?php

use yii\db\Schema;
use yii\helpers\BaseConsole;
use app\components\db\Migration;
use app\models\User;

class m150122_092917_init_user_db extends Migration
{
    public function up()
    {
    	$user = new User();
    	$password_hash = Yii::$app->security->generatePasswordHash('123456');
    	$auth_key = Yii::$app->security->generateRandomString();
    	$time = time();
    	$user->setAttributesAll = [
	    	[
	    	    'username' => 'caicai1',
	    	    'avatar' => '',
	    	    'password_hash' => $password_hash,
	    	    'auth_key' => $auth_key,
	    	    'password_reset_token' => '',
	    	    'email' => 'czh1@qq.com',
	    	    'created_at' => $time,
	    	    'updated_at' => $time,
	    	],
	    	[
	    	    'username' => 'caicai2',
	    	    'avatar' => '',
	    	    'password_hash' => $password_hash,
	    	    'auth_key' => $auth_key,
	    	    'password_reset_token' => '',
	    	    'email' => 'czh2@qq.com',
	    	    'created_at' => $time,
	    	    'updated_at' => $time,
	    	],
	    	[
	    	    'username' => 'caicai3',
	    	    'avatar' => '',
	    	    'password_hash' => $password_hash,
	    	    'auth_key' => $auth_key,
	    	    'password_reset_token' => '',
	    	    'email' => 'czh3@qq.com',
	    	    'created_at' => $time,
	    	    'updated_at' => $time,
	    	],
	    	[
	    	    'username' => 'caicai4',
	    	    'avatar' => '',
	    	    'password_hash' => $password_hash,
	    	    'auth_key' => $auth_key,
	    	    'password_reset_token' => '',
	    	    'email' => 'czh4@qq.com',
	    	    'created_at' => $time,
	    	    'updated_at' => $time,
	    	],
	    	[
	    	    'username' => 'caicai5',
	    	    'avatar' => '',
	    	    'password_hash' => $password_hash,
	    	    'auth_key' => $auth_key,
	    	    'password_reset_token' => '',
	    	    'email' => 'czh5@qq.com',
	    	    'created_at' => $time,
	    	    'updated_at' => $time,
	    	],
	    	[
	    	    'username' => 'caicai6',
	    	    'avatar' => '',
	    	    'password_hash' => $password_hash,
	    	    'auth_key' => $auth_key,
	    	    'password_reset_token' => '',
	    	    'email' => 'czh6@qq.com',
	    	    'created_at' => $time,
	    	    'updated_at' => $time,
	    	],
	    	[
	    	    'username' => 'caicai7',
	    	    'avatar' => '',
	    	    'password_hash' => $password_hash,
	    	    'auth_key' => $auth_key,
	    	    'password_reset_token' => '',
	    	    'email' => 'czh7@qq.com',
	    	    'created_at' => $time,
	    	    'updated_at' => $time,
	    	],
    	];

    	$ret = $user->saveAll();
    	if ($ret !== true) {
    		BaseConsole::output("测试数据初始化出错，" . $ret . '（请手动初始化）');
    	}
    }

    public function down()
    {
        echo "m150122_092917_init_user_db cannot be reverted.\n";

        return false;
    }
}
