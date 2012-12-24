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
	    $username = 'wikiidw';
	    $douban = new Douban();
	    $douban->setUsername($username);
	    $douban->setParams(array('status'=>'wish'));
	   
	    $this->render('douban', array(
	       'result' => $douban->getBookList(),
	    ));
	    
	}
	
}