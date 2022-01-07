<?php

use yii\db\Migration;
use common\models\User;
/**
 * Class m220107_175119_add_default_manager_user
 */
class m220107_175119_add_default_manager_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $user = new User();
      $user->username = 'alex';
      $user->email = 'alex@gmail.com';
      $user->setPassword('qwer1234*');
      $user->generateAuthKey();
      $user->generateEmailVerificationToken();
      $user->save();
      return true;
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
      User::deleteAll();
      return true;
    }
}
