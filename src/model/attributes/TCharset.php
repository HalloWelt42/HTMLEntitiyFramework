<?php


namespace HEF\model\attributes;


trait TCharset
{

    /**
     * @param Charset $obj
     *
     * @return $this
     */
    public function sCharset (Charset $obj )
    {
        $this -> sAttribute($obj);
        return $this;
    }




}