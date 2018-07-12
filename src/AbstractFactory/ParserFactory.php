<?php

/**
 * Created by PhpStorm.
 * User: tangchunlinit@gmail.com
 * Date: 2018/7/11
 * Time: 上午8:36
 */

namespace AbstractFactory;

class ParserFactory
{
    public function createCsvParser(bool $shipHeaderLine): CSVParser
    {
        return new CSVParser($shipHeaderLine);
    }

    public function createJsonParser(): JsonParser
    {
        return new JsonParser();
    }
}