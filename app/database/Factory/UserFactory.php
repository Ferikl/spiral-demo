<?php

declare(strict_types=1);

namespace Database\Factory;

use App\Domain\User\Entity\User;
use Spiral\DatabaseSeeder\Factory\AbstractFactory;

class UserFactory extends AbstractFactory
{
    public function entity(): string
    {
        return User::class;
    }

    public function definition(): array
    {
        return [
            'username' => $this->faker->userName,
        ];
    }

    public function makeEntity(array $definition): object
    {
        return new User($definition['username']);
    }
}
