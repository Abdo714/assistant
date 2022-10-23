<?php

namespace App\Http\Controllers;

use App\Bu;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AddUserRequest;


class UsersController extends Controller
{
    public function index(User $user){

        $user=$user->all();

        return view("admin.user.index",['user'=>$user ]);

    }

    public function create(){
        return view("admin.user.add");

    }

    protected function store(AddUserRequest $request  ,User $user)
    {
         $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
         return redirect("/adminpanel/users");
    }



    public function edit(){
        $id=request("id");
        $user =User::find($id);
        return view("admin/user/edit", ["user"=>$user]);

    }

    public function update(Request $request ){
        $id=request("id");
        //dd($id);
        $user =User::find($id);
      //  dd($user);

         $password=Hash::make($request->password);

        $user->fill(
            [
                'name' => $request->name,
                'email' => $request->email,
                'admin' =>$request->admin,
                'password'=>$password
            ]
        )->save();

        //$user->fill($request->all())->save();

        return view("admin/user/edit", ["user"=>$user]);

    }


    public function delete(User $user){
        $id=request("id");
        $user->Find($id)->delete();
        Bu::where("user_id",$id)->delete();
        return redirect("/adminpanel/bu/index"); ;

    }


}
