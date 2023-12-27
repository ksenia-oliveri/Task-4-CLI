<?php

namespace App\Tests;

use App\StringReverse;
use PHPUnit\Framework\TestCase;

class AtypicalStringReverseClassTest extends TestCase
{
    public $string = 'hell4 wo3r1d!';
    public function testFailure1()
    {
      $stringReverse = new StringReverse();
      $this->assertMatchesRegularExpression('~[a-zA-Z]+~', $stringReverse->stringReverse($this->string));
    }

      public function testFailure2()
    { 
      $stringReverse = new StringReverse();
      $this->assertNotEmpty($stringReverse->stringReverse($this->string));
    }

    public function testFailure3()
    { 
      $stringReverse = new StringReverse();
      $this->assertMatchesRegularExpression('~[0-9]+~', $stringReverse->stringReverse($this->string));
    }

    public function testFailure4()
    { 
      $stringReverse = new StringReverse();
      $this->assertNotEquals(1, strlen($stringReverse->stringReverse($this->string))); 
    }

}

   