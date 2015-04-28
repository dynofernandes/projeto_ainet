<?php namespace Ainet\Support;

class HtmlHelper
{
    public static function e($raw)
    {
        return htmlspecialchars($raw, ENT_QUOTES, 'UTF-8');
    }

    // TODO: feel free to add more methods
}
