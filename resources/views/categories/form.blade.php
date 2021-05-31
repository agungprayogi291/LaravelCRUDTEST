<label>name category</label>
<input type="text" name="name" value="{{old('name') ?? $category->name}}">
<br>
<button type="submit">{{$title ?? 'submit'}}</button>