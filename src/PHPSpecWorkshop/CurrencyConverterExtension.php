<?php

namespace PHPSpecWorkshop;

class CurrencyConverterExtension extends \Twig_Extension
{
    private $converter;

    public function __construct(CurrencyConverterInterface $converter)
    {
        $this->converter = $converter;
    }

    public function getFilters()
    {
        return [new \Twig_SimpleFilter('currency', [$this, 'currencyFilter'])];
    }

    public function getName()
    {
        return 'currency_converter';
    }

    public function currencyFilter($value, $currency)
    {
        return $this->converter->convert($value, $currency) . ' ' . $currency;
    }
}
