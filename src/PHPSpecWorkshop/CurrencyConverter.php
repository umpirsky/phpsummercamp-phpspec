<?php

namespace PHPSpecWorkshop;

class CurrencyConverter implements CurrencyConverterInterface
{
    private $rates = [
        'HRK' => 7.65
    ];

    public function convert($value, $currency)
    {
        if (!isset($this->rates[$currency])) {
            throw new \InvalidArgumentException(sprintf(
                'Currency "%s" is not supported.',
                $currency
            ));
        }

        return $value * $this->rates[$currency];
    }
}
