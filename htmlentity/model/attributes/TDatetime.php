<?php
namespace htmlentity\model\attributes;

trait TDatetime 
{

  /**
   * 
   * 
   * 
   * @param Datetime $obj
   * @return $this
   */
    public function set_datetime( Datetime $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
