<?php

use UPJV\Validator\LongueurMax;
require_once 'src/UPJV/Validator/LongueurMax.php';
require_once 'src/UPJV/Validator/ValidatorInterface.php';
require_once 'src/UPJV/Validator/ValidatorEngine.php';


class LongueurMaxTest extends PHPUnit\Framework\TestCase
{
    public function testCheck()
    {
        $validator = new LongueurMax();
        $validator->build([2]);

        $this->assertTrue($validator->check('a'));
        $this->assertTrue($validator->check('ab'));
        $this->assertFalse($validator->check('abc'));
    }
}
