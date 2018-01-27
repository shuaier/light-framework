<?php
namespace Light\I18n\Locale;

use Light\Config\Config;

class LocaleManager
{
    protected $localeOpts;

    public function __construct(Config $config)
    {
        $this->localeOpts = $config->get('i18n.locale');
    }

    public function getMode()
    {
        return $this->localeOpts['mode'];
    }

    public function getAvailable()
    {
        return $this->localeOpts['available'];
    }

    public function getDefaultLocaleKey()
    {
        return $this->localeOpts['default'];
    }

    public function isAvailableLocaleKey($localeKey)
    {
        return isset($this->localeOpts['available'][$localeKey]);
    }
}