<?php
namespace HEF\model\attributes;

trait TDefaultType 
{

  /**
   * 
   * 
   * 
   * @param DefaultType $obj
   * @return $this
   */
    public function sDefault( DefaultType $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
