<?php

namespace spec\PHPSpecWorkshop;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CurrencyConverterExtensionSpec extends ObjectBehavior
{
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
}
