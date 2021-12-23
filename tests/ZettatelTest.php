<?php

declare(strict_types=1);
use Gkimani\ZettatelPhpSdk\Zettatel;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Uri;
use PHPUnit\Framework\TestCase;

/**
 * @covers \stack
 *
 * @uses \Zettatel
 */
final class ZettatelTest extends TestCase
{
    private $stack;

    public static function setUpBeforeClass(): void
    {
        /**
         * testCanMergeOnBaseUriWithRequest - https://github.com/guzzle/guzzle/blob/master/tests/ClientTest.php.
         */
        $mock = new MockHandler([new Response(), new Response()]);
        $client = new Client([
            'handler' => $mock,
            'base_uri' => 'https://portal.zettatel.com/SMSApi/',
        ]);
        $client->request('GET', new Uri('send'));
        self::assertSame(
            'https://portal.zettatel.com/SMSApi/send',
            (string) $mock->getLastRequest()->getUri()
        );

        $client->request('GET', new Uri('send'), ['base_uri' => 'https://portal.zettatel.com/SMSApi/']);
        self::assertSame(
            'https://portal.zettatel.com/SMSApi/send',
            (string) $mock->getLastRequest()->getUri(),
            'Can overwrite the base_uri through the request options'
        );

        fwrite(STDOUT, __METHOD__ . "\n");
    }

    public function setUp(): void
    {
        $this->stack = [$this->userId = '1', $this->password = '1', $this->apiKey = '1', $this->senderid = '1'];
        $this->client = new Zettatel($this->userId, $this->password, $this->apiKey, $this->senderid);
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    public function testEmpty(): void
    {
        if ( ! empty($this->stack)) {
            $this->stack = [];
        }

        $this->assertTrue(empty($this->stack));
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    public function testSMSClass()
    {
        $this->assertInstanceOf(\Gkimani\ZettatelPhpSdk\SMS::class, $this->client->sms());
        fwrite(STDOUT, __METHOD__ . "\n");
    }
}
