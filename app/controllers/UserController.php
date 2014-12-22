<?php 

class UserController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function showProfile()
    {
        $user = "awesome";

        return View::make('abc', array('user' => $user));
    }

}