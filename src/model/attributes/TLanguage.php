<?php
namespace HEF\model\attributes;

trait TLanguage 
{

  /**
   * 
   * 
   * 
   * @param Language $obj
   * @return $this
   */
    public function sLanguage( Language $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
