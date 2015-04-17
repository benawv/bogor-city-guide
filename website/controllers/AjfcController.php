<?php

class AjfcController extends Website_Controller_Action {
	
	public function init(){
		parent :: init();

		include_once(dirname(__FILE__)."/../../pimcore/config/startup.php");
		Pimcore::initAutoloader();
		Pimcore::initConfiguration();
		Pimcore::initLogger();
		
		$autoloader = Zend_Loader_Autoloader::getInstance();
		$autoloader->registerNamespace('Facebook');
		
		Pimcore_Model_Cache::disable();
		Version::disable();
		$appId='727536864031162';
		$secret = 'ddccc4384fd244f82a7a3fb4b346f064';
		
		$config = array(
			'appId' => $appId,
			'secret' => $secret,
		);
		$facebook=new Facebook($config);
		
		
		$appId='727536864031162';
		$secret = 'ddccc4384fd244f82a7a3fb4b346f064';
		$access_token='CAAKVsOBXcboBAIjGJtRtdYsWY4qDpO4daXZCFEYF3rNh3p00ikIqqMB47qfUb2DZCSVe39Tcvcso9H7cGTZC2D0PbLkIzZC28gVj6mXo0Es7IhD5z2AOcuPlmfg1yMNnjZBpRUBgYZBQ7ZBR48hQ9iTxQ1sBkg5YnNBSbzHrZBtiBzXlFE9T1NCIF3c6pNJVlZBWmpeIFXn6CJ6GVTawuJ9gSEEqJnFiPCZBkZD';
		$accounts = json_decode($this->open_api_template('https://graph.facebook.com/me/accounts?access_token='.$access_token,$appId,$secret));

		if(isset($accounts->data)){
		    foreach($accounts->data as $account){
			if($account->id == $page_id)
			    $facebook->setAccessToken($access_token);
			   
		    }
		}
		
		 $this->feeds=$facebook->api('164934653709133/feed');
		 //$this->feeds=$facebook->api('1587275824864190/picture');
		
		
		
		
		$twitteroauth=new TwitterOAuth();	
		$this->tw_connection = $twitteroauth->create('iCin1AqYPO3AOpwGySuxEcCV5','lel0lh8FVV6xsXRpWXaAxHkbL87srnVJvm8aX626vMvDua1v0a','52367165-VqEH02VOy3qN8wBDhpV7IDAMFgVz2KTLbkNlndsXK','GbagBCzfdGy1Rxy6eJlNIBhqx6pqprczmZhrhoXKsO6CW');
		
	
	}
	
	public function pageAjfcAction () {
		$this->enableLayout();
		$this->setLayout('ajfc');
	}
	
	function facebook_page_manage($access_token){
		$appId='727536864031162';
		$secret = 'ddccc4384fd244f82a7a3fb4b346f064';
		$url='https://graph.facebook.com/me/accounts?access_token='.$access_token;
		$account = json_decode(open_api_template($url,$appId,$secret));
		print_r($account->data);
		//return $account->data;
	}

	
	public function curl_get_file_contents($URL) {
		$c = curl_init();
		curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($c, CURLOPT_URL, $URL);
		curl_setopt($c, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt( $c, CURLOPT_ENCODING, "UTF-8" );
		curl_setopt( $c, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $c, CURLOPT_AUTOREFERER, true );
		curl_setopt( $c, CURLOPT_CONNECTTIMEOUT, 60 );
		curl_setopt( $c, CURLOPT_TIMEOUT, 60 );
		curl_setopt( $c, CURLOPT_MAXREDIRS, 10 );
		$contents = curl_exec($c);
		$err  = curl_getinfo($c,CURLINFO_HTTP_CODE);
		curl_close($c);
		if ($contents) return $contents;
		else return FALSE;
	}
	
	
	public function facebook_request($path, $attachment = null){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,'https://graph.facebook.com/v2.3/'.$path);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($ch, CURLOPT_POST, true);
		if($attachment != null)
		    curl_setopt($ch, CURLOPT_POSTFIELDS, $attachment);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}
	
	public function open_api_template($url, $app_id, $app_secret){
		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_URL, $url);
		curl_setopt( $ch, CURLOPT_USERAGENT, "AJFCIndonesia" );
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt( $ch, CURLOPT_ENCODING, "UTF-8" );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
		curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 60 );
		curl_setopt( $ch, CURLOPT_TIMEOUT, 60 );
		curl_setopt( $ch, CURLOPT_MAXREDIRS, 10 );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, array(
		    'app_id:'.$app_id,
		    'app_secret:'.$app_secret
		    ));
		$content = curl_exec( $ch );
	    
		return $content;
	}
	
	public function getSocialMediaConf($types){
		$apiKey;
		$appId;
		$callbackurl;

		$getFacebookConfg=new Object_socialMediaAJFC_List();
		foreach($getFacebookConfg as $items){

			if($items->socialMediaType == $types){
				$apiKey=$items->apiKey;
				$appId=$items->appId;
				$callbackurl=$items->callbackurl;
			}	
		}
		
		$socialConfig=json_encode(array(
						'apiKey'=>$apiKey,
						'appId'=>$appId,
						'callbackurl'=>$callbackurl,
					));
		
		return $socialConfig;
	    
	}
	
	function SetAccessToken($access_token, $page_id){
		$appId='727536864031162';
		$secret = 'ddccc4384fd244f82a7a3fb4b346f064';
		$access_token='CAAKVsOBXcboBAIjGJtRtdYsWY4qDpO4daXZCFEYF3rNh3p00ikIqqMB47qfUb2DZCSVe39Tcvcso9H7cGTZC2D0PbLkIzZC28gVj6mXo0Es7IhD5z2AOcuPlmfg1yMNnjZBpRUBgYZBQ7ZBR48hQ9iTxQ1sBkg5YnNBSbzHrZBtiBzXlFE9T1NCIF3c6pNJVlZBWmpeIFXn6CJ6GVTawuJ9gSEEqJnFiPCZBkZD';
		$accounts = json_decode($this->open_api_template('https://graph.facebook.com/me/accounts?access_token='.$access_token,$appId,$secret));

		if(isset($accounts->data)){
		    foreach($accounts->data as $account){
			if($account->id == $page_id)
			    $facebook->setAccessToken($access_token);
		    }
		}
	}
	
	public function cronAjfcTwAction () {		
					
		$result_tw = $this->tw_connection->get('search/tweets',
                                         array("q"=>'%23ajfc2015',"count" => 10));
       		$j=0;
		
		
		$getId=Object_Abstract::getByPath('/social-feed/');

		if(isset($result_tw)){
		    $namakey ='facebook'."_".strtotime(date("YmdHis"));
		    foreach($result_tw as $tweet){
			foreach($tweet as $tweets){
				
				if(isset($tweets->id_str)!=''){
					
					$exsistFeedTwitter = new Object_SocialMediaFeed_List();
					$exsistFeedTwitter->setCondition("streamId = '".$tweets->id_str."'");					
					$exsistFeedTwitter->setUnpublished('true');
					
					foreach($exsistFeedTwitter as $extId){
						$extistStreamId=$extId->StreamId;
					}
					
					if(isset($extistStreamId) != isset($tweets->id_str)){
						$entries=Object_Abstract::getByPath('/social-media-config/twitter');
						$feedFb = new Object_SocialMediaFeed();
						$feedFb->setsocialMediaType($entries);
						$feedFb->setStreamId($tweets->id_str);
						$feedTwitter->setFrom($tweets->user->name);
						$feedTwitter->setUserImages($tweets->user->profile_image_url);
						$feedTwitter->setCreateDate($tweets->created_at);
						$feedTwitter->setFromId($tweets->user->id);
						$feedTwitter->setLinkAsset($tweets->screen_name);
						$feedTwitter->setTypeAsset('images');
						$feedTwitter->setLinkFeed($tweets->entities->media[0]->media_url);
						$feedTwitter->setMessages($tweets->text);
						$feedTwitter->setKey(strtolower($namakey.$j.rand()));
						$feedTwitter->setO_parentId($getId->o_id);
						$feedTwitter->setIndex(0);
						$feedTwitter->setPublished(0);
						$feedTwitter->save();
					}
				}
			$j++;
			}
		    
		    }
		 
		}
		echo 'cron twitter sukses sebanyak:'.$j;
	}
	
	public function cronAjfcFbAction () {
		
		$getId=Object_Abstract::getByPath('/social-feed/');
		$getConfig=json_decode($this->getSocialMediaConf('facebook')); //GET Config Facebook API
		$apiKey=$getConfig->apiKey;
		$appId=$getConfig->appId;
		$callbackurl=$getConfig->callbackurl;
		$extistStreamId=0;
		$i=0;
		$namakey ='facebook'."_".strtotime(date("YmdHis"));
		foreach($this->feeds as $feeds){
			foreach($feeds as $items){
				if(isset($items[id])!=''){
					
					$exsistFeedFb = new Object_SocialMediaFeed_List();
					$exsistFeedFb->setCondition("streamId = '".$items[id]."'");					
					$exsistFeedFb->setUnpublished('true');
					
					foreach($exsistFeedFb as $extId){
						$extistStreamId=$extId->StreamId;
					}									

					if($extistStreamId != $items[id]){
						$entries=Object_Abstract::getByPath('/social-media-config/facebook');
						$feedFb = new Object_SocialMediaFeed();
						$feedFb->setsocialMediaType($entries);
						$feedFb->setStreamId($items[id]);
						$feedFb->setFrom($items[from][name]);
						//$feedFb->setUserImages($items->user->profile_image_url);
						$feedFb->setCreateDate($items[created_time]);
						$feedFb->setFromId($items[from][id]);
						$feedFb->setLinkAsset($items[from][name]);
						$feedFb->setTypeAsset('images');
						$feedFb->setLinkFeed($items[id]);
						$feedFb->setMessages($items[message]);
						$feedFb->setKey(strtolower($namakey.$j.rand()));
						$feedFb->setO_parentId($getId->o_id);
						$feedFb->setIndex(0);
						$feedFb->setPublished(0);
						$feedFb->save();
						echo "<pre>";
						print_r($items);
						echo "</pre>";
					}
				}
				
			}
		}
		
		//$this->SetAccessToken($access_token, $page_id);
		//$result = $Facebook->api('/me/feed');
		
		//$this->facebook->api('/me/feed');
		//$url="'https://graph.facebook.com/me/')";
			

	}
	

}