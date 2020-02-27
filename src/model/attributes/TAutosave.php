<?php
namespace HEF\model\attributes;

trait TAutosave 
{

  /**
   * 
   * 
   * 
   * @param Autosave $obj
   * @return $this
   */
    public function set_autosave( Autosave $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
