<?php
namespace HEF\model\attributes;

trait TSrclang 
{

  /**
   * 
   * 
   * 
   * @param Srclang $obj
   * @return $this
   */
    public function sSrclang( Srclang $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
