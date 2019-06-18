<?php

namespace App\Http\Controllers;


use App\Http\Resources\Version as VersionResource;
use App\Version;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class APIController extends Controller
{
    public function showapi()
    {
    	$APIusingResources = Version::all();
        return VersionResource::collection($APIusingResources);
        //return new FundaCollection($fundaAPIusingResources);
    }
    public function showVersionAPI()
    {
    	$API = Version::all();
    	return response()->json($API);
    }

    public function changePassword()
    {
        return view('change_password');
    }

    public function updatePassword($id,Request $request)
    {
        // DB::table('users')->
        if($request->password == $request->retype_password){
            $validatedData = $request->validate([
                'password' => 'required|min:8',
            ]);
            $data = array();
            $data['password'] = Hash::make($request->password);
            $update = DB::table('users')->where('id',$id)->update($data);
            if ($update) 
            {
                $notification=array(
                    'messege'=>'Password Updated Successfully',
                    'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification);                 
            }  
        }
        else
        {
            $notification=array(
                'messege'=>'Password Not matched',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }   
    }

}
