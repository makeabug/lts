<?php

class DemoController extends Controller
{
	public $layout='//layouts/block';
	
	public function actionIndex()
	{
	    $this->forward('douban');
	    
		$this->render('index');
	}
	
	public function actionDouban()
	{
	    $result = array();
	    $doubanAccount = Account::model()->find('type=:type', array(':type'=>Account::TYPE_DOUBAN ));
	    if ($doubanAccount)
	    {
	        $douban = new Douban();
    	    $douban->setUsername($doubanAccount->username);
    	    $douban->setParams(array('status'=>'wish'));
    	    $result = $douban->getBookList();
	    }
	     
	    $this->render('douban', array(
	       'result' => $result,
	    ));
	    
	}
	
}