<?php

declare(strict_types=1);

namespace Test\AlexisPPLIN\SendcloudV3;

use AlexisPPLIN\SendcloudV3\Exceptions\DateParsingException;
use AlexisPPLIN\SendcloudV3\Utils\DateUtils;
use DateTimeImmutable;
use DateTimeZone;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(DateUtils::class)]
class DateUtilsTest extends TestCase
{
    /* iso8601ToDateTime */

    public function testIso8601ToDateTime() : void
    {
        // -- Arrange

        $iso8601 = '2026-01-01T00:00:00.000000+00:00';
        $expected = new DateTimeImmutable('2026-01-01 00:00:00', new DateTimeZone('+0000'));

        // -- Act

        $actual = DateUtils::iso8601ToDateTime($iso8601);

        // -- Assert

        $this->assertEquals($expected, $actual);
    }

    public function testIso8601ToDateTimeDateParsingExceptionNullBytes() : void
    {
        // -- Arrange

        $iso8601 = "\0";

        // -- Act

        $this->expectException(DateParsingException::class);
        DateUtils::iso8601ToDateTime($iso8601);
    }

    public function testIso8601ToDateTimeDateParsingExceptionFormatError() : void
    {
        // -- Arrange

        $iso8601 = "Hello world";

        // -- Act

        $this->expectException(DateParsingException::class);
        DateUtils::iso8601ToDateTime($iso8601);
    }

    /* dateTimeToIso8601 */

    public function testDateTimeToIso8601() : void
    {
        // -- Arrange

        $date = new DateTimeImmutable('2026-01-01 00:00:00', new DateTimeZone('+0000'));
        $expected = '2026-01-01T00:00:00.000000+00:00';

        // -- Act

        $actual = DateUtils::dateTimeToIso8601($date);

        // -- Assert

        $this->assertEquals($expected, $actual);
    }
}