<?php
namespace App\Http\Controllers\Auth;

//name space basically gives you aunique identifier to your class..

/* This is one of the controllers that are under this http folder
 app as its parent folder */
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;


//Whenever you see this word illuminate it reffers to te laravel core
//so everything that is impoted from illuminate is imported from laravel 

/*Every controller that you created or by default must
 extends the Controller as you can see down here...!*/

//laravel by defult gives you some controllers like login etc
//that are sitting there if you want to use them or you can 
//create your own


class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
