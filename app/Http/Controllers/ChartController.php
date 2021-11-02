 <?php

namespace App\Http\Controllers;
use App\Kandidat;
use App\Pemilih;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        return view ('chart.index');
    }
}
