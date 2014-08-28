<?php

namespace spec\PHPSpecWorkshop;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CurrencyExchangeRateProviderSpec extends ObjectBehavior
{
    function it_is_a_exchange_rate_provider()
    {
        $this->shouldImplement('PHPSpecWorkshop\CurrencyExchangeRateProviderInterface');
    }

    function it_throws_exception_when_currency_is_not_supported()
    {
        $this->shouldThrow(new \InvalidArgumentException('Currency "RSD" is not supported.'))
            ->duringGetRate('RSD')
        ;
    }
}
