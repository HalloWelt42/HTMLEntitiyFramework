<?php
namespace HEF\model\attributes;

trait TChallenge 
{

  /**
   * 
   * 
   * 
   * @param Challenge $obj
   * @return $this
   */
    public function sChallenge( Challenge $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
