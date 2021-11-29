<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\AdminService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;

class RegisteredAdminController extends Controller
{
    protected $ServiceOfAdmin;

    public function  __construct(AdminService $adminService){
        $this->ServiceOfAdmin = $adminService;
    }
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('administrator.superadministrator.admin-register');
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
            'birth_date'=> ['required', 'date'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $img = '/img/userProfile/default-avatar.svg';
        $directory = md5($request->email.$request->birth_date.strtotime("now"));

        $admin = $this->ServiceOfAdmin->store($request->name, $request->surname, $request->email, $request->birth_date, $request->password, $img, $directory);

        $admin->attachRole(2);

        event(new Registered($admin));
        
        return redirect('/admin/register');
    }
}
