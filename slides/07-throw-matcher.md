#### Step 7 - Throw matcher

A) Run some example with non suppored currency.

B) Describe that `CurrencyConverter` should throw `InvalidArgumentException` if currency is not supported.

C) Run `$ ./bin/phpspec run`, make sure it fails.

D) Refactor `CurrencyConverter` to throw `InvalidArgumentException`.

E) Run `$ ./bin/phpspec run`, green!

**GOAL**

* `CurrencyConverter` should have error reporting mechanism.
* You should have 5 passed examples.

**EXTRA CREDIT**

Match exception message with throw matcher.
