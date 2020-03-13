<?php
namespace HEF\model\attributes;

trait TControls 
{

  /**
   * 
   * 
   * 
   * @param Controls $obj
   * @return $this
   */
    public function sControls( Controls $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
