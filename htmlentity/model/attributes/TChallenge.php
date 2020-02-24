<?php
namespace htmlentity\model\attributes;

trait TChallenge 
{

  /**
   * 
   * 
   * 
   * @param Challenge $obj
   * @return $this
   */
    public function set_challenge( Challenge $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
