<?php

namespace App\Http\Resources;

use App\Content;
use App\Http\Resources\Content as ContentResource;
use Illuminate\Http\Resources\Json\JsonResource;

class SubSubItem extends JsonResource
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
            // 'item_id' => $this->item_id,
            // 'subItem_id' => $this->subItem_id,
            
            'title' => $this->sub_subitem_name,
            'contents' => ContentResource::collection(Content::where(['item_id'=>$this->item_id,'subItem_id'=>$this->subItem_id,'subSubItem_id'=>$this->id])->orderBy('order_id','asc')->get()),
            //'subitems' => ItemResource::collection(SubItem::where('item_id',$this->id)->get()),//FOR ALL DATA OF HOTEL
            //'singleSubitem' => new ItemResource(Item::find(1)),//FOR SINGLE DATA OF Item
            // 'secret' => $this->when(Auth::user()->isAdmin(), 'secret-value'),
            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
        ];
    }
}
