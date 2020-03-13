<?php
namespace HEF\model\attributes;

trait TListType 
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
