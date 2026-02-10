<?php

declare(strict_types=1);

namespace AlexisPPLIN\SendcloudV3\Utils;

class JsonUtils
{
    /**
     * @param array<mixed> $json
     */
    public static function addIfNotNull(array &$json, string $key, mixed $value) : void
    {
        if (isset($value)) {
            $json[$key] = $value;
        }
    }
}
