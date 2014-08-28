<?php

namespace PHPSpecWorkshop;

class CurrencyExchangeRateProvider implements CurrencyExchangeRateProviderInterface
{
    private $rates = [
        'HRK' => 7.63,
        'USD' => 1.30,
    ];

    public function getRate($currency)
    {
        if (isset($this->rates[$currency])) {
            return $this->rates[$currency];
        }

        throw new \InvalidArgumentException(sprintf(
            'Currency "%s" is not supported.',
            $currency
        ));
    }
}
