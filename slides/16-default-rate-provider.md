#### Step 16 - Default static currency exchange rate provider

A) Run `$ ./bin/phpspec describe PHPSpecWorkshop/CurrencyExchangeRateProvider`,
code generator will generate `CurrencyExchangeRateProviderSpec`.

B) Run `$ ./bin/phpspec` and use code generator to generate `CurrencyExchangeRateProvider`.

C) Describe what interface it implements.

D) Implement it.

E) Fulfill expectations in small iterative steps until you make console green again!

**GOAL**

* You should have default `CurrencyExchangeRateProvider`.
* You should have 3 specs with 13 passed examples.

**EXTRA CREDIT**

Describe and implement exchange rate provider that uses third party API to fetch rates.
Let's say `http://summer.org/api/rates.json` returns json response `{"HRK":7.63,"USD":1.3}`;

**STUCK?**

No worries: http://bit.ly/summer-phpspec
