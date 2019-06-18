<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SubSubitemController extends Controller
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
    public function index($item_id,$subItem_id)
    {
        return view('subSubItem.add_sub_subitem')->with(['subItem_id'=>$subItem_id,'item_id'=>$item_id]);
    }
    public function inserSubSubItem(Request $request)
    {
        $data = array();
        $data['sub_subitem_name'] = $request->sub_subitem_name;
        $data['item_id'] = $request->item_id;
        $data['subItem_id'] = $request->subItem_id;
        $data['order_id'] = $request->order_id;
        $inserItem=DB::table('subSubItems')
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
    public function editSubSubItem($item_id,$subItem_id,$id)
    {
        $editSubSubItem = DB::table('subSubItems')->where(['item_id'=>$item_id,'subItem_id'=>$subItem_id,'id'=>$id])->first();
        return view('subSubItem.edit_sub_subitem')->with('editSubSubItem',$editSubSubItem);
    }
    public function updateSubSubItem($item_id,$subItem_id,$id,Request $request)
    {
        $data = array();
        $data['sub_subitem_name'] = $request->sub_subitem_name;
        $data['item_id'] = $request->item_id;
        $data['subItem_id'] = $request->subItem_id;
        $data['order_id'] = $request->order_id;
        $updateItem=DB::table('subSubItems')->where(['item_id'=>$item_id,'subItem_id'=>$subItem_id,'id'=>$id])->update($data);
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
    public function deleteSubSubItem($item_id,$subItem_id,$id)
    {
        $deleteSubSubItem = DB::table('subSubItems')->where(['item_id'=>$item_id,'subItem_id'=>$subItem_id,'id'=>$id])->delete();
        if ($deleteSubSubItem) {
                 $deleteContents = DB::table('contents')->where(['item_id'=>$item_id,'subItem_id'=>$subItem_id,'subSubItem_id'=>$id])->delete();
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
