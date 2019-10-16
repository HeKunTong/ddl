<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/10/16
 * Time: 14:47
 */

namespace EasySwoole\DDL\Filter;


use EasySwoole\DDL\Blueprint\Column;
use EasySwoole\DDL\Contracts\FilterInterface;

class FilterTinyint implements FilterInterface
{
    public static function limit(Column $column)
    {
        if ($column->getColumnLimit() < 0 || $column->getColumnLimit() > 255) {
            throw new \InvalidArgumentException('col ' . $column->getColumnName() . ' type tinyint(limit), limit must be range 1 to 255');
        }
    }

    public static function unsigned(Column $column)
    {

    }

    public static function zerofill(Column $column)
    {

    }
}