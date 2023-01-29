<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapXmlController extends Controller
{
    public function index() {
        return response()->view('sitemap_xml.index', [
            'pages' => [
                [
                    'name' => 'Huggy: a plataforma completa de Atendimento Digital',
                    'route_name' => 'index',
                    'last_mod' => '2022-01-29T10:10:10',
                    'priority' => '1.0',
                    'change_freq' => 'monthly'
                ],
            ]
        ])->header('Content-Type', 'text/xml');
    }
}
