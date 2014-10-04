<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author denizece2686
 */
class UserController extends Zend_Controller_Action {

    //put your code here
    private $um;
    private $uv;
    private $tweetarr;

    public function init() {
        
    }

    public function userAction() {
        $this->um = new Application_Model_User('martinfowler');
        $this->view->tweetarr = json_decode($this->um->getContents(), true);
        $this->view->UserName = $this->um->getName();
        $this->view->FollowerCount = $this->um->getFollowerCount();
        $this->view->Description = $this->um->getUserDescription();
        $this->view->URL = $this->um->getUserUrl();
        $this->view->BackgroundURL = $this->um->getBackgroundImageURL();
        $this->view->BGColor = $this->um->getBGColor();
        $this->view->textColor = $this->um->getTextColor();
        $this->view->Location = $this->um->getLocation();
        $this->view->Lang = $this->um->getLang();
        $this->view->TTarr = $this->um->getTTContents();
    }

}

?>
