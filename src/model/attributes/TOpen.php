<?php
namespace HEF\model\attributes;

trait TOpen 
{

  /**
   * 
   * 
   * 
   * @param Open $obj
   * @return $this
   */
    public function sOpen( Open $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
