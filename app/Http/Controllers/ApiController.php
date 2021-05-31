namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class ApiController extends Controller
{
$successStatus =201;
  Public function getData()
  {
     $category = Category::all();
     return response()->json(['success' => $category], $this->successStatus);
  }
  Public function createData(Request $request,Category $category)
  {
   $data = $request->all();
   $data['is_publish'] = true;
   $category->create($data);
   return response()->json(['success'] => $data], $this->successStatus);

   
  }
  Public function destroy(Category $category)
  {
   $data = $category->delete();
    return response()->json(['success'=> $data], $this->successStatus);
  }

}
