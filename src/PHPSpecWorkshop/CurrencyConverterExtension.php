<?php

namespace PHPSpecWorkshop;

class CurrencyConverterExtension extends \Twig_Extension
{
    private $converter;
    private $formatter;

    public function __construct(CurrencyConverterInterface $converter, $locale = null)
    {
        $this->converter = $converter;
        $this->formatter = new \NumberFormatter($locale, \NumberFormatter::CURRENCY);
    }

    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('currency', [$this, 'currencyFilter']),
            new \Twig_SimpleFilter('price', [$this, 'priceFilter']),
        ];
    }

    public function getName()
    {
        return 'currency_converter';
    }

    public function currencyFilter($value, $currency)
    {
        return $this->priceFilter(
            $this->converter->convert($value, $currency),
            $currency
        );
    }

    public function priceFilter($value, $currency)
    {
        return $this->formatter->formatCurrency($value, $currency);
    }
}
