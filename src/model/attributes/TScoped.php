<?php
namespace HEF\model\attributes;

trait TScoped 
{

  /**
   * 
   * 
   * 
   * @param Scoped $obj
   * @return $this
   */
    public function sScoped( Scoped $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
