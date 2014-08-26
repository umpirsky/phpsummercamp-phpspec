<?php

namespace spec\PHPSpecWorkshop;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use PHPSpecWorkshop\CurrencyConverterInterface;

class CurrencyConverterExtensionSpec extends ObjectBehavior
{
    function let(CurrencyConverterInterface $converter)
    {
        $this->beConstructedWith($converter);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('PHPSpecWorkshop\CurrencyConverterExtension');
    }

    function it_is_a_twig_extension()
    {
        $this->shouldHaveType('Twig_Extension');
    }

    function it_provides_currency_filter()
    {
        $filters = $this->getFilters();

        $filters->shouldBeArray();
        $filters->shouldHaveCount(1);
        $filters[0]->shouldHaveType('Twig_SimpleFilter');
        $filters[0]->getName()->shouldReturn('currency');
    }

    function it_converts_currencies($converter)
    {
        $converter->convert(80, 'USD')->shouldBeCalled()->willReturn(104.0);

        $this->currencyFilter(80, 'USD')->shouldReturn('104 USD');
    }
}
