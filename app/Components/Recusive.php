<?php

namespace App\Components;
use App\Models\Category;


class Recusive {
    private $data;
    private $htmlSlelect = ' ';


    public function __construct($data)
    {
        $this->date = $data;
    }

     public function categoryRecusive($parentID, $id=0, $text = '')
    {
        

        foreach ($this->date as $value) {
            if($value['parent_id'] == $id) {
                if(!empty($parentID) && $parentID==$value['id']){
                    $this->htmlSlelect .= "<option selected value='" . $value['id'] . "'>" . $text . $value['name'] . "</option>";

                } else {
                    $this->htmlSlelect .= "<option value='" . $value['id'] . "'>" . $text . $value['name'] . "</option>";
                    
                }
                $this -> categoryRecusive($parentID, $value['id'], $text. '-');
            }
        }

        return $this->htmlSlelect;
    }
}