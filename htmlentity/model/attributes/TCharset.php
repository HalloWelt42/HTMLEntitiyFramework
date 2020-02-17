<?php


namespace htmlentity\model\attributes;

trait TCharset
{

    /**
     * @param Charset $obj
     *
     * @return $this
     */
    public function set_charset ( Charset $obj )
    {
        $this -> set_attribute($obj);
        return $this;
    }




}