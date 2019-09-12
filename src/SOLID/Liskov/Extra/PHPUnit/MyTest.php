<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\Liskov\PHPUnit;

/*
 * We already discussed an example of the Liskov Substitution Principle when we discussed the
 * Open/Closed Principle. The ArrayDataSet class we defined as an instance of PHPUnit’s IDataSet
 * is returned from the getDataSet() method of DbUnit’s DatabaseTestCase abstract class.
 *
 * The PHPUnit DatabaseTestCase class expects that the getDataSet() method will return an
 * instance of IDataSet , but doesn’t necessarily care what implementation you give it, so long as
 * it conforms to the interface. This is also referred to as design by contract, which we’ll talk about
 * in much more detail in Dependency Injection.
 * The key point of the Liskov Substitution Principle is that the behavior of the client code
 * shall remain unchanged. Regardless of what implementation of IDataSet we return from
 * getDataSet() , it will result in the data set being loaded into the database for unit tests to be
 * run against. It doesn’t matter if that data came from CSV, JSON, XML, or from our new PHP
 * array class: the behavior of the unit tests remain the same.
 */
final class MyTest extends DatabaseTestCase
{
    public function getDataSet(): IDataSet
    {
        return new ArrayDataSet([]);
    }
}
