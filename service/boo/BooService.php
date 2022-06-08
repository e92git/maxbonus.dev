<?php
namespace Foo;

class BooService {

    public function __construct(
    )
    {}

    public function echoEmail(string $email): string
    {
        return "hello ". $email;
    }
}