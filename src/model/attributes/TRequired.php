<?php
namespace HEF\model\attributes;

trait TRequired 
{

  /**
   * 
   * 
   * 
   * @param Required $obj
   * @return $this
   */
    public function sRequired( Required $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
