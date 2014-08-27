#### Step 14 - Currency converter extension provides price filter

Let's describe Twig filter that will allow us to render prices with currency sign like this:

`{{ 80|price('USD') }}`

It should result in output like `$80.00`.

A) Describe `price` filter.

B) Use `shouldNotBeCalled` expectation to make sure it does not use converter.

C) Use `Argument::any()` to match any argument.

D) Fulfill expectations until you make console green again!

**GOAL**

* `CurrencyConverterExtension` should provide `price` filter.
* You should have 2 specs and 12 passed examples.

**EXTRA CREDIT**

There is more, open `Prophecy\Argument` class and check other useful methods it provides.
