<?php

declare(strict_types=1);

namespace Test\AlexisPPLIN\SendcloudV3;

use AlexisPPLIN\SendcloudV3\Exceptions\SendcloudRequestException;
use Http\Client\Exception\HttpException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use RuntimeException;

#[CoversClass(SendcloudRequestException::class)]
class SendcloudRequestExceptionTest extends TestCase
{
    /* fromResponse */

    public function testFromResponse200() : void
    {
        // -- Arrange

        $response = $this->createMock(ResponseInterface::class);
        $response->method('getStatusCode')
            ->willReturn(200);

        // -- Act

        $this->expectNotToPerformAssertions();
        SendcloudRequestException::fromResponse($response);
    }

    public function testFromResponse401() : void
    {
        // -- Arrange

        $json = <<<JSON
        {
            "errors": [
                {
                    "detail": "Invalid username/password.",
                    "status": "401",
                    "source": {
                        "pointer": "/data"
                    },
                    "code": "authentication_failed"
                }
            ]
        }
        JSON;

        $response = $this->createMock(ResponseInterface::class);
        $response->method('getStatusCode')
            ->willReturn(401);

        $stream = $this->createMock(StreamInterface::class);
        $stream->method('getContents')
            ->willReturn($json);

        $response->method('getBody')
            ->willReturn($stream);

        $expected = new SendcloudRequestException(
            message: 'Invalid username/password.',
            code: SendcloudRequestException::CODE_AUTHENTIFICATION_FAILED,
            sendcloudCode: 'authentication_failed',
            sendcloudSource: ['pointer' => '/data']
        );

        // -- Act & Assert

        $this->expectExceptionObject($expected);
        SendcloudRequestException::fromResponse($response);
    }

    public function testFromResponse400() : void
    {
        // -- Arrange

        $json = <<<JSON
        {
            "errors": [
                {
                    "detail": "String should have at least 3 characters",
                    "status": "400",
                    "source": {
                        "pointer": "/data/attributes/[0]/order_details/order_items/0/total_price/currency"
                    },
                    "code": "invalid"
                }
            ]
        }
        JSON;

        $response = $this->createMock(ResponseInterface::class);
        $response->method('getStatusCode')
            ->willReturn(400);

        $stream = $this->createMock(StreamInterface::class);
        $stream->method('getContents')
            ->willReturn($json);

        $response->method('getBody')
            ->willReturn($stream);

        $expected = new SendcloudRequestException(
            message: 'String should have at least 3 characters',
            code: SendcloudRequestException::CODE_INVALID,
            sendcloudCode: 'invalid',
            sendcloudSource: ['pointer' => '/data/attributes/[0]/order_details/order_items/0/total_price/currency']
        );

        // -- Act & Assert

        $this->expectExceptionObject($expected);
        SendcloudRequestException::fromResponse($response);
    }

    public function testFromResponseHttpOrRuntimeException() : void
    {
        // -- Arrange

        $response = $this->createMock(ResponseInterface::class);
        $response->method('getStatusCode')
            ->willReturn(400);

        $response->method('getBody')
            ->willThrowException(new RuntimeException());
            
        $expected = new SendcloudRequestException(
            code: SendcloudRequestException::CODE_UNKNOWN
        );

        // -- Act & Assert

        $this->expectExceptionObject($expected);
        SendcloudRequestException::fromResponse($response);
    }

    /* fromException */

    public function testFromExceptionSelf() : void
    {
        // -- Arrange

        $exception = new SendcloudRequestException();

        // -- Act & Assert

        $this->expectExceptionObject($exception);
        SendcloudRequestException::fromException($exception);
    }

    public function testFromExceptionHttpClient() : void
    {
        // -- Arrange

        $exception = $this->createMock(\Http\Client\Exception::class);
        $expected = new SendcloudRequestException(
            message: 'Could not contact Sendcloud API.',
            code: SendcloudRequestException::CODE_CONNECTION_FAILED
        );

        // -- Act & Assert

        $this->expectExceptionObject($expected);
        SendcloudRequestException::fromException($exception);
    }
}