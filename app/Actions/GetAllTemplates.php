<?php

namespace App\Actions;

use App\Models\Template;
use Illuminate\Database\Eloquent\Collection;

class GetAllTemplates extends Action
{

    /**
     * @return Collection<Template>
     */
    public function handle(): Collection
    {
        return Template::query()
            ->where('user_id', auth()->id())
            ->get();
    }

    public static function run(...$arguments)
    {
        return parent::run($arguments);
    }
}
