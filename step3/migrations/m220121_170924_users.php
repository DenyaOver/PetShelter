<?php

use yii\db\Migration;

/**
 * Class m220121_170924_users
 */
class m220121_170924_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `region` text NOT NULL,
  `password` text NOT NULL,
  `auth_key` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
LOCK TABLES `users` WRITE;

INSERT INTO `users` VALUES (1,'Admin','admin@admin.net','+4879579879','Braganca','1234','aKjhga3uTq6GdqWs8fpoMQJDJwPzmkEc','NoImage.jpg');

UNLOCK TABLES;";
        Yii::$app->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $sql = "DROP TABLE users;";
        Yii::$app->db->createCommand($sql)->execute();
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220121_170924_users cannot be reverted.\n";

        return false;
    }
    */
}
