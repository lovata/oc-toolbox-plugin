<?php namespace Lovata\Toolbox\Traits\Helpers;

use System\Classes\PluginManager;

/**
 * Class TraitInitActiveLang
 * @package Lovata\Toolbox\Traits\Helpers
 * @author Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group
 */
trait TraitInitActiveLang
{
    /** @var bool - Flag, Translate plugin data was init */
    protected static $bLangInit = false;

    /** @var string - Active lang code from Translate plugin */
    protected static $sActiveLang = null;

    /** @var string - Default lang code from Translate plugin */
    protected static $sDefaultLang = null;

    /**
     * Get and save active lang from Translate plugin
     */
    protected function initActiveLang()
    {
        if (self::$bLangInit || !PluginManager::instance()->hasPlugin('RainLab.Translate')) {
            return;
        }

        self::$bLangInit = true;
        $obTranslate = \RainLab\Translate\Classes\Translator::instance();

        self::$sDefaultLang = $obTranslate->getDefaultLocale();

        $sActiveLang = $obTranslate->getLocale();
        if (empty($sActiveLang) || $obTranslate->getDefaultLocale() == $sActiveLang) {
            return;
        }

        self::$sActiveLang = $sActiveLang;
    }
}