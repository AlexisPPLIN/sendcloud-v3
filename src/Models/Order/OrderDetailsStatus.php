<?php

namespace AlexisPPLIN\SendcloudV3\Models\Order;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;

class OrderDetailsStatus implements ModelInterface
{
    public function __construct(
        public readonly string $code,
        public readonly ?string $message = null,
    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            code:    (string) $data['code'],
            message: isset($data['message']) ? (string) $data['message'] : null
        );
    }
}