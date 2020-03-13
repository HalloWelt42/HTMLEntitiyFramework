<?php
namespace HEF\model\attributes;

trait TDownload 
{

  /**
   * 
   * 
   * 
   * @param Download $obj
   * @return $this
   */
    public function sDownload( Download $obj ){
        $this -> sAttribute($obj);
        return $this;
    }

}
