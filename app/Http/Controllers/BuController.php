<?php

namespace App\Http\Controllers;

use App\Bu;
use App\User;
use App\Http\Requests\BuRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class BuController extends Controller
{
    public function index(Bu $bu){
        $bu =$bu->all();
        return view("admin.bu.index",["bu"=>$bu]);

    }

    public function create(){
        return view("admin.bu.add");

    }
    public function store(BuRequest  $buRequest , Bu $bu){
        $files=[];

        if (request('img')){

            for ($i=0;$i<count(\request("img")); $i++){
                $file=\request()->file("img")[$i];
                $extention=$file->getClientOriginalExtension();
                $filename=time().mt_rand(1000,9999).".".$extention;
                $file->move(public_path("img/imgs/"),$filename);
                $files[]="img/imgs/".$filename;

            }//end for
           // $bu->img= serialize($files);
        }

        $user=Auth::user();
        $data=[
            'bu_name'=>$buRequest->bu_name,
            'bu_price'=>$buRequest->bu_price,
            'bu_rent'=>$buRequest->bu_rent,
            'bu_square'=>$buRequest->bu_square,
            'bu_type'=>$buRequest->bu_type,
            'bu_small_dis'=>$buRequest->bu_small_dis,
            'bu_meta'=>$buRequest->bu_meta,
            'rooms' =>$buRequest->rooms,
            'bu_langtude'=>$buRequest->bu_langtude,
            'bu_latitude'=>$buRequest->bu_latitude,
            'bu_large_dis'=>$buRequest->bu_large_dis,
            'bu_status'=>$buRequest->bu_status,
            'user_id'=>$user->id,
            'img'=> $bu->img= serialize($files),
        ];
        $bu->create($data);
        return view("admin.bu.add");
    }

    public function edit(Bu $bu){

        $id=\request("id");

        $bu1=$bu->find($id);

        return view("admin.bu.edit",["bu"=>$bu1]);



    }

    public function update(Bu $bu ,Request $request){
        $user=Auth::user();
        $id=request("id");
        //dd($id);
        $bu=Bu::find($id);
        // dd($user);



        $bu->fill(
            [
                'bu_name' => $request->bu_name,
                'bu_price' => $request->bu_price,
                'rooms' =>$request->rooms,
                'bu_rent'=>$request->bu_rent,
                'bu_square'=>$request->bu_square,
                'bu_type'=>$request->bu_type,
                'bu_small_dis'=>$request->bu_small_dis,
                'bu_meta'=>$request->bu_meta,
                'bu_langtude'=>$request->bu_langtude,
                'bu_latitude'=>$request->bu_latitude,
                'bu_large_dis'=>$request->bu_large_dis,
                'bu_status'=>$request->bu_status,
                'user_id'=>$user->id,

            ]
        )->save();


        return view("admin.bu.edit", ["bu"=>$bu]);

    }

    public function delete(){
        $id=request("id");
        Bu::Find($id)->delete();
       // Bu::where("user_id",$id)->delete();
        return redirect("/adminpanel/bu"); ;

    }

    public function showall(Bu $bu){

        $bu=$bu::all();
     //   dd($bu);

        return view("website.bu.all",["bu"=>$bu]);
    }
    public function showvilla(Bu $bu){

        $bu=$bu::all()->where("bu_type",1);

        return view("website.bu.all",["bu"=>$bu]);
    }

    public function showflat(Bu $bu){

        $bu=$bu::all()->where("bu_type",0);

        return view("website.bu.all",["bu"=>$bu]);
    }

    public function showforrent(Bu $bu){

        $bu=$bu::all()->where("bu_rent",0);

        return view("website.bu.all",["bu"=>$bu]);
    }
    public function showownership(Bu $bu){

        $bu=$bu::all()->where("bu_rent",1);

        return view("website.bu.all",["bu"=>$bu]);
    }
    public function showfree(Bu $bu){

        $bu=$bu::all()->where("bu_status",0);

        return view("website.bu.all",["bu"=>$bu]);
    }

    public function showbusy(Bu $bu){

        $bu=$bu::all()->where("bu_status",1);

        return view("website.bu.all",["bu"=>$bu]);
    }

    public function search(Request $request,Bu $bu){

       $requestall=$request->toArray();
       $array=[];
       $query= $bu->all();
       //dd($query);
foreach ($requestall as $key=>$req){
    if($req != ""){
      $query= $query->where($key,$req);
      $array[$key]=$req;
    }

}

       $bu1=$query;

       // $bu=$bu::all()->where("bu_status",1);

        return view("website.bu.all",["bu"=>$bu1,"array"=>$array]);
    }


    public function siglebu($id , Bu $bu){

        //dd($id);
        $buinfo=$bu->find($id);

        return view("website.bu.showinfo",["bu"=>$buinfo]);

    }




}
