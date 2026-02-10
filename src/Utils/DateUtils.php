<?php

namespace AlexisPPLIN\SendcloudV3\Utils;

use AlexisPPLIN\SendcloudV3\Exceptions\DateParsingException;
use DateTimeImmutable;
use DateTimeInterface;

class DateUtils
{
    public const DATE_FORMAT = "Y-m-d\TH:i:s.uP";

    /**
     * Parse ISO 8601 date into an DateTimeImmutable object
     * @throws DateParsingException
     */
    public static function iso8601ToDateTime(string $iso8601) : DateTimeImmutable
    {
        $date = DateTimeImmutable::createFromFormat(self::DATE_FORMAT, $iso8601);
        if (!$date) {
            throw new DateParsingException("Error when parsing ISO 8601 date ({$iso8601})");
        }

        return $date;
    }

    /**
     * Convert DateTimeImmutable object into an ISO 8601 date
     * @throws DateParsingException
     */
    public static function dateTimeToIso8601(DateTimeImmutable $date) : string
    {
        return $date->format(self::DATE_FORMAT);
    }
}