<?php
/**
 * Created by PhpStorm.
 * User: tangchunlinit@gmail.com
 * Date: 2018/7/11
 * Time: 上午8:34
 */

class JsonParser implements Parser
{
    public function parse(string $input): array
    {
        // TODO: Implement parse() method.
        return json_decode($input, true);
    }
}