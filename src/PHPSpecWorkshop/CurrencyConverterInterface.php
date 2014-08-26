<?php

namespace PHPSpecWorkshop;

interface CurrencyConverterInterface
{
    public function convert($value, $currency);
}
