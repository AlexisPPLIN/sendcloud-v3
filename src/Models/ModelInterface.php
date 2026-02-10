<?php

namespace AlexisPPLIN\SendcloudV3\Models;

use AlexisPPLIN\SendcloudV3\Exceptions\DateParsingException;
use AlexisPPLIN\SendcloudV3\Exceptions\ModelFromDataException;
use JsonSerializable;

interface ModelInterface extends JsonSerializable
{
    /**
     * @param array<mixed> $data
     * @throws ModelFromDataException
     * @throws DateParsingException
     */
    public static function fromData(array $data) : self;

    /**
     * @return array<mixed>
     * @throws DateParsingException
     */
    public function jsonSerialize() : array;
}