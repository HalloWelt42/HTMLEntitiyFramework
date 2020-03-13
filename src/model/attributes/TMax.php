<?php
namespace HEF\model\attributes;

trait TMax 
{

  /**
   * 
   * 
   * 
   * @param Max $obj
   * @return $this
   */
    public function sMax( Max $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
