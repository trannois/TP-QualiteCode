<?php
require_once __DIR__."/../src/UPJV/Validator.php";

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;

#[CoversClass("Validator")]
final class ValidatorTest extends TestCase
{
    #[Test]
    public function testCheck()
    {
        $verif = new UPJV\Validator();
        $this->assertFalse($verif->check('1'));
        $this->assertTrue($verif->check('12'));
    }
}
