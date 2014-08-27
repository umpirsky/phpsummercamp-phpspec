## Instructor Notes

Here's the high-level plan:

### Step 0

- Go through some quick slides about PHPSpec.

### Step 1

- Create composer.json and install dependencies.
- Get to know PHPSpec console.

### Step 2

- `$ ./bin/phpspec describe PHPSpecWorkshop/CurrencyConverter`.

### Step 3

- `$ ./bin/phpspec run`.

### Step 4

- Write first example.
- Demonstrate failure reporting, code generator and identity matcher.
`
### Step 5

- Write one more spec in order to show the development cycle.

### Step 6

- Check `CurrencyConverterInterface` with type matcher.

### Step 7

- Cover currency not supported case with throw matcher.

### Step 8

- `$ ./bin/phpspec describe PHPSpecWorkshop/CurrencyConverterExtension`.
- `$ ./bin/phpspec run`.
- It is a `Twig_Extension`.

### Step 9

- Describe that `CurrencyConverterExtension` provides `currency` filter.

### Step 10

- Construct object with let.
- Describe currency filter, mock `CurrencyConverterInterface`.

### Step 11

- Format currency.

### Step 12

- Make specs environment independent.

### Step 13

- Check if `CurrencyConverterExtension` provides currency filter with inline matcher.

### Step 14

- Describe price filter.
