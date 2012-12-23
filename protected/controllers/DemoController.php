<?php

class DemoController extends Controller
{
	public $layout='//layouts/block';
	
	public function actionIndex()
	{
		$this->render('index');
	}
}