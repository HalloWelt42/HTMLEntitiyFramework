<?php
namespace HEF\model\attributes;

trait TSelected 
{

  /**
   * 
   * 
   * 
   * @param Selected $obj
   * @return $this
   */
    public function sSelected( Selected $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
