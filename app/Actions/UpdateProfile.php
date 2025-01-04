<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UpdateProfile extends Action
{

    /**
     * @param string|null $name
     * @param int|null $id
     * @return User
     */
    public function handle(string $name = null, int $id = null): User
    {
        return DB::transaction(function () use ($name, $id) {
            $user = User::query()
                ->find($id);

            $user->update(['name' => $name]);

            return $user;
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
