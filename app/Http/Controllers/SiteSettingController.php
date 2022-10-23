<?php

namespace App\Http\Controllers;
use App\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
class SiteSettingController extends Controller
{
    public function index(){

        $sitesetting= SiteSetting::all();

        return view("admin.sitesetting.index" ,["sitesetting" => $sitesetting]);

    }


    public function  store(Request $request , SiteSetting  $siteSetting){

        foreach (array_slice($request->toArray() ,1) as  $key=>$req){
            SiteSetting::where("namesetting",$key)->update(['value'=>$req]);
        }
       return back();

    }



}
