<?php
namespace HEF\model\attributes;

trait TMultiple 
{

  /**
   * 
   * 
   * 
   * @param Multiple $obj
   * @return $this
   */
    public function sMultiple( Multiple $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
