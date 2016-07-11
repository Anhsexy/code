<title>Curl Like - Auto Like - Tools Facebook</title>
<link rel="shortcut icon" href="http://i.imgur.com/meZIEQz.png" />
<meta http-equiv="refresh" content="10">
<?php
// Cron lấy ở code vipviet.info
	class starleo
{
	public $token;
	public $id;
	
	private function xstring($string,$start,$end)
	{
        $str = explode($start,$string);
        $str = explode($end,$str[1]);
        return $str[0];
    }
	private function xaccess($url)
	{
	
		$ch = curl_init($url);
		curl_setopt($ch,CURLOPT_FOLLOWLOCATION,false);
		curl_setopt($ch,CURLOPT_REFERER,$url);			
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);	
		curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36');
		curl_setopt($ch,CURLOPT_COOKIEFILE,'cookie.txt');
		curl_setopt($ch,CURLOPT_COOKIEJAR,'cookie.txt');				
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$body = curl_exec($ch);
		$info = curl_getinfo($ch);
		$redir = $info['redirect_url'];
		$redirect = $redir;
		return $body;
	}
	private function copyright()
	{
		$w = '<body style="background-color:black">
		<font color="green" style="Times New Roman"><b>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<pre>
AUTO LIKE THÀNG CÔNG ^^
	</pre>';
	echo $w;
	}
	private function Submit($url,$fields)
    {
		$field_string = http_build_query($fields);
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_FOLLOWLOCATION,false);
		curl_setopt($ch,CURLOPT_REFERER,$url);          
		curl_setopt($ch,CURLOPT_TIMEOUT,5);		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.52 Safari/537.36');
		curl_setopt($ch,CURLOPT_COOKIEFILE,'cookie.txt');
		curl_setopt($ch,CURLOPT_COOKIEJAR,'cookie.txt');
		curl_setopt($ch, CURLOPT_POST, count($field_string));
		curl_setopt($ch,CURLOPT_POSTFIELDS,$field_string);   
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$body = curl_exec($ch);
		unlink("cookie.txt");
		curl_close($ch);
    }
	        private function likelo()
        {
                $II = "http://likelo.in/login.php?user=".$this->token;
                $III = array(
                "submit" => "null",
                );
                $IIII = "http://likelo.in/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                "selector" => "200"
                );
                echo $this->Submit($II,$III);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII);
		}		
	private function banbelike()
        {
                $II = "http://friendsliker.com/Go.login.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://friendsliker.com/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
 
                echo $this->Submit($IIII,$IIIII);
                  
        }       
          private function apple()
        {
                $II = "http://www.applelikers.com/verify.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://www.applelikers.com/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
 
                echo $this->Submit($IIII,$IIIII);
                  
        }       
                
		  private function lovelike()
        {
                $II = "http://www.love100like.com/verify.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://www.love100like.com/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Plus Like",
                );
                echo $this->Submit($II,$III);
          
                echo $this->Submit($IIII,$IIIII);
                  
        }    		

					 private function vipliker()
        {
                $II = "http://vipliker.me/loginx.php";
                $III = array(
                "user" => $this->token,
				"masuk" => "Submit Query",
                );
                
				$IIII = "http://vipliker.me/liker.php?type=status";
                $IIIII = array(
                "access_login" => "admin",
				"access_password" => "123456",
				"Submit" => "Countinue",
                );
				
				$IIIIII = "http://vipliker.me/liker.php?type=custom";
                $IIIIIII = array(
                "id" => $this->id,
                "pancal" => "Submit",
                );
               
			    echo $this->Submit($II,$III);
       
                echo $this->Submit($IIII,$IIIII);
	
				echo $this->Submit($IIIIII,$IIIIIII);
                  
        }    	
	private function autofbtools()
        {
                $II = "http://auto-fb-tools.com/verify.php?user=".$this->token;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://auto-fb-tools.com/verify.php?user=";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
 
                echo $this->Submit($IIII,$IIIII);
                  
        }       	
		
	public function SADAP()
	{
		ignore_user_abort(true);
		while (@ob_end_flush());      
		ob_implicit_flush(true);
		echo $this->copyright();
		echo $this->likelo();
		echo $this->banbelike();
		echo $this->apple(); 
		echo $this->lovelike();
		echo $this->vipliker();
		echo $this->autofbtools();
		break;
	}
}
$jsonde = json_decode(file_get_contents('http://curl.bot-viet.xyz/api.php?uid='.$_GET['uid']),true);
$token= $jsonde['token'];
$limitlike = $jsonde['max'];
$idlike = $jsonde['idlike'];
 $feed=json_decode(file_get_contents('https://graph.fb.me/'.$idlike.'/feed?access_token='.$token.'&limit=1'),true); 
for($i=0;$i<count($feed['data']);$i++){ // Parse ID
$id = $feed['data'][$i]['id'];  
$sllike = $feed['data'][$i]['likes']['count']; 
} 
$stt = explode("_", $id);
$iduser= $stt[0];
$post_id= $stt[1];	
$try = new starleo;
if($sllike<=$limitlike)
{
$try->token=$token;
$try->id=$post_id;
$try->SADAP();
}

?>