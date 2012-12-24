<?php
class Douban extends CComponent 
{
    private $bookUrl = 'https://api.douban.com/v2/book/user/%s/collections';
    
    private $username = null;
    private $params = array();
    
    public function construct($username=null)
    {
        if ($username)
            $this->setUsername($username);
    }
    
    public function setUsername($username)
    {
        $this->username = $username;
    }
    
    public function getResult($url)
    {
        $ch = curl_init();	    
	    curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->params);
        
        $result = curl_exec($ch);    
        if(curl_errno($ch))
            echo 'Curl error: ' . curl_error($ch);

        return json_decode($result, true);
    }
    
    public function buildUrl()
    {
        $url = sprintf($this->bookUrl, $this->username);

        return $url;
    }
    
    public function setParams(array $params)
    {
        $this->params = $params;
    }
    
    public function getBookList()
    {
        return $this->getResult( $this->buildUrl() );
    }
    
}
?>