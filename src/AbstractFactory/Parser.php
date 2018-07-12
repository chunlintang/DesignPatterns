<?php

/**
 * Created by PhpStorm.
 * User: tangchunlinit@gmail.com
 * Date: 2018/7/11
 * Time: 上午8:25
 */

namespace AbstractFactory;

interface Parser
{
    public function parse(string $input): array;
}