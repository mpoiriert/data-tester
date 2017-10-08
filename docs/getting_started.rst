Getting Started
===============

Requirements
^^^^^^^^^^^^
This library is compatible with **PHPUnit** versions **(^6.0|^5.0|^4.0)** and **PHP** **(^5.6|^7.0)**.
You can check the CI test on travis https://travis-ci.org/mpoiriert/php-data-tester.

Create a Data Tester
^^^^^^^^^^^^^^^^^^^^
From a PHPUnit test case you simply create a new **Draw\\DataTester\\Tester** instance:

.. literalinclude:: ../test/ExampleTest.php
   :name: Example-Simple-Test
   :caption: Example: Simple Test
   :start-after: //example-start: TestClass
   :end-before: //example-end: TestClass
   :prepend: <?php
   :append: }

Extending from **Draw\\DataTester\\TestCase** allow your **TestCase** to be compatible with older version of PHPUnit
that doesn't use namespace. Since this project is compatible with PHPUnit 4.0 and 5.0 it is necessary. You can
simply extend from **PHPUnit\\Framework\\TestCase** or **PHPUnit_Framework_TestCase** if you want.

The **Tester** use a fluent interface by returning himself on all of the **assert\*** methods and most of his methods.
This allow to easily make multiple test on the same *data*.

If you don't need a reference to the tester you can be even more concise:

.. literalinclude:: ../test/ExampleTest.php
   :name: Example-New-Concise
   :caption: Example: New Concise
   :emphasize-lines: 2
   :start-after: //example-start: ConciseNew
   :end-before: //example-end: ConciseNew
   :dedent: 8
   :prepend: <?php


Path
^^^^
For more complex data (array, object) you can use the **path** method to test something deeper in the data itself:

.. literalinclude:: ../test/ExampleTest.php
   :name: Example-Path
   :caption: Example: Path
   :emphasize-lines: 3
   :start-after: //example-start: TestPath
   :end-before: //example-end: TestPath
   :dedent: 8
   :prepend: <?php

By Using the **path** method you are making a assertion that the *path* is accessible. Also if you pass a **callable**
at the second argument it will be call with a new **Tester** instance with the *data* of the *path* to be tested.

.. literalinclude:: ../test/ExampleTest.php
   :name: Example-Path-Callable
   :caption: Example: Path Callable
   :emphasize-lines: 4-6
   :start-after: //example-start: TestPath
   :end-before: //example-end: TestPath
   :dedent: 8
   :prepend: <?php

Chaining Path
^^^^^^^^^^^^^
Since the **path** method return the original **Tester** instance you can easily chain multiple **path** test.

.. literalinclude:: ../test/ExampleTest.php
   :name: Example-Chain-Path
   :caption: Example: Chain Path
   :emphasize-lines: 3,8
   :start-after: //example-start: ChainTestPath
   :end-before: //example-end: ChainTestPath
   :dedent: 8
   :prepend: <?php

Deep Path
^^^^^^^^^
If you have a deeper object you can call **path** inside your **callable**

.. literalinclude:: ../test/ExampleTest.php
   :name: Example-Deeper-Path
   :caption: Example: Deeper Path
   :emphasize-lines: 3,5
   :start-after: //example-start: DeeperPathTest
   :end-before: //example-end: DeeperPathTest
   :dedent: 8
   :prepend: <?php

Each
^^^^
If your data is **iterable** trough **foreach** you can test all the entry via a callable:

.. literalinclude:: ../test/ExampleTest.php
   :name: Example-Each
   :caption: Example: Each
   :emphasize-lines: 3
   :start-after: //example-start: EachTest
   :end-before: //example-end: EachTest
   :dedent: 8
   :prepend: <?php

Transform
^^^^^^^^^
If you need to **transform** the *data* during the test you can call the **transform** method with a **callable** as
the first argument for the transformation and another **callable** for the test as the second argument.

Let's you have a **json** string as *data*, that you want to test the content, it will look like this:

.. literalinclude:: ../test/ExampleTest.php
   :name: Example-Transform
   :caption: Example: Transform
   :emphasize-lines: 3
   :start-after: //example-start: Transform
   :end-before: //example-end: Transform
   :dedent: 8
   :prepend: <?php

Ideally you should **test** your *data* before transforming it:

.. literalinclude:: ../test/ExampleTest.php
   :name: Example-Assert-Before-Transform
   :caption: Example: Assert Before Transform
   :emphasize-lines: 3
   :start-after: //example-start: AssertTransform
   :end-before: //example-end: AssertTransform
   :dedent: 8
   :prepend: <?php

Optional Path
^^^^^^^^^^^^^
Considering you have a complex structure with optional **path** into it. You can use the method **ifPathIsReadable**
to make some test **optional**:

.. literalinclude:: ../test/ExampleTest.php
   :name: Example-If-Path-Is-Readable
   :caption: Example: If Path Is Readable
   :emphasize-lines: 3
   :start-after: //example-start: IfPathIsReadable
   :end-before: //example-end: IfPathIsReadable
   :dedent: 8
   :prepend: <?php

This obviously make more sense with a combination of **each**. In this more complex example lets say you receive
a list of users object that don't have the same properties available:

.. literalinclude:: ../test/ExampleTest.php
   :name: Example-If-Path-Is-Readable-And-Each
   :caption: Example If Path Is Readable And Each
   :emphasize-lines: 6,29
   :start-after: //example-start: IfPathIsReadableAndEach
   :end-before: //example-end: IfPathIsReadableAndEach
   :dedent: 8
   :prepend: <?php

