<?php

namespace spec\PHPSpecWorkshop;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CurrencyConverterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PHPSpecWorkshop\CurrencyConverter');
    }

    function it_implements_currency_converter_interface()
    {
        $this->shouldImplement('PHPSpecWorkshop\CurrencyConverterInterface');
    }

    function it_converts_currencies()
    {
        $this->convert(80, 'HRK')->shouldReturn(610.4);
    }

    function it_converts_non_local_currencies()
    {
        $this->convert(80, 'USD')->shouldReturn(104.0);
    }

    function it_throws_exception_when_currency_is_not_supported()
    {
        $this->shouldThrow(new \InvalidArgumentException('Currency "RSD" is not supported.'))
            ->duringConvert(80, 'RSD')
        ;
    }
}
