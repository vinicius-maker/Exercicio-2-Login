<?php

namespace Forseti\Bot\Login\Regex;

abstract class TokenRegex
{
    public static function extractToken($str)
    {
        $re = '/(?:\")(-?.*)(?:\")/m';

        preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

        return $matches[0][1];
    }
}