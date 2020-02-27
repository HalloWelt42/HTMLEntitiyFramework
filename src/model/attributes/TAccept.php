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
    public function set_accept( Accept $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
