<?php

namespace App\Actions;

use App\Actions\Action;
use App\Models\Template;
use Illuminate\Support\Facades\DB;

class StoreTemplate extends Action
{
    /**
     * @param string|null $name
     * @param string|null $html
     * @return Template
     */
    public function handle(string $name = null, string $html = null)
    {
        return DB::transaction(function () use ($name, $html) {
            return Template::query()->create([
                'name' => $name,
                'html' => $html,
                'user_id' => auth()->user()->id
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
