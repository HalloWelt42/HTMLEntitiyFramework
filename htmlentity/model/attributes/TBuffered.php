<?php
namespace htmlentity\model\attributes;

trait TBuffered 
{

  /**
   * 
   * 
   * 
   * @param Buffered $obj
   * @return $this
   */
    public function set_buffered( Buffered $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
