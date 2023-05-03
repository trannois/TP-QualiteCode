<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use UPJV\Validator\EstDuTexte;

require_once __DIR__.'/../src/UPJV/Validator/ValidatorInterface.php';
require_once __DIR__.'/../src/UPJV/Validator/EstDuTexte.php';
require_once __DIR__.'/../src/UPJV/Validator/ValidatorEngine.php';

class EstDuTexteTest extends TestCase
{
    public function testCheck()
    {
        $validator = new EstDuTexte();
        $validator->build([]);

        $this->assertTrue($validator->check('bonjour')); // doit retourner true
        $this->assertFalse($validator->check('bonjour123')); // doit retourner false
    }
}
