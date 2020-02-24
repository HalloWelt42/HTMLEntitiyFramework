<?php
namespace htmlentity\model\attributes;

trait TPoster 
{

  /**
   * 
   * 
   * 
   * @param Poster $obj
   * @return $this
   */
    public function set_poster( Poster $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
