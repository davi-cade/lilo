<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{

    protected $service;

    public function  __construct(UserService $userService){
        $this->service = $userService;
    }
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'surname' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'birth_date'=> ['date'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'avatar' => ['sometimes', 'image', 'mimes:jpg,jpeg,png,svg,bmp', 'max:5000'],
        ]);

        $img = '/img/userProfile/default-avatar.svg';
        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            $pastName = md5($request->email.strtotime("now"));
            $img ='storage/'.($request->file('avatar')->store('img/'.$pastName.'/userProfile'));
        }

        $user = $this->service->store($request->name, $request->surname, $request->email, $request->birth_date, $request->password, $img);
        $user->attachRole(2);

        event(new Registered($user));
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
