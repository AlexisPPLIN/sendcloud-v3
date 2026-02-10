<?php

declare(strict_types=1);

namespace Test\AlexisPPLIN\SendcloudV3;

use AlexisPPLIN\SendcloudV3\Exceptions\DateParsingException;
use AlexisPPLIN\SendcloudV3\Utils\DateUtils;
use AlexisPPLIN\SendcloudV3\Utils\JsonUtils;
use DateTimeImmutable;
use DateTimeZone;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(JsonUtils::class)]
class JsonUtilsTest extends TestCase
{
    /* addIfNotNull */

    public function testAddIfNotNull() : void
    {
        // -- Arrange

        $json = ['data' => 'test'];

        $key_1 = 'id';
        $value_1 = 1;

        $key_2 = 'name';
        $value_2 = null;

        $expected = [
            'data' => 'test',
            'id' => 1
        ];

        // -- Act

        JsonUtils::addIfNotNull($json, $key_1, $value_1);
        JsonUtils::addIfNotNull($json, $key_2, $value_2);

        // -- Assert

        $this->assertEquals($expected, $json);
    }
}