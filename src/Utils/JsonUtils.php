<?php

declare(strict_types=1);

namespace AlexisPPLIN\SendcloudV3\Utils;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;

/**
 * Utility methods for json handling
 */
class JsonUtils
{
    /**
     * Used in {@see ModelInterface::fromData()} to only add to json if the value is not null
     * @param array<mixed> $json Array to be converted into json
     * @param $key Key name to use if value is not null
     */
    public static function addIfNotNull(array &$json, string $key, mixed $value) : void
    {
        if (isset($value)) {
            $json[$key] = $value;
        }
    }
}
