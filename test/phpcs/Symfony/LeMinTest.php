<?php
use PHPUnit\Framework\TestCase;
use UPJV\Validator\LeMin;

require_once __DIR__.'/../src/LeMin.php';

class LeMinTest extends TestCase
{
    /**
     * Test if the check method returns true when input value is greater than or equal to the minimum size
     */
    public function testCheckReturnsTrueForValueGreaterThanOrEqualToSize()
    {
        // Arrange
        $minSize = 3;
        $input = 5;

        // Act
        $validator = new LeMin();
        $validator->build([$minSize]);
        $result = $validator->check($input);

        // Assert
        $this->assertTrue($result);
    }


    /**
     * Test if the check method returns false when input value is less than the minimum size
     */
    public function testCheckReturnsFalseForValueLessThanSize()
    {
        // Arrange
        $minSize = 3;
        $input = 2;

        // Act
        $validator = new LeMin();
        $validator->build([$minSize]);
        $result = $validator->check($input);

        // Assert
        $this->assertFalse($result);
    }
}
?>