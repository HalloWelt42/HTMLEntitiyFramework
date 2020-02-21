<?php
namespace htmlentity\model\attributes;

trait TList 
{

  /**
   * 
   * 
   * 
   * @param ListType $obj
   * @return $this
   */
    public function set_list( ListType $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
