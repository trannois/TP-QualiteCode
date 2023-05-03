<?php
use PHPUnit\Framework\TestCase;
use UPJV\Validator\LeMin;

require_once 'src/UPJV/Validator/LeMin.php';

class LeMinTest extends TestCase
{
    /**
     * Test if the check method returns true when input value is greater than or equal to the minimum size
     */
    public function testCheck()
    {
        // Arrange
        $minSize = 3;
        $input = [5,2];
        // Act
        $validator = new LeMin();
        $validator->build([$minSize]);
        $result = $validator->check($input);

        for ($i = 0; $i <= 1; $i++)
         {
            if ($input[$i] == 5 )
            {
            // Assert
            $this->assertTrue($result);
            }
            else if($input[$i] == 2 )
            {
            // Assert
            $this->assertFalse($result);
            }
         }
    }
}
?>