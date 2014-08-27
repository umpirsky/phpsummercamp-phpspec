<?php

namespace PHPSpecWorkshop;

interface CurrencyExchangeRateProviderInterface
{
    public function getRate($currency);
}
