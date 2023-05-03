<?php
use PHPUnit\Framework\TestCase;
use UPJV\Validator\LeMin;

require_once 'src/UPJV/Validator/ValidatorInterface.php';
require_once 'src/UPJV/Validator/LeMin.php';
require_once 'src/UPJV/Validator/ValidatorEngine.php';

class LeMinTest extends TestCase
{
    /**
     * Test if the check method returns true when input value is greater than or equal to the minimum size
     */
    public function testCheck()
    {
        // Arrange
        $minSize = 3;
        $validator = new LeMin();
        $validator->build([$minSize]);

        $input = 5;
        // Act
 
        $result = $validator->check($input);
        $this->assertTrue($result);

        $input =2;
        $result = $validator->check($input);
        $this->assertFalse($result);

    }
}
?>