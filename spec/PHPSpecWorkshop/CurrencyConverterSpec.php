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
        $this->convert(80, 'HRK')->shouldReturn(10.4);
    }
}
