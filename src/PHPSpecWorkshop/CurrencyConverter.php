<?php

namespace PHPSpecWorkshop;

class CurrencyConverter implements CurrencyConverterInterface
{
    private $provider;

    public function __construct(CurrencyExchangeRateProviderInterface $provider)
    {
        $this->provider = $provider;
    }

    public function convert($value, $currency)
    {
        return $value * $this->provider->getRate($currency);
    }
}
