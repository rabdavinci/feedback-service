<?php

return [
  'components' => [
    'db' => [
      'class' => 'yii\db\Connection',
      'dsn' => 'mysql:host=mysql;dbname=feedback',
      'username' => 'user',
      'password' => 'secret',
      'charset' => 'utf8',
    ],
    'mailer' => [
      'class' => 'yii\swiftmailer\Mailer',
      'viewPath' => '@common/mail',
    ],
  ],
];
