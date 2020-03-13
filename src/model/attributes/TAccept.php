<?php
namespace HEF\model\attributes;

trait TAccept 
{

  /**
   * Liste der Typen, die der Server akzeptiert, in der Regel ein Dateityp.
   *
   *
   * @param Accept $obj
   * @return $this
   */
    public function sAccept( Accept $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
