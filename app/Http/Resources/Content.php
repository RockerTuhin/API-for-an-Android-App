<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Content extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public function toArray($request)
    {
        // $Name = '', $Designation = '', $Mobile1 = '', $Mobile2 = '', $Phone1 = '', $Phone2 = '', $Email1 = '', $Email2 = '', $Web = '', $Details = '';

            if($this->name != Null)
            {
                $this->name = $this->name . '<br/>';
            }
            else
            {
                $this->name = '';
            }

            if($this->designation != Null)
            {
                $this->designation = $this->designation . '<br/>';
            }
            else
            {
                $this->designation = '';
            }

            if($this->mobile_one != '+880' && $this->mobile_one != Null)
            {
                $this->mobile_one = 'Mobile: <a href=\'tel:\'' . $this->mobile_one . '\'>' . $this->mobile_one . '</a>';
            }
            else
            {
                $this->mobile_one = '';
            }

            if($this->mobile_two != '+880' && $this->mobile_two != Null)
            {
                $this->mobile_two = ', <a href=\'tel:\'' . $this->mobile_two . '\'>' . $this->mobile_two . '</a>' .  '<br/>';
            }
            else
            {
                if($this->mobile_one != '')
                {
                    $this->mobile_one = $this->mobile_one . '<br/>';
                }
                if($this->mobile_two == '+880')
                {
                    $this->mobile_two = '';
                }
            }

            if($this->phone_one != '+880' && $this->phone_one != Null)
            {
                $this->phone_one = 'Phone: <a href=\'tel:\'' . $this->phone_one . '\'>' . $this->phone_one . '</a>';
            }
            else
            {
                $this->phone_one = '';
            }

            if($this->phone_two != '+880' && $this->phone_two != Null)
            {
                $this->phone_two = ', <a href=\'tel:\'' . $this->phone_two . '\'>' . $this->phone_two . '</a>' .  '<br/>';
            }
            else
            {
                if($this->phone_one != '')
                {
                    $this->phone_one = $this->phone_one . '<br/>';
                }
                if($this->phone_two == '+880')
                {
                    $this->phone_two = '';
                }
            }

            if($this->email_one != Null)
            {
                $this->email_one = 'Email: <a href=\'mailto:\'' . $this->email_one . '\'>' . $this->email_one . '</a>';
            }
            else
            {
                $this->email_one = '';
            }

            if($this->email_two != Null)
            {
                $this->email_two = ', <a href=\'mailto:\'' . $this->email_two . '\'>' . $this->email_two . '</a>';
            }
            else
            {
                if($this->email_one != '')
                {
                    if($this->website == Null)
                    {
                        $this->email_one = $this->email_one;
                    }
                    else
                    {
                        $this->email_one = $this->email_one . '<br/>';
                    }
                }
                if($this->email_two == Null)
                {
                    $this->email_two = '';
                }
                else
                {
                    $this->email_two = $this->email_two . '<br/>';
                }
            }

            if($this->website != Null && $this->website != 'http://')
            {
                $this->website = 'Web Address: <a href=\'' . $this->website . '\'>' . $this->website . '</a>';
            }
            else
            {
                $this->website = '';
            }

        //return parent::toArray($request);
        return [

            // 'id' => $this->id,
            // 'item_id' => $this->item_id,
            // 'subItem_id' => $this->subItem_id,
            // 'subSubItem_id' => $this->subSubItem_id,
            'title' => $this->title,
            'hint' => $this->hints,
            // 'name' => $this->name,
            // 'designation' => $this->designation,
            // 'mobile_one' => $this->mobile_one,
            // 'mobile_two' => $this->mobile_two,
            // 'phone_one' => $this->phone_one,
            // 'phone_two' => $this->phone_two,
            // 'email_one' => $this->email_one,
            // 'email_two' => $this->email_two,
            // 'website' => $this->website,
            // 'details' => $this->details,

            
            
            'content' => $this->name . $this->designation . $this->mobile_one . $this->mobile_two . $this->phone_one . $this->phone_two . $this->email_one . $this->email_two . $this->website,

            

            //     $this->name.'<br/>'.$this->designation.'<br/>'.'Mobile: <a href=\'tel:\''.$this->mobile_one.'\'>'.$this->mobile_one.'</a>'.', <a href=\'tel:\''.$this->mobile_two.'\'>'.$this->mobile_two.'</a>'.'Email: <a href=\'mailto:\''.$this->email_one.'\'>'.$this->email_one.'</a>'.', <a href=\'mailto:\''.$this->email_two.'\'>'.$this->email_two.'</a>'.'Web Address: <a href=\'http://'.$this->website.'\'>'.$this->website.'</a>',
            





            // <strong>Professor Dr. M Wahiduzzaman</strong><br /> Professor of Education, University of Dhaka;Eminent Education Scientist, Columnist & Media personality<br /> <strong>Vice-Chancellor</strong><br /> Noakhali Science and Technology University, Noakhali-3814, Bangladesh<br /> Phone: <a  href='tel:+88-0321-72701'>+88-0321-72701</a>, <a  href='tel:+88-0321-72703'>+88-0321-72703</a>, <a  href='tel:+88-0321-72702'>+88-0321-72702</a><br/> Mobile: <a  href='tel:+8801730042888'>+8801730042888</a><br /> Email: <a  href='mailto:mdwahid@yahoo.com'>mdwahid@yahoo.com</a>

            // 'subitems' => SubItemResource::collection(SubItem::where('item_id',$this->id)->get()),
            // 'contents' => ContentResource::collection(Content::where(['item_id'=>$this->id,'subItem_id'=>NULL,'subSubItem_id'=>NULL])->get()),
            //FOR ALL DATA OF HOTEL
            //'singleSubitem' => new ItemResource(Item::find(1)),//FOR SINGLE DATA OF Item
            // 'secret' => $this->when(Auth::user()->isAdmin(), 'secret-value'),
            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
        ];
    }
}
