<?php

class DemoController extends Controller
{
	public $layout='//layouts/block';
	
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionDouban()
	{
	    $username = 'wikiidw';
	    $apiUrl = 'https://api.douban.com/v2/book/user/%s/collections';
	    
	    $url = sprintf($apiUrl, $username);
	    $this->render('douban', array(
	       'result' => $this->getContent($url),
	    ));
	    
	}
	
	protected function getContent($url)
	{
	    $ch = curl_init();	    
	    curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        $data = curl_exec($ch);
        
        if(curl_errno($ch))
            echo 'Curl error: ' . curl_error($ch);

        return $data;
	}
}