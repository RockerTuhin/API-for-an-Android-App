<?php

namespace App\Http\Controllers;

use App\Version;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $article = Version::all();
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
            return view('home')->with('editVersion',$editVersion);
        }
        else
        {
            $editVersion = DB::table('versions')->first();
            return view('home')->with('editVersion',$editVersion);
        }
    }
}
