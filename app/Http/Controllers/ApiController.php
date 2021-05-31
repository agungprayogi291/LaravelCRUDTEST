namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class ApiController extends Controller
{
  Public function getData()
{
  $category = Category::all();
  Return response()->json([]
}

}
