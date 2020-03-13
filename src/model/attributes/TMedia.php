<?php
namespace HEF\model\attributes;

trait TMedia 
{

  /**
   * 
   * 
   * 
   * @param Media $obj
   * @return $this
   */
    public function sMedia( Media $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
