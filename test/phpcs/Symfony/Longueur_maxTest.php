<?php

use UPJV\Validator\Longueur_max;
require_once 'src/UPJV/Validator/Longueur_Max.php';
require_once 'src/UPJV/Validator/ValidatorInterface.php';
require_once 'src/UPJV/Validator/ValidatorEngine.php';


class Longueur_maxTest extends PHPUnit\Framework\TestCase
{
    public function testCheck()
    {
        $validator = new Longueur_max();
        $validator->build([2]);

        $this->assertTrue($validator->check('a'));
        $this->assertTrue($validator->check('ab'));
        $this->assertFalse($validator->check('abc'));
    }
}
