<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use View;
use Validator;
use Redirect;

class UserController extends Controller
{
	
	public function __construct() {
		$this->user = new User;
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'here';
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login()
    {
        return view('user.login');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function postLogin(Request $request)
    {
        $rules = [
            'email'    => 'required|min:4|email',
            'password' => 'required|min:4'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return View('user.login')
                ->withInput($request)
                ->withErrors($validator);
        } else {
            $auth = Auth::attempt(array(
                    'email' => $request->get('email'),
                    'password' => $request->get('password'))
            );
            if($auth) {
                return Redirect::to('/');
            }
            $validator->errors()->add('email', 'Something went wrong!');
            return Redirect::back()->withErrors($validator);
        }
    }

    /**
     * @return mixed
     */
    public function registerUser(Request $request)
    {
        //$request->request->add(['username' => 'User registered successfully'])
        $rules = [
            'username'    => 'required',
			'email'    => 'required|min:4|email|unique:users',
            'password' => 'required|min:4'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return View('user.login')
                ->withInput($request)
                ->withErrors($validator);
        } else {
			$save = $this->user->createUser($request);
            if ($save) {
                \Request::merge(array('message' => 'Account Created Successfully!'));
				return Redirect::back();
            }
			$validator->errors()->add('error', 'Please try again!');
			return Redirect::back()->withErrors($validator);
        }
    }

    /**
     *
     */
    public function logoutUser()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}
