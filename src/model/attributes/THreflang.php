<?php
namespace HEF\model\attributes;

trait THreflang 
{

  /**
   * 
   * 
   * 
   * @param Hreflang $obj
   * @return $this
   */
    public function sHreflang( Hreflang $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
