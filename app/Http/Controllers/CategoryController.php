<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //return fiel index 
    public function index()
    {
    	$categories = Category::latest()->simplePaginate(10);
    	return view('categories.index',compact('categories'));
    }
    //create category
    public function create()
    {
    	return view('categories.create',['category' => new Category() ]);
    }

    //save new category
    public function store(Request $request,Category $category)
    {
    	$data = $request->validate([
    		'name' =>'required',
    	]);
    	$data['is_publish'] = true;
    	$category->create($data);
    	return redirect('/');
    }
    //edit category
    public function edit(Category $category)
    {
    	return view('categories.edit',compact('category'),['title'=>'update']);
    }

    //update category
    public function update(Request $request,Category $category)
    {
    	$data = $request->validate([
    		'name' => 'required',
    	]);
    	$category->update($data);
    	return redirect('/');
    }

    //delet item category
    public function destroy(Category $category)
    {
    	$status = $category->delete();
    	return redirect('/');
    }

}
