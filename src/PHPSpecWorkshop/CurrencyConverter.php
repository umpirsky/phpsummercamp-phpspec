<?php

namespace PHPSpecWorkshop;

class CurrencyConverter implements CurrencyConverterInterface
{
    private $rates = [
        'HRK' => 7.63,
        'USD' => 1.30,
    ];

    public function convert($value, $currency)
    {
        if (isset($this->rates[$currency])) {
            return $value * $this->rates[$currency];
        }

        throw new \InvalidArgumentException(sprintf(
            'Currency "%s" is not supported.',
            $currency
        ));
    }
}
