<?php

declare(strict_types=1);

namespace AlexisPPLIN\SendcloudV3\Utils;

use AlexisPPLIN\SendcloudV3\Exceptions\DateParsingException;
use DateTimeImmutable;
use ValueError;

class DateUtils
{
    public const DATE_FORMAT = "Y-m-d\TH:i:s.uP";

    /**
     * Parse ISO 8601 date into an DateTimeImmutable object
     * @throws DateParsingException
     */
    public static function iso8601ToDateTime(string $iso8601) : DateTimeImmutable
    {
        try {
            $date = DateTimeImmutable::createFromFormat(self::DATE_FORMAT, $iso8601);
        } catch (ValueError $valueError) {
            throw new DateParsingException(sprintf('Error when parsing ISO 8601 date (%s)', $iso8601), 0, $valueError);
        }
        
        if (!$date) {
            throw new DateParsingException(sprintf('Error when parsing ISO 8601 date (%s)', $iso8601));
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
