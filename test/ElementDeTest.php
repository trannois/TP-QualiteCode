<?php
use PHPUnit\Framework\TestCase;
use UPJV\Validator\ElementDe;

require_once 'src/UPJV/Validator/ElementDe.php';

/*
* @covers Validateur\Validateur
*/
final class ElementDeTest extends TestCase
{
    public function testcheck()
    {
        $validator = new UPJV\Validator\ElementDe();
        $validator->build(['test', 'test2']);
        
        $this->assertTrue($validator->check('test'));
        $this->assertFalse($validator->check('t'));    
    }
}