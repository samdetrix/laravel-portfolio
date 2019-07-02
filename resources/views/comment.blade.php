@extends('layouts.main')
@section('content')
<hr><br><br><br><br><br><br><br>
 <div class="container">
      <form action="blog" method="POST">
  <fieldset>
    
   <div class="form-group">
    <strong><label for="exampleInputEmail1">TITLE</label></strong>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title" name="title">
    
  </div>
   
    
   
    <div class="form-group">
     <strong><label for="exampleTextarea">CONTENT</label></strong> 
      <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Place your content here" name="posts"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputFile">Attach image</label>
      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">You can attach your document to this post</small>
     <button type="submit" class="btn btn-success">Post</button>
    </div>    
  </fieldset>
  @csrf
</form>
    </div><br><br><br><br><br>
@endsection