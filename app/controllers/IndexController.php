<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
    	for ($i=0; $i < 30; $i++) { 
    		print 'Page:'.($i+1).'<br/>';
    		Users::insertStackUsers($this->callStackAPI("http://api.stackexchange.com/2.2/users?order=desc&page=".($i+1)."&pagesize=100&sort=reputation&site=stackoverflow"));
    	}
    }
    public function convertToModeratorsAction(){
    	Users::copyUsersToModerator();
    }

}

