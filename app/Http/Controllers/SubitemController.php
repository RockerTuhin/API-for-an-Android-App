<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SubitemController extends Controller
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
    public function index($item_id)
    {
        return view('subItem.add_subitem')->with('item_id',$item_id);
    }
    public function inserSubItem(Request $request)
    {
        $data = array();
        $data['subitem_name'] = "".$request->subitem_name;
        $data['item_id'] = $request->item_id;
        $data['order_id'] = $request->order_id;
        $inserItem=DB::table('subItems')
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
    public function editSubItem($item_id,$id)
    {
        $editSubItem = DB::table('subItems')->where(['id'=>$id,'item_id'=>$item_id])->first();
        return view('subItem.edit_subitem')->with('editSubItem',$editSubItem);
    }
    public function updateSubItem($item_id,$id,Request $request)
    {
        $data = array();
        $data['subitem_name'] = "".$request->subitem_name;
        $data['item_id'] = $request->item_id;
        $data['order_id'] = $request->order_id;
        $updateSubItem=DB::table('subItems')->where(['id'=>$id,'item_id'=>$item_id])->update($data);
        if ($updateSubItem) {
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
    public function deleteSubItem($item_id,$id)
    {
        $deleteSubItem=DB::table('subItems')->where(['id'=>$id,'item_id'=>$item_id])->delete();
        
        if ($deleteSubItem) {
                 $deleteContents = DB::table('contents')->where(['item_id'=>$item_id,'subItem_id'=>$id])->delete();
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
