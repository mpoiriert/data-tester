<?php

namespace Draw\DataTester;

use PHPUnit\Framework\Assert;
use Symfony\Component\PropertyAccess\PropertyAccess;

/**
 * @method $this assertArrayHasKey($key, $message = '')
 * @method $this assertArrayNotHasKey($key, $message = '')
 * @method $this assertContains($needle, $message = '', $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
 * @method $this assertAttributeContains($needle, $haystackAttributeName, $message = '', $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
 * @method $this assertNotContains($needle, $message = '', $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
 * @method $this assertAttributeNotContains($needle, $haystackAttributeName, $message = '', $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
 * @method $this assertContainsOnly($type, $isNativeType = null, $message = '')
 * @method $this assertContainsOnlyInstancesOf($classname, $message = '')
 * @method $this assertAttributeContainsOnly($type, $haystackAttributeName, $isNativeType = null, $message = '')
 * @method $this assertNotContainsOnly($type, $isNativeType = null, $message = '')
 * @method $this assertAttributeNotContainsOnly($type, $haystackAttributeName, $isNativeType = null, $message = '')
 * @method $this assertCount($expectedCount, $message = '')
 * @method $this assertAttributeCount($expectedCount, $haystackAttributeName, $message = '')
 * @method $this assertNotCount($expectedCount, $message = '')
 * @method $this assertAttributeNotCount($expectedCount, $haystackAttributeName, $message = '')
 * @method $this assertEquals($expected, $message = '', $delta = 0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
 * @method $this assertAttributeEquals($expected, $actualAttributeName, $message = '', $delta = 0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
 * @method $this assertNotEquals($expected, $message = '', $delta = 0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
 * @method $this assertAttributeNotEquals($expected, $actualAttributeName, $message = '', $delta = 0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
 * @method $this assertEmpty($message = '')
 * @method $this assertAttributeEmpty($haystackAttributeName, $message = '')
 * @method $this assertNotEmpty($message = '')
 * @method $this assertAttributeNotEmpty($haystackAttributeName, $message = '')
 * @method $this assertGreaterThan($expected, $message = '')
 * @method $this assertAttributeGreaterThan($expected, $actualAttributeName, $message = '')
 * @method $this assertGreaterThanOrEqual($expected, $message = '')
 * @method $this assertAttributeGreaterThanOrEqual($expected, $actualAttributeName, $message = '')
 * @method $this assertLessThan($expected, $message = '')
 * @method $this assertAttributeLessThan($expected, $actualAttributeName, $message = '')
 * @method $this assertLessThanOrEqual($expected, $message = '')
 * @method $this assertAttributeLessThanOrEqual($expected, $actualAttributeName, $message = '')
 * @method $this assertFileEquals($expected, $message = '', $canonicalize = false, $ignoreCase = false)
 * @method $this assertFileNotEquals($expected, $message = '', $canonicalize = false, $ignoreCase = false)
 * @method $this assertStringEqualsFile($expectedFile, $message = '', $canonicalize = false, $ignoreCase = false)
 * @method $this assertStringNotEqualsFile($expectedFile, $message = '', $canonicalize = false, $ignoreCase = false)
 * @method $this assertFileExists($message = '')
 * @method $this assertFileNotExists($message = '')
 * @method $this assertTrue($message = '')
 * @method $this assertNotTrue($message = '')
 * @method $this assertFalse($message = '')
 * @method $this assertNotFalse($message = '')
 * @method $this assertNotNull($message = '')
 * @method $this assertNull($message = '')
 * @method $this assertClassHasAttribute($attributeName, $message = '')
 * @method $this assertClassNotHasAttribute($attributeName, $message = '')
 * @method $this assertClassHasStaticAttribute($attributeName, $message = '')
 * @method $this assertClassNotHasStaticAttribute($attributeName, $message = '')
 * @method $this assertObjectHasAttribute($attributeName, $message = '')
 * @method $this assertObjectNotHasAttribute($attributeName, $message = '')
 * @method $this assertSame($expected, $message = '')
 * @method $this assertAttributeSame($expected, $actualAttributeName, $message = '')
 * @method $this assertNotSame($expected, $message = '')
 * @method $this assertAttributeNotSame($expected, $actualAttributeName, $message = '')
 * @method $this assertInstanceOf($expected, $message = '')
 * @method $this assertAttributeInstanceOf($expected, $attributeName, $message = '')
 * @method $this assertNotInstanceOf($expected, $message = '')
 * @method $this assertAttributeNotInstanceOf($expected, $attributeName, $message = '')
 * @method $this assertInternalType($expected, $message = '')
 * @method $this assertAttributeInternalType($expected, $attributeName, $message = '')
 * @method $this assertNotInternalType($expected, $message = '')
 * @method $this assertAttributeNotInternalType($expected, $attributeName, $message = '')
 * @method $this assertRegExp($pattern, $message = '')
 * @method $this assertNotRegExp($pattern, $message = '')
 * @method $this assertSameSize($expected, $message = '')
 * @method $this assertNotSameSize($expected, $message = '')
 * @method $this assertStringMatchesFormat($format, $message = '')
 * @method $this assertStringNotMatchesFormat($format, $message = '')
 * @method $this assertStringMatchesFormatFile($formatFile, $message = '')
 * @method $this assertStringNotMatchesFormatFile($formatFile, $message = '')
 * @method $this assertStringStartsWith($prefix, $message = '')
 * @method $this assertStringStartsNotWith($prefix, $message = '')
 * @method $this assertStringEndsWith($suffix, $message = '')
 * @method $this assertStringEndsNotWith($suffix, $message = '')
 * @method $this assertXmlFileEqualsXmlFile($expectedFile, $message = '')
 * @method $this assertXmlFileNotEqualsXmlFile($expectedFile, $message = '')
 * @method $this assertXmlStringEqualsXmlFile($expectedFile, $message = '')
 * @method $this assertXmlStringNotEqualsXmlFile($expectedFile, $message = '')
 * @method $this assertXmlStringEqualsXmlString($expectedXml, $message = '')
 * @method $this assertXmlStringNotEqualsXmlString($expectedXml, $message = '')
 * @method $this assertEqualXMLStructure($expectedElement, $checkAttributes = false, $message = '')
 * @method $this assertSelectCount($selector, $count, $message = '', $isHtml = true)
 * @method $this assertSelectRegExp($selector, $pattern, $count, $message = '', $isHtml = true)
 * @method $this assertSelectEquals($selector, $content, $count, $message = '', $isHtml = true)
 * @method $this assertTag($matcher, $message = '', $isHtml = true)
 * @method $this assertNotTag($matcher, $message = '', $isHtml = true)
 * @method $this assertThat($constraint, $message = '')
 * @method $this assertJson($message = '')
 * @method $this assertJsonStringEqualsJsonString($expectedJson, $message = '')
 * @method $this assertJsonStringNotEqualsJsonString($expectedJson, $message = '')
 * @method $this assertJsonStringEqualsJsonFile($expectedFile, $message = '')
 * @method $this assertJsonStringNotEqualsJsonFile($expectedFile, $message = '')
 * @method $this assertJsonFileNotEqualsJsonFile($expectedFile, $message = '')
 * @method $this assertJsonFileEqualsJsonFile($expectedFile, $message = '')
 */
class Tester
{
    static private $assertMethodParameterReplacements = array(
        'assertArrayHasKey' => 'array',
        'assertArrayNotHasKey' => 'array',
        'assertContains' => 'haystack',
        'assertAttributeContains' => 'haystackClassOrObject',
        'assertNotContains' => 'haystack',
        'assertAttributeNotContains' => 'haystackClassOrObject',
        'assertContainsOnly' => 'haystack',
        'assertContainsOnlyInstancesOf' => 'haystack',
        'assertAttributeContainsOnly' => 'haystackClassOrObject',
        'assertNotContainsOnly' => 'haystack',
        'assertAttributeNotContainsOnly' => 'haystackClassOrObject',
        'assertCount' => 'haystack',
        'assertAttributeCount' => 'haystackClassOrObject',
        'assertNotCount' => 'haystack',
        'assertAttributeNotCount' => 'haystackClassOrObject',
        'assertEquals' => 'actual',
        'assertAttributeEquals' => 'actualClassOrObject',
        'assertNotEquals' => 'actual',
        'assertAttributeNotEquals' => 'actualClassOrObject',
        'assertEmpty' => 'actual',
        'assertAttributeEmpty' => 'haystackClassOrObject',
        'assertNotEmpty' => 'actual',
        'assertAttributeNotEmpty' => 'haystackClassOrObject',
        'assertGreaterThan' => 'actual',
        'assertAttributeGreaterThan' => 'actualClassOrObject',
        'assertGreaterThanOrEqual' => 'actual',
        'assertAttributeGreaterThanOrEqual' => 'actualClassOrObject',
        'assertLessThan' => 'actual',
        'assertAttributeLessThan' => 'actualClassOrObject',
        'assertLessThanOrEqual' => 'actual',
        'assertAttributeLessThanOrEqual' => 'actualClassOrObject',
        'assertFileEquals' => 'actual',
        'assertFileNotEquals' => 'actual',
        'assertStringEqualsFile' => 'actualString',
        'assertStringNotEqualsFile' => 'actualString',
        'assertFileExists' => 'filename',
        'assertFileNotExists' => 'filename',
        'assertTrue' => 'condition',
        'assertNotTrue' => 'condition',
        'assertFalse' => 'condition',
        'assertNotFalse' => 'condition',
        'assertNotNull' => 'actual',
        'assertNull' => 'actual',
        'assertClassHasAttribute' => 'className',
        'assertClassNotHasAttribute' => 'className',
        'assertClassHasStaticAttribute' => 'className',
        'assertClassNotHasStaticAttribute' => 'className',
        'assertObjectHasAttribute' => 'object',
        'assertObjectNotHasAttribute' => 'object',
        'assertSame' => 'actual',
        'assertAttributeSame' => 'actualClassOrObject',
        'assertNotSame' => 'actual',
        'assertAttributeNotSame' => 'actualClassOrObject',
        'assertInstanceOf' => 'actual',
        'assertAttributeInstanceOf' => 'classOrObject',
        'assertNotInstanceOf' => 'actual',
        'assertAttributeNotInstanceOf' => 'classOrObject',
        'assertInternalType' => 'actual',
        'assertAttributeInternalType' => 'classOrObject',
        'assertNotInternalType' => 'actual',
        'assertAttributeNotInternalType' => 'classOrObject',
        'assertRegExp' => 'string',
        'assertNotRegExp' => 'string',
        'assertSameSize' => 'actual',
        'assertNotSameSize' => 'actual',
        'assertStringMatchesFormat' => 'string',
        'assertStringNotMatchesFormat' => 'string',
        'assertStringMatchesFormatFile' => 'string',
        'assertStringNotMatchesFormatFile' => 'string',
        'assertStringStartsWith' => 'string',
        'assertStringStartsNotWith' => 'string',
        'assertStringEndsWith' => 'string',
        'assertStringEndsNotWith' => 'string',
        'assertXmlFileEqualsXmlFile' => 'actualFile',
        'assertXmlFileNotEqualsXmlFile' => 'actualFile',
        'assertXmlStringEqualsXmlFile' => 'actualXml',
        'assertXmlStringNotEqualsXmlFile' => 'actualXml',
        'assertXmlStringEqualsXmlString' => 'actualXml',
        'assertXmlStringNotEqualsXmlString' => 'actualXml',
        'assertEqualXMLStructure' => 'actualElement',
        'assertSelectCount' => 'actual',
        'assertSelectRegExp' => 'actual',
        'assertSelectEquals' => 'actual',
        'assertTag' => 'actual',
        'assertNotTag' => 'actual',
        'assertThat' => 'value',
        'assertJson' => 'actualJson',
        'assertJsonStringEqualsJsonString' => 'actualJson',
        'assertJsonStringNotEqualsJsonString' => 'actualJson',
        'assertJsonStringEqualsJsonFile' => 'actualJson',
        'assertJsonStringNotEqualsJsonFile' => 'actualJson',
        'assertJsonFileNotEqualsJsonFile' => 'actualFile',
        'assertJsonFileEqualsJsonFile' => 'actualFile',
    );

    /**
     * The root data that the asserts will be done on
     *
     * @var mixed
     */
    private $data;

    /**
     * @var \Symfony\Component\PropertyAccess\PropertyAccessorInterface
     */
    static private $propertyAccessor;

    /**
     * A private static property accessor so we do not need to initialize it more than once
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessorInterface
     */
    static protected function getPropertyAccessor()
    {
        if (is_null(static::$propertyAccessor)) {
            static::$propertyAccessor = PropertyAccess::createPropertyAccessorBuilder()
                ->enableExceptionOnInvalidIndex()
                ->getPropertyAccessor();
        }
        return static::$propertyAccessor;
    }

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Return the data value of what is currently tested
     *
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @see http://symfony.com/doc/2.3/components/property_access/introduction.html
     *
     * @param string $path path compatible with Symfony\Component\PropertyAccess\PropertyAccessor
     * @param $callable A callable that will receive a tester with the value path for data.
     *
     * @return static
     */
    public function path($path, $callable = null)
    {
        $this->assertPathIsReadable($path);

        if ($callable) {
            call_user_func(
                $callable,
                new static(static::getPropertyAccessor()->getValue($this->data, $path))
            );
        }

        return $this;
    }

    /**
     * Execute the callable if the path is readable. Useful to test array|object with optional key|property.
     *
     * @param $path
     * @param $callable
     * @return $this
     */
    public function ifPathIsReadable($path, $callable)
    {
        if ($this->isReadable($path)) {
            $this->path($path, $callable);
        }

        return $this;
    }

    /**
     * Check if a path is readable
     *
     * @param $path
     * @return bool
     */
    public function isReadable($path)
    {
        return static::getPropertyAccessor()->isReadable($this->data, $path);
    }

    /**
     * Loop trough the current data and call the callable with a independent tester
     *
     * @param $callable
     * @return $this
     */
    public function each($callable)
    {
        foreach ($this->data as $value) {
            call_user_func(
                $callable,
                new static($value)
            );
        }

        return $this;
    }

    /**
     * @param $path
     * @param string $message
     * @return $this
     */
    public function assertPathIsReadable($path, $message = null)
    {
        Assert::assertTrue(
            $this->isReadable($path),
            $message ?:
                "Property path is not readable.\nProperty path: " . $path . "\nData:\n" .
                json_encode($this->data, JSON_PRETTY_PRINT) . "\nBe careful for assoc array and object"
        );

        return $this;
    }

    public function assertPathIsNotReadable($path, $message = null)
    {
        Assert::assertFalse(
            $this->isReadable($path),
            $message ?:
                "Property path is readable.\nProperty path: " . $path . "\nData:\n" .
                json_encode($this->data, JSON_PRETTY_PRINT) . "\nBe careful for assoc array and object"
        );

        return $this;
    }

    /**
     * @param $method
     * @param array $arguments
     *
     * @return $this
     */
    public function __call($method, $arguments = array())
    {
        $reflectionMethod = new \ReflectionMethod(Assert::class, $method);
        $parameterName = self::$assertMethodParameterReplacements[$method];
        $position = null;
        //The argument is of the data is not always at the same position in the method so we need to find it
        foreach ($reflectionMethod->getParameters() as $key => $parameter) {
            if ($parameter->getName() == $parameterName) {
                $position = $key;
                break;
            }
        }

        array_splice($arguments, $position, 0, array($this->data));
        call_user_func_array([Assert::class, $method], $arguments);

        return $this;
    }
}