@extends('staff.staffMaster')

@section('staff')
<x-app-layout> 
 
 
     <x-slot name="header"> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> 
            {{ __('SubProduct') }} 
             
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
      <th scope="col"> Product Type</th> 
      <th scope="col">Product Sticker</th> 
      <th scope="col">Product Banner</th> 
      <th scope="col">Product Banting</th> 
   
 
 
    </tr> 
  </thead> 
 
  <tbody> 
    @foreach($subproduct as $sub) 
  <tr> 
      <td>{{$sub->id}}</td> 
      <td>{{$sub['product']['productName']}}</td> 
      <td>{{$sub->subProductSticker}}</td> 
      <td>{{$sub->subProductBanner}}</td> 
      <td>{{$sub->subProductBanting}}</td> 
      <td> 

        <a href="{{url('sub/edit/'.$sub->id)}}"class="btn btn-info">Edit</a> 
        <a href="{{url('sub/delete/'.$sub->id)}}"class="btn btn-danger">Delete</a> 

      </td> 
 
 
    </tr> 
    @endforeach 
     
  </tbody> 
</table> 
    </div> 
        </div> 
 
    
</div> 
     </div> 
    </div> 
 
          </div> 
    </div> 

    
</x-app-layout>

@endsection