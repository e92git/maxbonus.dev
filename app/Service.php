<?php
namespace App;

use Foo\BooService;
use Foo\FooRepository;
use Foo\FooService;

class Service
{
    static function getFooService(): FooService
    {
        return new FooService(
            self::getFooRepository(),
            self::getBooService()
        );
    }

    static function getBooService(): BooService
    {
        return new BooService();
    }

    static function getFooRepository(): FooRepository
    {
        return new FooRepository(
            new Db()
        );
    }
}