<?php

namespace App\Http\Controllers;

use App\Version;
use DB;
use Illuminate\Http\Request;

class VersionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function EditVersion()
    {   $article = Version::all();
        if( $article->count() == 0 )
        {

            $data = array();
            $data['data_version'] = 4;
            $data['data_url'] = "";
            $data['popup_notification_title'] = "";
            $data['popup_notification_message'] = "";
            $data['popup_notification_positive_btn'] = "";
            $data['popup_notification_positive_url_link'] = "";
            $data['popup_notification_negative_btn'] = "";
            $insert=DB::table('versions')->insert($data);
            $editVersion = DB::table('versions')->first();
            return view('version.edit_version')->with('editVersion',$editVersion);
        }
        else
        {
            $editVersion = DB::table('versions')->first();
            return view('version.edit_version')->with('editVersion',$editVersion);
        }
        // echo "<pre>";
        // print_r($all);

        // exit();
        // if($all){
        //     $editVersion = DB::table('versions')->first();
        //     return view('version.edit_version')->with('editVersion',$editVersion);
        // }
        // else
        // {
        //     $data = array();
        //     $data['data_version'] = 4;
        //     $insert=DB::table('versions')->insert($data);
        // }
        // $editVersion = DB::table('versions')->first();

    }
    public function UpdateVersion(Request $request)
    {
    	$data = array();
        $data['data_version'] = "".$request->data_version;
        $data['data_url'] = "".$request->data_url;
        $data['popup_notification_title'] = "".$request->popup_notification_title;
        $data['popup_notification_message'] = "".$request->popup_notification_message;
        $data['popup_notification_positive_btn'] = "".$request->popup_notification_positive_btn;
        $data['popup_notification_positive_url_link'] = "".$request->popup_notification_positive_url_link;
        $data['popup_notification_negative_btn'] = "".$request->popup_notification_negative_btn;
        $update=DB::table('versions')->update($data);
              if ($update) {
                 $notification=array(
                 'messege'=>'Successfully Data Updated ',
                 'alert-type'=>'success'
                  );
                return Redirect()->back()->with($notification);                      
             }else{
              $notification=array(
                 'messege'=>'error ',
                 'alert-type'=>'success'
                  );
                 return Redirect()->back()->with($notification);
             }      
    }
}
