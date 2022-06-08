<?php

namespace Foo;
use App\Db;

class FooRepository
{
    public function __construct(
        private Db $db
    )
    {}

    public function findByEmail(string $email): ?Foo
    {
        $res = $this->db->query(
            'SELECT * FROM users WHERE email=:email',
            [':email' => $email],
            Foo::class
        );
        return !empty($res) ? $res[0] : null;
    }
}