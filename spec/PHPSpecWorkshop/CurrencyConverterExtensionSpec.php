<?php

namespace spec\PHPSpecWorkshop;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use PHPSpecWorkshop\CurrencyConverterInterface;

class CurrencyConverterExtensionSpec extends ObjectBehavior
{
    function let(CurrencyConverterInterface $converter)
    {
        $this->beConstructedWith($converter, 'en_US');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('PHPSpecWorkshop\CurrencyConverterExtension');
    }

    function it_is_a_twig_extension()
    {
        $this->shouldHaveType('Twig_Extension');
    }

    function it_provides_some_filters()
    {
        $filters = $this->getFilters();

        $filters->shouldBeArray();
        $filters->shouldHaveCount(1);
    }

    function it_provides_currency_filter()
    {
        $this->getFilters()->shouldContainCurrencyFilter();
    }

    function it_converts_currencies($converter)
    {
        $converter->convert(80, 'USD')->shouldBeCalled()->willReturn(104.121354);

        $this->currencyFilter(80, 'USD')->shouldReturn('$104.12');
    }

    public function getMatchers()
    {
        return [
            'containCurrencyFilter' => function($subject) {
                $filter = $subject[0];

                return $filter instanceof \Twig_SimpleFilter && 'currency' === $filter->getName();
            }
        ];
    }
}
