<?php
declare(strict_types=1);

namespace Mrkrstphr\DbUnit\DataSet;

use PHPUnit_Extensions_Database_DataSet_AbstractDataSet;

class ArrayDataSet extends PHPUnit_Extensions_Database_DataSet_AbstractDataSet
{
    protected $tables = [];

    public function __construct($files = null)
    {
        foreach ((array)$files as $file) {
            $this->addFile($file);
        }
    }

    public function addFile($file)
    {
        $data = require $file;

        foreach ($data as $tableName => $rows) {
            if (!isset($rows)) {
                $rows = array();
            }
            if (!is_array($rows)) {
                continue;
            }
            if (!array_key_exists($tableName, $this->tables)) {
                $columns = array_keys($rows[0]);
                $tableMetaData = new \PHPUnit_Extensions_Database_DataSet_DefaultTableMetaData(
                    $tableName,
                    $columns
                );
                $this->tables[$tableName] = new \PHPUnit_Extensions_Database_DataSet_DefaultTable(
                    $tableMetaData
                );
            }
            foreach ($rows as $row) {
                $this->tables[$tableName]->addRow($row);
            }
        }
    }

    protected function createIterator($reverse = false)
    {
        return new \PHPUnit_Extensions_Database_DataSet_DefaultTableIterator(
            $this->tables,
            $reverse
        );
    }
}
