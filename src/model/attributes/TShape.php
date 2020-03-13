<?php
namespace HEF\model\attributes;

trait TShape 
{

  /**
   * 
   * 
   * 
   * @param Shape $obj
   * @return $this
   */
    public function sShape( Shape $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
