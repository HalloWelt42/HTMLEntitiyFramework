<?php
namespace HEF\model\attributes;

trait TPreload 
{

  /**
   * 
   * 
   * 
   * @param Preload $obj
   * @return $this
   */
    public function set_preload( Preload $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
