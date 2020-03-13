<?php
namespace HEF\model\attributes;

trait TForType
{

  /**
   * 
   * 
   * 
   * @param ForType $obj
   * @return $this
   */
    public function sFor( ForType $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
