<?php

namespace Cipher;

class Cipher
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function encode($shift)
    {
        $out = array();
        for ($i=0; $i<strlen($this->text); $i++) {
            $out[] = Word::encode($this->text[$i], $shift);
        }

        return implode(null, $out);
    }
}