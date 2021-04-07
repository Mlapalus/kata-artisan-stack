<?php

namespace App\Tests;

use App\Stack;
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
  public function setUp(): void
  {
  }

  public function test_a_new_stack_is_empty()
  {
    $stack = new Stack();

    $this->assertEquals(0, $stack->count());
  }

  public function test_if_one_value_is_stocked_count_egals_one()
  {
    $stack = new Stack();

    $stack->push(10);

    $this->assertEquals(1, $stack->count());
  }

  public function test_pop_function()
  {
    $stack = new Stack();
    $stack->push(10);

    $this->assertEquals(1, $stack->count());
    $this->assertEquals(10, $stack->pop());
    $this->assertEquals(0, $stack->count());

    $stack->push(10);
    $this->assertEquals(1, $stack->count());
    $stack->push(20);
    $this->assertEquals(2, $stack->count());
    $stack->push(30);
    $this->assertEquals(3, $stack->count());
    $stack->push(40);
    $this->assertEquals(4, $stack->count());
    $stack->push(50);
    $this->assertEquals(5, $stack->count());
    $stack->push(60);
    $this->assertEquals(6, $stack->count());
    $stack->push(70);
    $this->assertEquals(7, $stack->count());
    $stack->push(80);
    $this->assertEquals(8, $stack->count());

    $this->assertEquals(80, $stack->pop());
    $this->assertEquals(7, $stack->count());
    $this->assertEquals(70, $stack->pop());
    $this->assertEquals(6, $stack->count());
    $this->assertEquals(60, $stack->pop());
    $this->assertEquals(5, $stack->count());
    $this->assertEquals(50, $stack->pop());
    $this->assertEquals(4, $stack->count());
    $this->assertEquals(40, $stack->pop());
    $this->assertEquals(3, $stack->count());
    $this->assertEquals(30, $stack->pop());
    $this->assertEquals(2, $stack->count());
    $this->assertEquals(20, $stack->pop());
    $this->assertEquals(1, $stack->count());
    $this->assertEquals(10, $stack->pop());
    $this->assertEquals(0, $stack->count());
  }
}