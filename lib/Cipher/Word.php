<?php

namespace Cipher;

class Word
{
    const ASCII_FROM = 97;
    const ASCII_TO   = 122;

    public static function decode($word)
    {
        return ord($word);
    }

    public static function encode($word, $shift)
    {
        $word  = strtolower($word);
        $index = self::decode($word);
        if (self::isValidIndex($index)) {
            return $word;
        }

        return chr(self::getNewIndex($index, $shift));
    }

    private static function isValidIndex($index)
    {
        return $index < self::ASCII_FROM || $index > self::ASCII_TO;
    }

    private static function getNewIndex($index, $shift)
    {
        $newIndex = $index + $shift;
        if ($newIndex > self::ASCII_TO) {
            $newIndex = ($newIndex - self::ASCII_TO) + self::ASCII_FROM - 1;
        }

        return $newIndex;
    }
}