<?php
class PostTest extends CDbTestCase 
{
    public $fixtures = array(
        'posts' => 'Post',
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
        
        $this->assertTrue($post->save());
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