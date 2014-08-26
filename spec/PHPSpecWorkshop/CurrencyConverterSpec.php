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

    function it_converts_currencies()
    {
        $this->convert(80, 'HRK')->shouldReturn(610.4);
    }

    function it_converts_non_local_currencies()
    {
        $this->convert(80, 'USD')->shouldReturn(104.0);
    }
}
