<?php



namespace App\Http\Controllers\Auth;



use App\User;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;

use Illuminate\Foundation\Auth\RegistersUsers;



class RegisterController extends Controller

{

    use RegistersUsers;

    protected $redirectTo;

    public function __construct()

    {

        if (Auth::check() && Auth::user()->role->id == 1)

        {

            $this->redirectTo = route('admin.dashboard');

        } else {

            $this->redirectTo = route('author.dashboard');

        }

        $this->middleware('guest');

    }



    /**

     * Get a validator for an incoming registration request.

     *

     * @param  array  $data

     * @return \Illuminate\Contracts\Validation\Validator

     */

    protected function validator(array $data)

    {

        return Validator::make($data, [

            'name' => 'required|string|max:255',

            'username' => 'required|string|max:255|unique:users',

            'email' => 'required|string|email|max:255|unique:users',

            'password' => 'required|string|min:6|confirmed',

        ]);

    }



    /**

     * Create a new user instance after a valid registration.

     *

     * @param  array  $data

     * @return \App\User

     */

    protected function create(array $data)

    {

        return User::create([

            'role_id' => 2,

            'name' => $data['name'],

            'username' => str_slug($data['username']),

            'email' => $data['email'],

            'password' => Hash::make($data['password']),

        ]);

    }

}