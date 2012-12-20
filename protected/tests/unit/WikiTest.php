<?php
class WikiTest extends CDbTestCase 
{
    public $fixtures = array(
        'wikis' => 'Wiki',
        'users' => 'User'
    );
    
    public function testCreate()
    {
        $title = 'My first wiki page';
        $content = 'wiki content';
        $wiki = new Wiki();
        $wiki->setAttributes(array(
            'title' => $title,
            'content' => $content,
        ));
        
        Yii::app()->user->setId($this->users('user1')->id);
        $this->assertTrue($wiki->save());
        
        $retrievedWiki = Wiki::model()->findByPk($wiki->id);
        $this->assertTrue($retrievedWiki instanceof Wiki);
        $this->assertEquals($retrievedWiki->title, $title);
        $this->assertEquals($retrievedWiki->create_user_id, $this->users('user1')->id);
    }
    
    public function testRead()
    {
        $wiki = $this->wikis('wiki1');
        $this->assertTrue($wiki instanceof Wiki );
        $this->assertEquals('Test Wiki Page 1', $wiki->title);
    }
    
    public function testUpdate()
    {
        $title = 'update wiki title';
        $wiki = $this->wikis('wiki1');
        $wiki->title = $title;
        $this->assertTrue($wiki->save(false));
        $updatedWiki = Wiki::model()->findByPk($wiki->id);
        $this->assertTrue($updatedWiki instanceof Wiki );
        $this->assertEquals($updatedWiki->title, $title);
    }
    
    public function testDelete()
    {
        $wiki = $this->wikis('wiki1');
        $wikiId = $wiki->id;
        $this->assertTrue($wiki->delete());
        $deleteWiki = Wiki::model()->findByPk($wikiId);
        $this->assertEquals(null, $deleteWiki);
    }
    
    public function testInitHomepage()
    {
        $homepage = Wiki::initHomepage();
        $this->assertTrue($homepage instanceof Wiki );
        $this->assertEquals(Wiki::HOMEPAGE_TITLE , $homepage->title);
    }
}
?>