<?php

namespace StainlessPlugins\CookieFirst;
use OxidEsales\Eshop\Core\Registry;

class CookieFirst extends CookieFirst_parent
{
    function getCookieConsentGroupAttribute()
    {
        return 'data-cookiefirst-category';
    }

    function isCookieConsentEncapsulateAlsoNecessary()
    {
        return true;
    }

    function getCookieConsentServiceAttribute() {
        return '';
    }

    function getCookieConsentScript()
    {
        $id = Registry::getConfig()->getConfigParam('cookiefirstkey');
        return "<script src=\"https://consent.cookiefirst.com/banner.js\" data-cookiefirst-key=\"$id\"></script>";
    }
}