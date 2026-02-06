<?php

namespace AlexisPPLIN\SendcloudV3\Models;

use AlexisPPLIN\SendcloudV3\Exceptions\ModelFromDataException;

interface ModelInterface
{
    /**
     * @param array<mixed> $data
     * @throws ModelFromDataException
     */
    public static function fromData(array $data) : self;
}