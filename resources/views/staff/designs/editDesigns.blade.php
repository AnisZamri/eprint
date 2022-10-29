<x-app-layout> 
 
 
     <x-slot name="header"> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> 
            {{ __('Edit Design') }} 
             
        </h2> 
     </x-slot> 
 
     <div class="py-12"> 
     <div class="container"> 
     <div class="row"> 
 
      
 
    <div class="col-md-8"> 
    <div class="card"> 
          <div class="card-header">Edit designs</div> 
         <div class="card-body"> 
    
    <form action="{{url('designs/update/'.$design->id)}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="oldImage" value="{{$design->designImage}}">
        @csrf 

  
     <div class="mb-3"> 
     <label for="productName" class="form-label">Design Image</label> 
      <input type="file" name="designImage" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$design->designImage}}"> 

      @error('designImage') 
        <span class="text-danger">{{$message}}</span> 
      @enderror 
        </div> 

        <div class="form-group">
            <img src="{{asset($design->designImage)}}" style="width:400px;height:200"> 
        </div>

        <div class="form-group"> 
            <label for="exampleInputPassword1" class="form-label">Design Type</label> 
            <input type="text" name="designType" class="form-control" id="exampleInputPassword1" value="{{$design->designType}}"> 
        
            @error('designType') 
                <span class="text-danger">{{$message}}</span> 
            @enderror 
        </div> 

        <div class="form-group"> 
            <label for="exampleInputPassword1" class="form-label">Design Title</label> 
            <input type="text" name="designTitle" class="form-control" id="exampleInputPassword1" value="{{$design->designTitle}}"> 
        </div> 
        
        <div class="form-group"> 
            <label for="exampleInputPassword1" class="form-label">Design Desc</label> 
            <input type="text" name="designDesc" class="form-control" id="exampleInputPassword1" value="{{$design->designDesc}}"> 
        </div> 
        
        
        
        <button type="submit" class="btn btn-primary ">Update Design</button> 
    </form> 
 
</div> 
     </div> 
    </div> 
 
          </div> 
    </div> 
</x-app-layout>