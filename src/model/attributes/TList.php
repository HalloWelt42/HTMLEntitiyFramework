<?php
namespace HEF\model\attributes;

trait TList 
{

  /**
   * 
   * 
   * 
   * @param ListType $obj
   * @return $this
   */
    public function sList( ListType $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
