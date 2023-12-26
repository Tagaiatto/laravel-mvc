<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = ['One Piece', 'Vox Machina', 'Castlevania'];

        $html = '<ul>';
        foreach($series as $serie)
        {
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>';
        return $html;
    }
}
