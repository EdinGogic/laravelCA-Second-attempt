@extends('layouts.trending')
@section('content')
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
			
			
			<form method="post" action="/trending" enctype="multipart/form-data">
			{{csrf_field()}}
              <h6 class="w3-opacity">What's on your mind?</h6>			 
              <p contenteditable="true" input name='post' type='text' id="postid" class="w3-border w3-padding">Coronavirus is driving me insane!</p>
              <button type="submit" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button> 
			  </form>
            </div>
          </div>
        </div>
      </div>
      
@endsection