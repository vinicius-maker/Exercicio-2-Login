<?php

namespace Forseti\Bot\Login\Regex;

abstract class TabelaRegex
{
    public static function getHora($str)
    {
        $re = '/\d*/m';

        preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

        return $matches[0][0];
    }

    public static function getMinutos($str)
    {
        $re = '/\d*/m';

        preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

        return $matches[2][0];
    }
}
