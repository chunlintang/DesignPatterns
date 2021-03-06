<?php
/**
 * Created by PhpStorm.
 * User: tangchunlinit@gmail.com
 * Date: 2018/7/11
 * Time: 上午8:40
 */

namespace AbstractFactory\Test;

//require "../../../vendor/autoload.php";

use AbstractFactory\CSVParser;
use PHPUnit\Framework\TestCase;
use AbstractFactory\ParserFactory;

class AbstractFactoryTest extends TestCase
{
    /**
     * test for csv parser
     */
    public function testCreateCSVParser()
    {
        $factory = new ParserFactory();
        $parser = $factory->createCsvParser(CSVParser::OPTION_CONTAINS_HEADER);
        $this->assertInstanceOf(CSVParser::class, $parser);
    }

    /**
     * test for json parser
     */
    public function testCreateJsonParser()
    {
        $factory = new ParserFactory();
        $parser = $factory->createJsonParser();
        $this->assertInstanceOf(JsonParser::class, $parser);
    }
}