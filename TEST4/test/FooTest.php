<?php
    namespace Test;
    use PHPUnit\Framework\TestCase;
    use App\Foo;

    class FooTest extends TestCase{
        public function test_sum_1(){
            $objFoo=new Foo;
            $a = 5;
            $b = 6;
            $expected = 11;
            $your_output = $objFoo->sum($a,$b);
            $this->assertEquals($expected,$your_output);
        }
        public function test_sum_2(){
            $objFoo=new Foo;
            $a = 7;
            $b = 8;
            $expected = 15;
            $your_output = $objFoo->sum($a,$b);
            $this->assertEquals($expected,$your_output);
        }
        public function test_sum_3(){
            $objFoo=new Foo;
            $a = 2;
            $b = 2;
            $expected = 4;
            $your_output = $objFoo->sum($a,$b);
            $this->assertEquals($expected,$your_output);
        }
    }