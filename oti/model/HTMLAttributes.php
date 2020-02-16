<?php


namespace oti\model;


use ArrayAccess;
use Iterator;

class HTMLAttributes implements ArrayAccess, Iterator
{

  protected $html_attributes;
  protected $index;

  public function __construct()
  {
    $this->html_attributes = [];
    $this->index = 0;
  }

  /**
   * @inheritDoc
   */
  public function offsetExists($offset)
  {
    return isset($this->html_attributes[$offset]);
  }

  /**
   * @inheritDoc
   */
  public function offsetGet($offset)
  {
    return isset($this->html_attributes[$offset]) ? $this->html_attributes[$offset] : null;
  }

  /**
   * @inheritDoc
   */
  public function offsetSet($offset, $value)
  {
    if (!$value instanceof HTMLAttribute) {
      return false; //todo eception?
    }

    if (is_null($offset)) {
      $this->html_attributes[] = $value;
    } else {
      $this->html_attributes[$offset] = $value;
    }
  }


  /**
   * @param $attribute
   * @return $this
   */
  function add($attribute)
  {
    $this->offsetSet(null, $attribute);
    return $this;
  }

  /**
   * @inheritDoc
   */
  public function offsetUnset($offset)
  {
    unset($this->html_attributes[$offset]);
  }

  /**
   * @inheritDoc
   */
  public function current()
  {
    return $this->html_attributes[$this->index];
  }

  /**
   * @inheritDoc
   */
  public function next()
  {
    ++$this->index;
  }

  /**
   * @inheritDoc
   */
  public function key()
  {
    return $this->index;
  }

  /**
   * @inheritDoc
   */
  public function valid()
  {
    return isset($this->html_attributes[$this->index]);
  }

  /**
   * @inheritDoc
   */
  public function rewind()
  {
    $this->index = 0;
  }
}