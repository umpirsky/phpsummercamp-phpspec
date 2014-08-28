<?php

namespace spec\PHPSpecWorkshop;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use PHPSpecWorkshop\CurrencyExchangeRateProviderInterface;

class CurrencyConverterSpec extends ObjectBehavior
{
    function let(CurrencyExchangeRateProviderInterface $provider)
    {
        $this->beConstructedWith($provider);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('PHPSpecWorkshop\CurrencyConverter');
    }

    function it_implements_currency_converter_interface()
    {
        $this->shouldImplement('PHPSpecWorkshop\CurrencyConverterInterface');
    }

    function it_converts_currencies($provider)
    {
        $provider->getRate('HRK')->shouldBeCalled()->willReturn(7.63);

        $this->convert(80, 'HRK')->shouldReturn(610.4);
    }

    function it_converts_non_local_currencies($provider)
    {
        $provider->getRate('USD')->shouldBeCalled()->willReturn(1.30);

        $this->convert(80, 'USD')->shouldReturn(104.0);
    }
}
