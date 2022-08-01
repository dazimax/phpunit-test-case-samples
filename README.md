# PHPUnit Framework related Test Case Samples
This will have PHPUnit Test Framework related test cases. These test cases will help to see working demos with PHPUnit Testing Framework.

# PHPStorm integration to PHPUnit Test Framwork
All the required information can be found here https://www.jetbrains.com/help/phpstorm/using-phpunit-framework.html#generate_phpunit_test_for_a_class_in_a_separate_file

# Plug and Play

- Download and run the `composer install` to get the PHPUnit Framework
- Configure the PHPStorm IDE as mentioned above or run the phpunit testing command directly. e.g. - https://phpunit.de/getting-started/phpunit-7.html

Example of `assertEquals()` test case


`Foo.php (Base class)`

```php
<?php

class Foo
{
    /**
     * Tell Foo class Name
     * @param string $name
     * @return string
     */
    public function tellName(string $name = 'Josh'): string
    {
        return 'Hi ' . $name;
    }
}

```

`FooTest.php (Test case class)`

```php
<?php

include('Foo.php');

use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    /**
     * PHPUnit testing with assertEquals
     * @return void
     */
    public function testTellName()
    {
        // create the class object
        $mockObj = $this->getMockBuilder(Foo::class)
            ->disableOriginalConstructor()
            ->setMethods(null)
            ->getMock();
        // get the object function result by passing the method parameter value
        // pass different parameter value to get an invalid result
        $result = $mockObj->tellName('John');
        // validate the result with assertEquals()
        $this->assertEquals('Hi John', $result);
    }
}
```

`Success result`
![Alt text](https://github.com/dazimax/phpunit-test-case-samples/blob/main/docs/success.png?raw=true "Success Result")

`Failed result`
![Alt text](https://github.com/dazimax/phpunit-test-case-samples/blob/main/docs/error.png?raw=true "Failed Result")

# Currently available asserts
- `assertEquals()`

# Contribute to expand these Test Cases
You can simply create a pull request with your added sample test cases!

Coded with :heart:
