<?php

use Cipher\Cipher;

class TextTest extends \PHPUnit_Framework_TestCase
{
    public function testTextEncode()
    {
        $originalText   = "Todo lo que se preguntaba eran las mismas respuestas que buscamos el resto de nosotros. ¿De dónde vengo? ¿A dónde voy? ¿Cuánto tiempo tengo? Todo lo que pude hacer fue sentarme y ver como moría.";
        $ciphedTextText = "wrgr or txh vh suhjxqwded hudq odv plvpdv uhvsxhvwdv txh exvfdprv ho uhvwr gh qrvrwurv. ¿gh góqgh yhqjr? ¿d góqgh yrb? ¿fxáqwr wlhpsr whqjr? wrgr or txh sxgh kdfhu ixh vhqwduph b yhu frpr pruíd.";

        $cipher = new Cipher($originalText);

        $this->assertEquals($ciphedTextText, $cipher->encode(3));

    }
}
 
