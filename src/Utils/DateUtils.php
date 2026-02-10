<?php

namespace AlexisPPLIN\SendcloudV3\Utils;

use AlexisPPLIN\SendcloudV3\Exceptions\DateParsingException;
use DateTimeImmutable;
use DateTimeInterface;

class DateUtils
{
    /**
     * Parse ISO 8601 date into an DateTimeImmutable object
     * @throws DateParsingException
     */
    public static function iso8601ToDateTime(string $iso8601) : DateTimeImmutable
    {
        $date = DateTimeImmutable::createFromFormat(DateTimeInterface::ISO8601, $iso8601);
        if (!$date) {
            throw new DateParsingException("Error when parsing ISO 8601 date ({$iso8601})");
        }

        return $date;
    }
}