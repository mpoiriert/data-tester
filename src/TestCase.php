<?php

namespace Draw\DataTester;

if(class_exists('PHPUnit_Framework_TestCase', true)) {
    abstract class TestCase extends \PHPUnit_Framework_TestCase
    {

    }
} else {
    abstract class TestCase extends \PHPUnit\Framework\TestCase
    {

    }
}

