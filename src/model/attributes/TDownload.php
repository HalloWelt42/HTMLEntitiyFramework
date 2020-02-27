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
    public function set_download( Download $obj ){
        $this -> set_attribute($obj);
        return $this;
    }

}
