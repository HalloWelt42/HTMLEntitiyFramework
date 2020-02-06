<?php
namespace oti\model;

use ArrayAccess;



class HTMLElements implements ArrayAccess {

    protected $html_elements;

    public function __construct ()
    {
        $this -> html_elements;
    }

    /**
     * @inheritDoc
     */
    public function offsetExists ( $offset )
    {
        return isset($this->html_elements[$offset]);
    }

    /**
     * @inheritDoc
     */
    public function offsetGet ( $offset )
    {
        return isset($this->html_elements[$offset]) ? $this->html_elements[$offset] : null;
    }

    /**
     * @inheritDoc
     */
    public function offsetSet ( $offset , $value )
    {
        print_r( 'insert:' . PHP_EOL );
        if (is_null($offset)) {
            $this->html_elements[] = $value;
        } else {
            $this->html_elements[$offset] = $value;
        }
    }

    /**
     * @inheritDoc
     */
    public function offsetUnset ( $offset )
    {
        unset( $this->html_elements[$offset] );
    }
}