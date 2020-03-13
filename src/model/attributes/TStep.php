<?php
namespace HEF\model\attributes;

trait TStep 
{

  /**
   * 
   * 
   * 
   * @param Step $obj
   * @return $this
   */
    public function sStep( Step $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
