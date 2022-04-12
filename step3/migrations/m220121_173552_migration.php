<?php

use yii\db\Migration;

/**
 * Class m220121_173552_migration
 */
class m220121_173552_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
LOCK TABLES `migration` WRITE;

INSERT INTO `migration` VALUES ('m000000_000000_base',1641923358),('m140506_102106_rbac_init',1641923362),('m170907_052038_rbac_add_index_on_auth_assignment_user_id',1641923362),('m180523_151638_rbac_updates_indexes_without_prefix',1641923362),('m200409_110543_rbac_update_mssql_trigger',1641923362);

UNLOCK TABLES;";
        Yii::$app->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $sql = "DROP TABLE migration;";
        Yii::$app->db->createCommand($sql)->execute();
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220121_173552_migration cannot be reverted.\n";

        return false;
    }
    */
}
