<?php //Twitter Application Class and Keys 
  
  require_once( "TwitterAPIExchange.php" ); 
 
  $settings = array(
  	   
  	   'oauth_access_token' => "3147994861-QZsmVHYUYPeIxoJl3JOQM0DjJ3rcQmHl80KrtZB", 
  	   'oauth_access_token_secret' => "9JSdgyo0CabCJVieFq8yyT2KAJ431Uy7VPwnNsnYt19fU", 
  	   'consumer_key' => "NNzCUvEsMobrBoD7vWFpKpCHa",
  	   'consumer_secret' => "Z8CbAyt3jNJIvPP0iUr3JMTAq7p4xJqtTByeJoBaPEUrMOPfzM" ); 

  $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json'; 
  
  $requestMethod = 'GET'; 
  
  $getfield = '?screen_name=deepak32651423&count=5'; //count it means how many latest tweets you want. // Create the object 
  
  $twitter = new TwitterAPIExchange($settings); // Make the request and get the response into the $json variable 
  
  $json = $twitter->setGetfield($getfield) ->buildOauth($url, $requestMethod) ->performRequest(); // It's json, so decode it into an array 

  $result = json_decode($json); 

  foreach ($result as $entry) {?> 
  
  <img src="<?php echo $entry->user->profile_image_url;?>"> <?php echo $entry->text ."<br>";

 } 
 
  echo '<pre>';
  print_r($result); 
 
  // Access the profile_image_url element in the array // 

 // echo $result->profile_image_url; 



 ?>
            <a class="twitter-timeline"  href="https://twitter.com/deepak32651423" data-widget-id="598863950638239744">Tweets by @deepak32651423</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          