<?php 
namespace App\Tests;

use App\StringReverse;
use PHPUnit\Framework\TestCase;

class StringReverseClassTest extends TestCase 
{
    public string $string = 'hell4 w3or1d!';

    public function testStringReverse() 
    {
        $stringReverse = new StringReverse();
       $this->assertEquals('lleh4 d3ro1w!', $stringReverse->stringReverse($this->string));
    }

    }

