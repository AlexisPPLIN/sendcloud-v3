<?php

declare(strict_types=1);

namespace AlexisPPLIN\SendcloudV3\Exceptions;

use Exception;
use Http\Client\Exception\HttpException;
use Psr\Http\Message\ResponseInterface;
use RuntimeException;
use Throwable;

class SendcloudRequestException extends Exception
{
    public const CODE_UNKNOWN = 0;

    public const CODE_CONNECTION_FAILED = 1;

    public const CODE_AUTHENTIFICATION_FAILED = 2;

    public const CODE_INVALID = 3;

    /**
     * @param array<mixed> $sendcloudSource
     */
    public function __construct(
        ?string $message = null,
        ?int $code = null,
        ?Throwable $previous = null,
        protected ?string $sendcloudCode = null,
        protected ?array $sendcloudSource = null,
    ) {
        $message = $message ?? '';
        $code = $code ?? SendcloudRequestException::CODE_UNKNOWN;

        if (isset($sendcloudCode)) {
            $message .= " [$sendcloudCode]";
        }

        if (isset($sendcloudSource)) {
            $message .= " (at " . json_encode($sendcloudSource) . ")";
        }

        parent::__construct($message, $code, $previous);
    }

    /**
     * Checks response for errors code and throws exception if needed
     *
     * @throws SendcloudRequestException
     */
    public static function fromResponse(ResponseInterface $response) : void
    {
        if ($response->getStatusCode() === 200) {
            return;
        }

        $code = self::CODE_UNKNOWN;

        if ($response->getStatusCode() === 401) {
            $code = self::CODE_AUTHENTIFICATION_FAILED;
        } else if ($response->getStatusCode() === 400) {
            $code = self::CODE_INVALID;
        }

        try {
            $result = (string) $response->getBody()->getContents();
        } catch (HttpException|RuntimeException $e) {
            self::fromException($e);
        }

        $responseData = json_decode($result, true);
        $sc_code = $responseData['errors'][0]['code'] ?? null;
        $detail = $responseData['errors'][0]['detail'] ?? null;
        $source = $responseData['errors'][0]['source'] ?? null;

        throw new self($detail, $code, null, $sc_code, $source);
    }

    /**
     * Build custom exception from others exceptions
     *
     * @throws SendcloudRequestException
     */
    public static function fromException(Throwable $exception) : never
    {
        $code = null;
        $message = null;

        if ($exception instanceof self) {
            throw $exception;
        }

        if ($exception instanceof \Http\Client\Exception) {
            $message = 'Could not contact Sendcloud API.';
            $code = self::CODE_CONNECTION_FAILED;
        }

        throw new self($message, $code, $exception);
    }
}
