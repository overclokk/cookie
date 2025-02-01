<?php

declare(strict_types=1);

namespace Overclokk\Cookie\Tests\Unit;

use Codeception\Test\Unit;
use Overclokk\Cookie\Cookie;
use Overclokk\Cookie\Cookie_Interface;

final class CookieTest extends Unit
{
    public $cookie;

    private static string $name = 'test';

    private static string $value = 'value';

    public function testItShouldBeInstanceOfCookieInterface(): void
    {
        $this->assertInstanceOf(Cookie_Interface::class, $this->makeSut());
    }

    public function testItShouldBeReturnTrue(): void
    {
        $sut = $this->makeSut();
        $this->assertTrue($sut->set(self::$name, self::$value), "Cookie doesn't set.");
    }

    public function testForeverItShouldBeReturnTrue(): void
    {
        $sut = $this->makeSut();
        $this->assertTrue($sut->forever(self::$name, self::$value), "Cookie doesn't set.");
    }

    public function testDeleteItShouldBeReturnTrue(): void
    {
        $sut = $this->makeSut();
        $this->assertTrue($sut->delete(self::$name), "Cookie doesn't set.");
        $this->assertNull($sut->get(self::$name), 'The cookie is set');
    }

    public function testSetItShouldBeReturnTrueIfValueIsNull(): void
    {
        $sut = $this->makeSut();
        $this->assertTrue($sut->set(self::$name, null), "Cookie doesn't set.");
    }

    public function testGetItShouldBeReturnSelfValue(): void
    {
        $this->cookie = new Cookie([
            self::$name => self::$value,
        ]);
        $this->assertEquals(self::$value, $this->cookie->get(self::$name), "Cookie doesn't set.");
    }

    protected function _before(): void
    {
    }

    protected function _after(): void
    {
    }

    private function makeSut(): Cookie
    {
        return new Cookie();
    }
}
