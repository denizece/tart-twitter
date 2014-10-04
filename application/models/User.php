<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserModel
 *
 * @author denizece2686
 */
class Application_Model_User {
    //put your code here
    private $contents;
    private $tweetarr;
    public function __construct($username) {
        $link='http://api.twitter.com/1/statuses/user_timeline.json?count=20&include_rts="true"&screen_name='.$username;
        $this->contents=file_get_contents($link);
        $this->tweetarr=  json_decode($this->contents, true);
        $linktt='https://api.twitter.com/1/trends/1.json';
        $this->ttcontents= file_get_contents($linktt);
        $this->tttweetarr=  json_decode($this->ttcontents, true);

    }
    public function getTTContents(){     
    return $this->tttweetarr[0]['trends'];
    }
    public function getContents(){     
    return $this->contents;
    }
    public function getTweets(){
          return $this->tweetarr;
    }
    public function getFollowerCount(){
        return $this->tweetarr[0]['user']['followers_count' ];
    }
    public function getName(){
        return $this->tweetarr[0]['user']['name'];
    }
    public function getUserDescription(){
         return $this->tweetarr[0]['user']['description'];
    }
     public function getUserUrl(){
         return $this->tweetarr[0]['user']['url'];
     }
    public function getBackgroundImageURL(){
        return $this->tweetarr[0]['user']['profile_background_image_url'];
    }
    public function getLocation(){
        return $this->tweetarr[0]['user']['location'];
    }
    public function getTextColor(){
        return $this->tweetarr[0]['user']['profile_text_color'];
    }
    public function getBGColor(){
        return $this->tweetarr[0]['user']['profile_background_color'];
    }
    public function getLang(){
        return $this->tweetarr[0]['user']['lang'];
    }
    
}

?>
