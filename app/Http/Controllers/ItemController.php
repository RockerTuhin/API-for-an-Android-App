<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ItemController extends Controller
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
        return view('item.add_item');
    }
    public function inserItem(Request $request)
    {
        $data = array();
        $data['item_name'] = "".$request->item_name;
        $data['item_updated_date'] = "".$request->item_updated_date;
        $data['order_id'] = $request->order_id;
        $inserItem=DB::table('items')
                         ->insert($data);
        if ($inserItem) {
                 $notification=array(
                 'messege'=>'Successfully Data Inserted ',
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
    public function editItem($id)
    {
        $editItem = DB::table('items')->where('id',$id)->first();
        return view('item.edit_item')->with('editItem',$editItem);
    }
    public function updateItem($id,Request $request)
    {
        $data = array();
        $data['item_name'] = "".$request->item_name;
        $data['item_updated_date'] = "".$request->item_updated_date;
        $data['order_id'] = $request->order_id;
        $updateItem = DB::table('items')->where('id',$id)->update($data);
        if ($updateItem) {
                 $notification=array(
                 'messege'=>'Successfully Data Updated',
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
    public function deleteItem($id)
    {
        $deleteItem=DB::table('items')
                        ->where('id',$id)
                        ->delete();

        if ($deleteItem) {
                 $deleteSubItem=DB::table('subItems')->where('item_id',$id)->delete();
                 $deleteContents = DB::table('contents')->where('item_id',$id)->delete();
                 $notification=array(
                 'messege'=>'Successfully Data Deleted',
                 'alert-type'=>'success'
                  );
                return Redirect('/edit-version')->with($notification);                      
             }else{
              $notification=array(
                 'messege'=>'error',
                 'alert-type'=>'success'
                  );
                 return Redirect()->back()->with($notification);
             }  
    }
}
