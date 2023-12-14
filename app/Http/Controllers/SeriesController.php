namespace App\Http\Controllers;

class SeriesController
{
    public function listarSeries()
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