<?php
namespace HEF\model\attributes;

trait TPing 
{

  /**
   * 
   * 
   * 
   * @param Ping $obj
   * @return $this
   */
    public function set_ping( Ping $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
