<?php
class PostTest extends CDbTestCase 
{
    public $fixtures = array(
        'posts' => 'Post',
        'users' => 'User',
    );
    
    public function testCreate()
    {
        $postTitle = 'First Post';
        $postContent = 'My first post content';
        
        $post = new Post();
        $post->setAttributes(array(
            'title' => $postTitle,
            'content' => $postContent
        ));
        Yii::app()->user->setId($this->users('user1')->id);
        $this->assertTrue($post->save());
        
        $retrievedPost = Post::model()->findByPk($post->id);
        $this->assertTrue($retrievedPost instanceof Post );
        $this->assertEquals($retrievedPost->title, $post->title);
        $this->assertEquals($retrievedPost->create_user_id, Yii::app()->user->id);
    }
    
    public function testRead()
    {
        $retrievedPost = $this->posts('post1'); 
        $this->assertTrue($retrievedPost instanceof Post );
        $this->assertEquals('Test Post 1', $retrievedPost->title);
    }
    
    public function testUpdate()
    {
        $post = $this->posts('post2');
        $postTitle = 'Updated test post 2';
        $post->title = $postTitle;
        $this->assertTrue($post->save(false));
        $updatedPost = Post::model()->findByPk($post->id);
        $this->assertTrue($updatedPost instanceof Post );
        $this->assertEquals($updatedPost->title, $postTitle);
    }
    
    public function testDelete()
    {
        $post = $this->posts('post2');
        $postId = $post->id;
        $this->assertTrue($post->delete());
        $deletedPost = Post::model()->findByPk($postId);
        $this->assertEquals(null, $deletedPost);
    }
}