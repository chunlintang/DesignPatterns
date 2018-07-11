<?php

/**
 * Created by PhpStorm.
 * User: tangchunlinit@gmail.com
 * Date: 2018/7/11
 * Time: 上午8:24
 */
class CSVParser implements Parser
{
    const OPTION_CONTAINS_HEADER = true;
    const OPTION_NO_CONTAINS_HEADER = false;

    /**
     * @var bool
     */
    private $skipHeaderLine;

    /**
     * CSVParser constructor.
     * @param bool $skipHeaderLine
     */
    public function __construct(bool $skipHeaderLine)
    {
        $this->skipHeaderLine = $skipHeaderLine;
    }

    /**
     * @param string $input
     * @return array
     */
    public function parse(string $input): array
    {
        // TODO: Implement parse() method.
        $headerHasParsed = false;
        $parsedLines = [];
        foreach (explode(PHP_EOL, $input) as $line) {
            if (!$headerHasParsed && $this->skipHeaderLine == self::OPTION_CONTAINS_HEADER) {
                continue;
            }

            $parsedLines[] = str_getcsv($line);
        }

        return $parsedLines;
    }
}