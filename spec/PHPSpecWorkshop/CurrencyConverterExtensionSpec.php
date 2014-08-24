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

    function it_is_named_currency_converter()
    {
        $this->getName()->shouldReturn('currency_converter');
    }

    function it_provides_currency_filter()
    {
        $filters = $this->getFilters();

        $filters->shouldBeArray();
        $filters->shouldHaveCount(1);
        $filters->shouldContainCurrencyFilter();
    }

    function it_converts_currencies($converter)
    {
        $converter->convert(80, 'USD')->shouldBeCalled()->willReturn(106.54621543);

        $this->currencyFilter(80, 'USD')->shouldReturn('$106.55');
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
