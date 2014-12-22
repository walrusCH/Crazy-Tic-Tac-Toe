<?php 

class UserController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function login()
    {
    	$users1=Input::get('userName1');
    	$users2=Input::get('userName2');

    	$user1Model = User::firstOrCreate(['usr'=>$users1]);
    	$user2Model = User::firstOrCreate(['usr'=>$users2]);

    	return View::make('board',compact("user1Model", "user2Model"));
    }

}