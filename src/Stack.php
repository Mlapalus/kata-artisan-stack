<?php

namespace App;

class Stack
{
  private $stack = [];
  public function count(): int
  {
    return count($this->stack);
  }

  public function push(int $value): void
  {
    array_push($this->stack, $value);
  }

  public function pop(): int
  {
    return array_pop($this->stack);
  }
}