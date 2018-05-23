<?php

namespace App\Http\Controllers;

class NavigationController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function toToPropertyList()
    {
        return view('property-listings');
    }

    public function toToPropertySingle()
    {
        return view('property-single');
    }

    public function toAgents()
    {
        return view('agents');
    }

    public function toAgentSingle()
    {
        return view('agent-single');
    }

    public function toContact()
    {
        return view('contact-us');
    }
}