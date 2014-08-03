<?php

namespace PHPSpecWorkshop;

class CurrencyConverter implements CurrencyConverterInterface
{
    private $rates = [
        'HRK' => 0.13
    ];

    public function convert($value, $currency)
    {
        return $value * $this->rates[$currency];
    }
}
