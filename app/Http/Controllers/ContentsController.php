<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContentsController extends Controller
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
    
    public function indexOne($item_id)
    {
        return view('contents.add_contents_one')->with('item_id',$item_id);
    }
    public function indexTwo($item_id,$subItem_id)
    {
    	return view('contents.add_contents_two')->with(['item_id'=>$item_id,'subItem_id'=>$subItem_id]);
    }
    public function indexThree($item_id,$subItem_id,$subSubItem_id)
    {
    	return view('contents.add_contents_three')->with(['item_id'=>$item_id,'subItem_id'=>$subItem_id,'subSubItem_id'=>$subSubItem_id]);
    }
    public function inserContents(Request $request)
    {
    	$data = array();
        $data['item_id'] = $request->item_id;
        $data['subItem_id'] = $request->subItem_id;
        $data['title'] = "".$request->title;
        $data['hints'] = "".$request->hints;
        $data['name'] = $request->name;
        $data['designation'] = $request->designation;
        $data['mobile_one'] = '+880'.$request->mobile_one;
        $data['mobile_two'] = '+880'.$request->mobile_two;
        $data['phone_one'] = '+880'.$request->phone_one;
        $data['phone_two'] = '+880'.$request->phone_two;
        $data['email_one'] = $request->email_one;
        $data['email_two'] = $request->email_two;
        $data['website'] = 'http://'.$request->website;
        $data['order_id'] = $request->order_id;
        // echo "<pre>";
        // print_r($data);
        // exit();
        $inserItem=DB::table('contents')
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
    public function showContentsOne($item_id)
    {
    	$allContentsOne = DB::table('contents')
    					  ->join('items','contents.item_id','items.id')
    					  ->select('contents.*','items.item_name')
    					  ->where(['item_id'=>$item_id,'subItem_id'=>NULL])
    					  ->get();
     if($allContentsOne->count() != 0){
        return view('contents.show_contents_one')->with('allContentsOne',$allContentsOne);
     }
    return response('No content added here'); 
    }
    public function showContentsTwo($item_id,$subItem_id)
    {
      $allContentsTwo = DB::table('contents')
                ->join('items','contents.item_id','items.id')
                ->join('subItems','contents.subItem_id','subItems.id')
                ->select('contents.*','items.item_name','subItems.subitem_name')
                ->where(['contents.item_id'=>$item_id,'contents.subItem_id'=>$subItem_id])
                ->get();
       if($allContentsTwo->count() != 0)
       {
            return view('contents.show_contents_two')->with('allContentsTwo',$allContentsTwo);
       }
       return response('No content added here');
    }
    
    public function editOne($item_id,$content_id)
    {
        $editContentsOne = DB::table('contents')
                          ->join('items','contents.item_id','items.id')
                          ->select('contents.*','items.item_name')
                          ->where(['contents.id'=>$content_id,'item_id'=>$item_id,'subItem_id'=>NULL])
                          ->first();

        // echo "<pre>";
        // print_r($editContentsOne);
        // exit();

        return view('contents.edit_contents_one')->with(['editContentsOne'=>$editContentsOne,'item_id'=>$item_id,'content_id'=>$content_id]);
    }

    public function updateContentsOne($item_id,$content_id,Request $request)
    {
        $data = array();
        // $data['item_id'] = $request->item_id;
        // $data['subItem_id'] = $request->subItem_id;
        // $data['subSubItem_id'] = $request->subSubItem_id;
        $data['title'] = "".$request->title;
        $data['hints'] = "".$request->hints;
        $data['name'] = $request->name;
        $data['designation'] = $request->designation;
        $data['mobile_one'] = $request->mobile_one;
        $data['mobile_two'] = $request->mobile_two;
        $data['phone_one'] = $request->phone_one;
        $data['phone_two'] = $request->phone_two;
        $data['email_one'] = $request->email_one;
        $data['email_two'] = $request->email_two;
        $data['website'] = $request->website;
        $data['order_id'] = $request->order_id;
        // echo "<pre>";
        // print_r($data);
        // exit();
        $inserItem=DB::table('contents')
                        ->where(['id'=>$content_id,'item_id'=>$item_id,'subItem_id'=>NULL])
                        ->update($data);

        if ($inserItem) {
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
    public function editTwo($item_id,$subItem_id,$content_id)
    {
          $editContentsTwo = DB::table('contents')
                          ->join('items','contents.item_id','items.id')
                          ->select('contents.*','items.item_name')
                          ->where(['contents.id'=>$content_id,'item_id'=>$item_id,'subItem_id'=>$subItem_id])
                          ->first();

        // echo "<pre>";
        // print_r($editContentsOne);
        // exit();

        return view('contents.edit_contents_two')->with(['editContentsTwo'=>$editContentsTwo,'item_id'=>$item_id,'subItem_id'=>$subItem_id,'content_id'=>$content_id]);
    }
    public function updateContentsTwo($item_id,$subItem_id,$content_id,Request $request)
    {
        $data = array();
        // $data['item_id'] = $request->item_id;
        // $data['subItem_id'] = $request->subItem_id;
        // $data['subSubItem_id'] = $request->subSubItem_id;
        $data['title'] = "".$request->title;
        $data['hints'] = "".$request->hints;
        $data['name'] = $request->name;
        $data['designation'] = $request->designation;
        $data['mobile_one'] = $request->mobile_one;
        $data['mobile_two'] = $request->mobile_two;
        $data['phone_one'] = $request->phone_one;
        $data['phone_two'] = $request->phone_two;
        $data['email_one'] = $request->email_one;
        $data['email_two'] = $request->email_two;
        $data['website'] = $request->website;
        $data['order_id'] = $request->order_id;
        // echo "<pre>";
        // print_r($data);
        // exit();
        $inserItem=DB::table('contents')
                        ->where(['id'=>$content_id,'item_id'=>$item_id,'subItem_id'=>$subItem_id])
                        ->update($data);

        if ($inserItem) {
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
    
    public function deleteContentsOne($item_id,$content_id)
    {
        $deleteItem=DB::table('contents')
                        ->where(['id'=>$content_id,'item_id'=>$item_id,'subItem_id'=>NULL])
                        ->delete();

        if ($deleteItem) {
                 $notification=array(
                 'messege'=>'Successfully Data Deleted',
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
    public function deleteContentsTwo($item_id,$subItem_id,$content_id)
    {
        
        $inserItem=DB::table('contents')
                        ->where(['id'=>$content_id,'item_id'=>$item_id,'subItem_id'=>$subItem_id])
                        ->delete();

        if ($inserItem) {
                 $notification=array(
                 'messege'=>'Successfully Data Deleted',
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
