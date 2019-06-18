<?php

namespace App\Http\Resources;

use App\Http\Resources\Item as ItemResource;
use App\Item;
use Illuminate\Http\Resources\Json\JsonResource;

class Version extends JsonResource
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
            'data_version' => $this->data_version,
            'version_check_url' => $this->data_url,
            'data' => ItemResource::collection(Item::orderBy('order_id','asc')->get()),
            //'subitems' => ItemResource::collection(SubItem::where('item_id',$this->id)->get()),//FOR ALL DATA OF HOTEL
            //'singleSubitem' => new ItemResource(Item::find(1)),//FOR SINGLE DATA OF Item
            // 'secret' => $this->when(Auth::user()->isAdmin(), 'secret-value'),
            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
        ];
    }
}
