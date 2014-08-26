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
        return $value * $this->rates[$currency];
    }
}
