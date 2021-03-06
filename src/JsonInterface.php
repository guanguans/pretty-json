<?php

/*
 * This file is part of the guanguans/json-format.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\JsonFormat;

interface JsonInterface
{
    /**
     * @param $json
     * @param $options
     *
     * @return string
     */
    public static function format($json, $options);
}
