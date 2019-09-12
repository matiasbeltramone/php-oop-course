<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\OpenClosed\Extra\PHPUnit;

/*
 * The PHPUnit testing framework provides a great example of how a class can be open to extension,
 * but closed for modification. The PHPUnit_Extensions_Database_TestCase abstract class
 * requires that each individual test case provide a getDataSet() method, which should return an
 * instance of PHPUnit_Extensions_Database_DataSet_IDataSet , an interface. PHPUnit provides
 * several implementations of this interface, including a CsvDataSet , XmlDataSet , YamlDataSet ,
 * etc.
 * If you decided you wanted to provide your data sets as plain PHP arrays, you could write your
 * own data set provider class to do so, simply by implementing the IDataSet interface. Using this
 * new class, we could provide the TestCase class with a data set, parsed from PHP arrays, that
 * works and acts like any of the built-in PHPUnit data sets.
 */

use Mrkrstphr\DbUnit\DataSet\ArrayDataSet;

class MyTest extends DatabaseTestCase
{
    public function getDataSet(): IDataSet
    {
        return new ArrayDataSet([]);
    }
}
