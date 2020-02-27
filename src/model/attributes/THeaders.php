<?php
namespace HEF\model\attributes;

trait THeaders 
{

  /**
   * 
   * 
   * 
   * @param Headers $obj
   * @return $this
   */
    public function set_headers( Headers $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
