<?php

namespace AlexisPPLIN\SendcloudV3\Models;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;

class Status implements ModelInterface
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

    public function jsonSerialize() : array
    {
        $json = [
            'code' => $this->code
        ];

        if (isset($this->message)) {
            $json['message'] = $this->message;
        }

        return $json;
    }
}