<?php

namespace App\Http\Controllers;

use App\Actions\GetAllTemplates;
use App\Actions\StoreTemplate;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTemplateRequest;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TemplatesController extends Controller
{
    public function index()
    {
        $templates = GetAllTemplates::run();
        return view('pages.templates.index', compact('templates'));
    }

    public function create()
    {
        return view('pages.templates.create');
    }

    public function store(StoreTemplateRequest $request)
    {
        $data = $request->validated();

        try {
            StoreTemplate::run(
                name: $data['name'],
                html: $data['html']
            );

            return redirect()
                ->route('templates.index')
                ->with('successStoreTemplate', 'Template criado com sucesso.');
        } catch (\Exception $exception) {
            Log::error('TemplatesController@store', [
                'error' => $exception->getMessage(),
            ]);
            return redirect()
                ->back()
                ->withErrors(['errorStoreTemplate' => 'Erro ao criar template.']);
        }
    }
}
