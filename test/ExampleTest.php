<?php

//example-start: TestClass
namespace Your\Project\Name;

use Draw\DataTester\Tester;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function test()
    {
        $dataToTest = 'A string value';

        $tester = new Tester($dataToTest);
        $tester
            ->assertInternalType('string')
            ->assertSame('A string value');
    }

//example-end: TestClass

    public function conciseNewTest()
    {
        //example-start: ConciseNew
        (new Tester('A string value'))
            ->assertInternalType('array')
            ->assertSame('A string value');
        //example-end: ConciseNew
    }

    public function pathTest()
    {
        //example-start: TestPath
        (new Tester((object)["key" => "value"]))
            ->path('key',
                function (Tester $tester) {
                    $tester->assertSame('value');
                }
            );
        //example-end: TestPath
    }

    public function chainPathTest()
    {
        //example-start: ChainTestPath
        (new Tester((object)["key1" => "value1", "key2" => "value2"]))
            ->path('key1',
                function (Tester $tester) {
                    $tester->assertSame('value1');
                }
            )
            ->path('key2',
                function (Tester $tester) {
                    $tester->assertSame('value2');
                }
            );
        //example-end: ChainTestPath
    }

    public function deeperPathTest()
    {
        //example-start: DeeperPathTest
        (new Tester((object)["level1" => (object)["level2" => "value"]]))
            ->path('level1',
                function (Tester $tester) {
                    $tester->path('level2',
                        function (Tester $tester) {
                            $tester->assertSame('value');
                        }
                    );
                }
            );
        //example-end: DeeperPathTest
    }

    public function eachTest()
    {
        //example-start: EachTest
        (new Tester(['value1', 'value2']))
            ->each(
                function (Tester $tester) {
                    $tester->assertInternalType('string');
                }
            );
        //example-end: EachTest
    }

    public function transformTest()
    {
        //example-start: Transform
        (new Tester('{"key":"value"}'))
            ->transform('json_decode',
                function (Tester $tester) {
                    $tester->path('key',
                        function (Tester $tester) {
                            $tester->assertSame('value');
                        }
                    );
                }
            );
        //example-end: Transform
    }

    public function transformAssertTest()
    {
        //example-start: AssertTransform
        (new Tester('{"key":"value"}'))
            ->assertJson()
            ->transform('json_decode',
                function (Tester $tester) {
                    $tester->path('key',
                        function (Tester $tester) {
                            $tester->assertSame('value');
                        }
                    );
                }
            );
        //example-end: AssertTransform
    }

    public function testIfPathIsReadable()
    {
        //example-start: IfPathIsReadable
        (new Tester(null))
            ->ifPathIsReadable(
                'notExistingPath',
                function (Tester $tester) {
                    //Will not be call with current data to test
                }
            );
        //example-end: IfPathIsReadable
        $this->assertTrue(true);//This is to prevent PHPUnit to flag test as risky
    }

    public function testIfPathIsReadableAndEach()
    {
        //example-start: IfPathIsReadableAndEach
        $users = [
            (object)[
                'firstName' => 'Martin',
                'active' => true,
                'referral' => 'Google'
            ],
            (object)[
                'firstName' => 'Julie',
                'active' => false
            ]
        ];
        (new Tester($users))
            ->each(
                function (Tester $tester) {
                    $tester
                        ->path(
                            'firstName',
                            function (Tester $tester) {
                                $tester->assertInternalType('string');
                            }
                        )
                        ->path(
                            'active',
                            function (Tester $tester) {
                                $tester->assertInternalType('boolean');
                            }
                        )
                        ->ifPathIsReadable(
                            'referral',
                            function (Tester $tester) {
                                $tester->assertInternalType('string');
                            }
                        );
                }
            );
        //example-end: IfPathIsReadableAndEach
    }
}