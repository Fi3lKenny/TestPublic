<?php
namespace App\Helpers;

class AppHelper
{
    public static function convertMoney($angka)
    {
        return strrev(implode('.', str_split(strrev(strval($angka)), 3)));
    }
}
