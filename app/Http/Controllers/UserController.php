<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Toastr;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc') -> paginate(10);
        return view('manage.users.index') -> withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'name' => 'required | max:191',
            'email' => 'required | email | unique:users'
        ]);
        
        if($request -> has('password')&& !empty($request -> password)){
            $password = trim($request -> password);
        }else{
            # set the manual password
            $length = 10;
            $keyspace = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
            $str = '';
            $max = mb_strlen($keyspace, '8bit') - 1;
            for($i = 0; $i < $length; ++$i){
                $str .= $keyspace[random_int(0, $max)];
            }
            $password = $str;
        }

        $user = new User;

        $user -> name = $request -> name;
        $user -> email = $request -> email;
        $user -> password = Hash::make($password);

        if($user -> save()){
            Toastr::success('New User has been created.', 'Success');
            return redirect() -> route('users.show', $user -> id);
        }
        else{
            Toastr::error('Cannot Save user.', 'Error');
            return redirect() -> route('users.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('manage.users.show') -> withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('manage.users.edit') -> withUser($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this -> validate($request, [
            'name' => 'required | max:191',
            'email' => 'required | email | unique:users,email,' . $id,
        ]);

        $password = '';

        $user = User::findOrFail($id);
        $user -> name = $request -> name;
        $user -> email = $request -> email;

        //checking password type
        if($request -> set_pass == 'auto'){
            $length = 10;
            $keyspace = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
            $str = '';
            $max = mb_strlen($keyspace, '8bit') - 1;
            for($i = 0; $i < $length; ++$i){
                $str .= $keyspace[random_int(0, $max)];
            }
            $password = $str;
        }
        else if($request -> set_pass == 'manual'){
            $password = $request -> password;
        }

        $user -> password = Hash::make($password);

        if($user -> save()){
            Toastr::success('User Info has been updated.', 'Success');
            return redirect() -> route('users.show', $id);
        }
        else{
            Toastr::error('There have been some in updating the user info. Try again', 'Error');
            return redirect() -> route('users.edit', $id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
