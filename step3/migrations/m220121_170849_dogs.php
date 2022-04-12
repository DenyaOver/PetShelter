<?php

use yii\db\Migration;

/**
 * Class m220121_170849_dogs
 */
class m220121_170849_dogs extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `dogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `breed` varchar(20) DEFAULT NULL,
  `sex` varchar(6) NOT NULL,
  `description` text NOT NULL,
  `photo` text DEFAULT NULL,
  `pet` varchar(3) NOT NULL DEFAULT 'dog',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;";
        Yii::$app->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $sql = "DROP TABLE dogs;";
        Yii::$app->db->createCommand($sql)->execute();
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220121_170849_dogs cannot be reverted.\n";

        return false;
    }
    */
}
