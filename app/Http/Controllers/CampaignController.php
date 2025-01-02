<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index()
    {
        return view('pages.campaign.index');
    }

    public function create()
    {
        return view('pages.campaign.create');
    }
}
