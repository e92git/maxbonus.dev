<?php
namespace Foo;

class FooService {

    public function __construct(
        private FooRepository $fooRepository,
        private BooService $booService
    )
    {}

    /**
     * @throws \Exception
     */
    public function findByEmail(string $email): string
    {
        $user = $this->fooRepository->findByEmail($email);
        if (empty($user)) {
            throw new \Exception('Пользователь не найден!');
        }
        $boo = $this->booService->echoEmail($email);

        return <<<RESPONSE
Имя пользователя: $user->name
Boo email: $boo
RESPONSE;
    }
}