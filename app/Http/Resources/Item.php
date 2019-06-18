<?php

namespace App\Http\Resources;

use App\Content;
use App\Http\Resources\SubItem as SubItemResource;
use App\SubItem;
use App\Http\Resources\Content as ContentResource;
use Illuminate\Http\Resources\Json\JsonResource;

class Item extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            // 'id' => $this->id,
            
            'item' => $this->item_name,
            'updated_date_notice' => $this->item_updated_date,

            'contents' => ContentResource::collection(Content::where(['item_id'=>$this->id,'subItem_id'=>NULL,'subSubItem_id'=>NULL])->orderBy('order_id','asc')->get()),
            'details' => SubItemResource::collection(SubItem::where('item_id',$this->id)->orderBy('order_id','asc')->get()),
            //FOR ALL DATA OF HOTEL
            //'singleSubitem' => new ItemResource(Item::find(1)),//FOR SINGLE DATA OF Item
            // 'secret' => $this->when(Auth::user()->isAdmin(), 'secret-value'),
            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
        ];
    }
}
