<?php

namespace AlexisPPLIN\SendcloudV3\Models\ServicePoint;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;

class ServicePoint implements ModelInterface{
    public function __construct(
        public readonly string $id,
        public readonly ?string $post_number = null,
        public readonly ?string $latitude = null,
        public readonly ?string $longitude = null,
        public readonly ?string $type = null,
        public readonly ?object $extra_data = null
    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            id: (string) $data['id'],
            post_number: isset($data['post_number']) ? (string) $data['post_number']    : null,
            latitude:    isset($data['latitude'])    ? (string) $data['latitude']       : null,
            longitude:   isset($data['longitude'])   ? (string) $data['longitude']      : null,
            type:        isset($data['type'])        ? (string) $data['type']           : null,
            extra_data:  isset($data['extra_data'])  ? (object) $data['extra_data']     : null,
        );
    }
}