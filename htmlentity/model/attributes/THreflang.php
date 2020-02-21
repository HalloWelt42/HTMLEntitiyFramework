<?php
namespace htmlentity\model\attributes;

trait THreflang 
{

  /**
   * 
   * 
   * 
   * @param Hreflang $obj
   * @return $this
   */
    public function set_hreflang( Hreflang $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
