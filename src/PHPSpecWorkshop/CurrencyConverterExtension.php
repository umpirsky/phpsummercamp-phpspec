<?php

namespace PHPSpecWorkshop;

class CurrencyConverterExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return [new \Twig_SimpleFilter('currency', [$this, 'currencyFilter'])];
    }

    public function getName()
    {
        return 'currency_converter';
    }
}
