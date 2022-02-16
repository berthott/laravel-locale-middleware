<?php

namespace berthott\LocaleMiddleware\Tests\Feature;

use berthott\LocaleMiddleware\Tests\TestCase;

class LocaleTest extends TestCase
{
    public function test_locale_get(): void
    {
        $this->assertEquals('en', app()->getLocale());
        $this->get(route('get', ['locale' => 'de']));
        $this->assertEquals('de', app()->getLocale());
    }

    public function test_locale_post(): void
    {
        $this->assertEquals('en', app()->getLocale());
        $this->post(route('post', ['locale' => 'de']));
        $this->assertEquals('de', app()->getLocale());
    }

    public function test_locale_put(): void
    {
        $this->assertEquals('en', app()->getLocale());
        $this->put(route('put', ['locale' => 'de']));
        $this->assertEquals('de', app()->getLocale());
    }

    public function test_locale_delete(): void
    {
        $this->assertEquals('en', app()->getLocale());
        $this->delete(route('delete', ['locale' => 'de']));
        $this->assertEquals('de', app()->getLocale());
    }
}
