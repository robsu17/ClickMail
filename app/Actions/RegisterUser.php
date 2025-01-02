<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class RegisterUser extends Action
{
    /**
     * @param string|null $name
     * @param string|null $email
     * @param string|null $password
     * @return User
     */
    public function handle(
        ?string $name = null,
        ?string $email = null,
        ?string $password = null,
    ): User
    {
        return DB::transaction(function () use ($name, $email, $password) {
            return User::query()->create([
                'name' => $name,
                'email' => $email,
                'password' => $password
            ]);
        });
    }

    /**
     * @see static::handle()
     */
    public static function run(...$arguments)
    {
        return (new self())->handle(...$arguments);
    }
}
