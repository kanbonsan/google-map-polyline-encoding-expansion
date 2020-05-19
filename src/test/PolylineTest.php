<?php

require_once '../../vendor/autoload.php';

class Polyline_Test extends \PHPUnit\Framework\TestCase
{
    
    public function test_EncodeDecodeして一致するか()
    {
        $encoded = "mibvEqc{cY@]sF?cBqE?cEmGa|`JyDv@ovAoCcAwdHuA{BwxWVmE~aTs@gBfkPwBK~bBaDv@neGwCtCffFoDtC~nKmBr@v|A[cFvQv@{GohCVqE_`Ft@qE_X|FbD_|BxFlAozDnJpCgtD[hEggM|@vDwyEpBtCnzDfDvFnjQpBhEx~tIjAjF?H`G?y@fD?";
        $decoded = Kanbonsan\Polyline\Polyline::decode( $encoded );
        
        $new_encoded = Kanbonsan\Polyline\Polyline::encode( $decoded );
        
        $this->assertEquals( $encoded, $new_encoded );
        
    }
    
}
