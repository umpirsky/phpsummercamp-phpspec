<?php

namespace PHPSpecWorkshop;

use PHPSpecWorkshop\CurrencyConverterInterface;

class CurrencyConverterExtension extends \Twig_Extension
{
    private $converter;
    private $formatter;

    public function __construct(CurrencyConverterInterface $converter, $locale = null)
    {
        $this->converter = $converter;
        $this->formatter = new \NumberFormatter(null !== $locale ?: \Locale::getDefault(), \NumberFormatter::CURRENCY);
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
        return $this->formatter->formatCurrency(
            $this->converter->convert($value, $currency),
            $currency
        );
    }
}
