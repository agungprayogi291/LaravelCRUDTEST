<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<div class="category">
		<a href="/create">new Category</a>
		<table>	
           <thead>
           		<tr>
           			<th>Name</th>
           			<th>Action</th>
           		</tr>
           </thead>	
           <tbody>
           	@foreach($categories as $category)
           	    <tr>
           	    	<td>{{$category->name}}</td>
           	    	<td>
           	    		<a href="/{{$category->id}}/edit" style="color:lightblue">edit</a>
           	    		<a href="/{{$category->id}}/remove" style="color:red">delete</a>
           	    	</td>
           	    </tr>
           	@endforeach
           </tbody>
		</table>
		{{$categories->links()}}
	</div>

</body>
</html>