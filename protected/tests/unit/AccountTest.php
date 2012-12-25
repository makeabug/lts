<?php
class AccountTest extends CDbTestCase
{
	public $fixtures = array(
			'accounts' => 'Account',
			'users' => 'User'
	);
	
	public function testCreate()
	{
		$username = 'username';
		$password = 'password';
		$account = new Account();
		$account->setAttributes(array(
				'username' => $username,
				'password' => $password,
				'type' => 1
				));
		Yii::app()->user->setId($this->users('user1')->id);
		$this->assertTrue($account->save());
		
		$retrieved = Account::model()->findByPk($account->id);
		$this->assertTrue($retrieved instanceof Account);
		$this->assertEquals($retrieved->username, $username);
		$this->assertEquals($retrieved->create_user_id, $this->users('user1')->id);
	}
	
	public function testRead()
	{
		$account = $this->accounts('account1');
		$this->assertTrue($account instanceof Account );
		$this->assertEquals('Test_User_One', $account->username);
	}
	
	public function testUpdate()
	{
		$username = 'username2';
		$account = $this->accounts('account1');
		$account->username = $username;
		$this->assertTrue($account->save(false));
		$updatedAccount = Account::model()->findByPk($account->id);
		$this->assertTrue($updatedAccount instanceof Account );
		$this->assertEquals($updatedAccount->username, $username);
	}
	
	public function testDelete()
	{
		$account = $this->accounts('account1');
		$accountId = $account->id;
		$this->assertTrue($account->delete());
		$deleteAccount = Account::model()->findByPk($accountId);
		$this->assertEquals(null, $deleteAccount);
	}
	
	public function testGetTypes()
	{
	    $options = Account::model()->typeOptions;
	    $this->assertTrue(is_array($options));
	    
	    $this->assertTrue(2 == count($options));
	    $this->assertTrue(in_array('Douban', $options));
	    $this->assertTrue(in_array('Google', $options));
	}
	
	public function testGetTypeText()
	{
	    $this->assertTrue('Douban' == $this->accounts('account1')->getTypeText());
	}
}