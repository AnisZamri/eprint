<x-app-layout> 
 
 
     <x-slot name="header"> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> 
            {{ __('Design') }} 
             
        </h2> 
     </x-slot> 
 
     <div class="py-12"> 
        </div> 
 
     <div class="container"> 
         <div class="row"> 
 
         <div class="col-md-8"> 
            <div class="card"> 

            @if (session('success'))

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong> 
 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

            <div class="card-header">All Category </div> 
       
         <table class="table"> 
  <thead> 
    <tr> 
      <th scope="col">No</th> 
      <th scope="col">Image</th> 
      <th scope="col">Type</th> 
      <th scope="col">Title</th> 
      <th scope="col">Desc</th> 
      <th scope="col">Action</th> 
 
 
    </tr> 
  </thead> 
 
  <tbody> 

  @foreach($designs as $designs) 
  <tr> 
      <td>{{$designs->id}}</td> 
      <td><img src="{{asset($designs->designImage)}}" style="height:40px;"></td> 
      <td>{{$designs->designType}}</td> 
      <td>{{$designs->designTitle}}</td> 
      <td>{{$designs->designDesc}}</td> 
      <td> 
        <a href="{{url('designs/edit/'.$designs->id)}}"class="btn btn-info">Edit</a> 
        <a href="{{url('designs/delete/'.$designs->id)}}"onclick="return confirm ('Are you sure to delete?')" class="btn btn-danger">Delete</a> 
 

      </td> 
     
    </tr> 
    @endforeach 

     
  </tbody> 
</table> 
    </div> 
        </div> 
 
    <div class="col-md-4"> 
    <div class="card"> 
          <div class="card-header">Add Design </div> 
         <div class="card-body"> 
    
    <form action="{{route('addDesigns')}}" method="POST" enctype="multipart/form-data"> 
        @csrf 
  
   <div class="mb-3"> 
    <label for="productName" class="form-label">Design Image</label> 
    <input type="file" name="designImage" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
     
    @error('designImage') 
        <span class="text-danger">{{$message}}</span> 
    @enderror 
</div> 
 
  <div class="mb-3"> 
    <label for="exampleInputPassword1" class="form-label">Design Type</label> 
    <input type="text" name="designType" class="form-control" id="exampleInputPassword1"> 
  </div> 
 
  <div class="mb-3"> 
    <label for="exampleInputPassword1" class="form-label">Design Title</label> 
    <input type="text" name="designTitle" class="form-control" id="exampleInputPassword1"> 
  </div> 
 
  <div class="mb-3"> 
    <label for="exampleInputPassword1" class="form-label">Design Desc</label> 
    <input type="text" name="designDesc" class="form-control" id="exampleInputPassword1"> 
  </div> 
 
  
   <button type="submit" class="btn btn-primary ">Add Design</button> 
</form> 
 
</div> 
     </div> 
    </div> 
 
          </div> 
    </div> 
</x-app-layout>