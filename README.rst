Php Data Tester
===============
.. image:: https://travis-ci.org/mpoiriert/php-data-tester.svg?branch=master

This library is a wrapper around **PHPUnit Assert** class to be able to use a fluent interface on the data you want to test.

Here is a quick example of how to use it in a **PHPUnit TestCase**:

.. code-block:: php

    <?php

    namespace Your\Project\Name;

    use PHPUnit\Framework\TestCase;
    use Draw\DataTester\Tester;

    class SimpleTest extends TestCase
    {
        public function test()
        {
            $data = [
              'key1' => 'value1',
              'key2' => (object)['toto' => 'value']
            ];

            (new Tester($data))
                ->assertInternalType('array')
                ->assertCount(2)
                ->path(
                    '[key1]',
                    function (Tester $tester) {
                        $tester->assertSame('value1');
                    }
                )
                ->path(
                    '[key2].toto',
                    function (Tester $tester) {
                        $tester->assertSame('value');
                    }
                );
        }
    }

There is a lot more features available, just `Read the Docs <http://php-data-tester.readthedocs.io/en/latest/>`_!