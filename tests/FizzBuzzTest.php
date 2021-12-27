<?php

namespace Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase {
    public function test_fizz_if_divisible_by_three() {

        //Given
        $number = 3;
        $fizzBuzz = new FizzBuzz;
        //When
        $result = $fizzBuzz->getFizzBuzz($number);
        //Then
        $this->assertEquals("Fizz", $result);

    }
    
    public function test_buzz_if_divisible_by_five() {

        //Given
        $number = 5;
        $fizzBuzz = new FizzBuzz;
        //When
        $result = $fizzBuzz->getFizzBuzz($number);
        //Then
        $this->assertEquals("Buzz", $result);

    }

    public function test_FizzBuzz_if_divisible_by_3_5() {

        //Given
        $number = 15;
        $fizzBuzz = new FizzBuzz;
        //When
        $result = $fizzBuzz->getFizzBuzz($number);
        //Then
        $this->assertEquals("FizzBuzz", $result);

    }

    public function test_FizzBuzz_is_indivisible() {

        //Given
        $number = 8;
        $fizzBuzz = new FizzBuzz;
        //When
        $result = $fizzBuzz->getFizzBuzz($number);
        //Then
        $this->assertEquals($number, $result);

    }
}