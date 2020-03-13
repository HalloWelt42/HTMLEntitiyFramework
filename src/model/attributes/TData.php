<?php
namespace HEF\model\attributes;

trait TData 
{

  /**
   * 
   * 
   * 
   * @param Data $obj
   * @return $this
   */
    public function sData( Data $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
