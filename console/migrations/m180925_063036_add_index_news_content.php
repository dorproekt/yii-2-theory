<?php

use yii\db\Migration;

/**
 * Class m180925_063036_add_index_news_content
 */
class m180925_063036_add_index_news_content extends Migration
{
    /**
     * {@inheritdoc}
     */
      /* public function safeUp()
    {
        $this->execute("ALERT TABLE news ADD FULLTEXT INDEX idx_content (content)");
    }*/

    /**
     * {@inheritdoc}
     */
   /*  public function safeDown()
    {
        $this->dropIndex('idx_content', 'news');
    }*/

 
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->execute("ALTER TABLE news ADD FULLTEXT INDEX idx_content (content)");
    }

    public function down()
    {
        $this->dropIndex('idx_content', 'news');
    }
    
}
