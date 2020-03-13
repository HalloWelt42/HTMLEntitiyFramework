<?php
namespace HEF\model\attributes;

trait TPlaceholder 
{

  /**
   * 
   * 
   * 
   * @param Placeholder $obj
   * @return $this
   */
    public function sPlaceholder( Placeholder $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
