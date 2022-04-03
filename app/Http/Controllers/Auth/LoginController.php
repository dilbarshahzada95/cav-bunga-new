<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\CustomerDetails;
use Toastr;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    function socialGmail()
    {
        return Socialite::driver('google')->redirect();
    }
    function socialgmailRedirect()
    {
        $user = Socialite::driver('google')->user();
        $finduser = User::where('email', $user->email)->first();

        if ($finduser) {
            Auth::login($finduser);
            return redirect('/');
        } else {
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => Hash::make($user->token),
                'google_id' => $user->id,
                'role' => 'customer',

            ]);
            $newUserDetails = CustomerDetails::create([
                'customer_id' => $newUser->id,
                'name' => $user->name,
                'email' => $user->email,
                'phone' => '',
                'street' => '',
                'mob' => '',
                'city' => '',
                'pincode' => '',
                'country' => '',
            ]);


            Auth::login($newUser);
            return redirect('/');
        }
    }
    function socialFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    function socialFacebookRedirect()
    {
        $user = Socialite::driver('facebook')->user();
        $finduser = User::where('email', $user->email)->first();
        if ($finduser) {
            Auth::login($finduser);
            return redirect('/');
        } else {
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => Hash::make($user->token),
            ]);
            $newUserDetails = CustomerDetails::create([
                'customer_id' => $newUser->id,
                'name' => $user->name,
                'email' => $user->email,
                'phone' => '',
                'street' => '',
                'mob' => '',
                'city' => '',
                'pincode' => '',
                'country' => '',
            ]);

            Auth::login($newUser);
            return redirect('/');
        }
    }

    function loginCustomer(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with(['error' => $validator->errors()]);
        } else {
            $credentials = array('email' => $request->email, 'password' => $request->password, 'role' => 'customer');
            if (Auth::attempt($credentials)) {
                return redirect('/');
            } else {
                return redirect('login-user')->with('email', ['message' => 'Invalid Email or Password']);
            }
        }
    }

    function registerCustomer(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with(['error' => $validator->errors()]);
        } else {

            $newUser = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'customer',
            ]);
            $newUserDetails = CustomerDetails::create([
                'customer_id' => $newUser->id,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => '',
                'street' => '',
                'mob' => '',
                'city' => '',
                'pincode' => '',
                'country' => '',
            ]);

            return redirect('profile')->with('success',  'Registration Successful');
        }
    }
}
