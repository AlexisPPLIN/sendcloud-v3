<?php

declare(strict_types=1);

namespace AlexisPPLIN\SendcloudV3\Models\Order;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;

class OrderDetailsIntegration implements ModelInterface
{
    public function __construct(
        public readonly int $id
    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            id: (int) $data['id']
        );
    }

    public function jsonSerialize() : array
    {
        $json = [
            'id' => $this->id
        ];

        return $json;
    }
}
