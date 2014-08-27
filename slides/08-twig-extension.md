#### Step 8 - Currency converter Twig extension

Let's describe Twig extension that will allow us to for example render prices in local currency:

`{{ price|currency('HRK') }}`

A) Run `$ ./bin/phpspec describe PHPSpecWorkshop/CurrencyConverterExtension` and generate `CurrencyConverterExtensionSpec`.

B) Run `$ ./bin/phpspec run` and generate `CurrencyConverterExtension`.

C) Describe that `CurrencyConverterExtension` is a `Twig_Extension`.

D) Iterate until you make console green again!

**GOAL**

* You should have `CurrencyConverterExtension` and its spec generated.
* You should have 2 specs and 7 passed examples.

**EXTRA CREDIT**

Describe that currency converter extension currently have no functions and filters.

**STUCK?**

No worries: http://bit.ly/summer-phpspec
