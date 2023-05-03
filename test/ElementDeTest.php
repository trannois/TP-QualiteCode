<?php
use PHPUnit\Framework\TestCase;
use UPJV\Validator;;

require_once 'src/UPJV/Validator/ValidatorInterface.php';
require_once 'src/UPJV/Validator/ElementDe.php';

/*
* @covers Validateur\Validateur
*/
final class ElementDeTest extends TestCase
{
    public function testcheck()
    {
        $validator = new Validator\ElementDe();
        $validator->build(['test', 'test2']);

        $this->assertTrue($validator->check('test'));
        $this->assertFalse($validator->check('t'));    
    }
}