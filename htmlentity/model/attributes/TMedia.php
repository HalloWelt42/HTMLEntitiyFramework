<?php
namespace htmlentity\model\attributes;

trait TMedia 
{

  /**
   * 
   * 
   * 
   * @param Media $obj
   * @return $this
   */
    public function set_media( Media $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
