@extends ('frontend.main_master')
@section('content')

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
    
 


    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
   

    <style>
  div.dataTables_wrapper {
              margin-bottom: 3em;
          }

        </style>
</head>

<body>


    <table id="" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Product Image</th>
                <th>Product Category</th>
                <th>Action</th>
            
            </tr>
        </thead>
        <tbody>
        @foreach($products as $products) 

            <tr>
                <td>{{$products->id}}</td>
                <td><img src="{{asset($products->productImage)}}" style="height:40px;"></td>
                <td>{{$products->productCategory}}</td>
                <td>
                  <a href=" {{ route('editProduct', $products->id ) }}"class="btn btn-primary">Edit</a> 
                  <a href="{{url('products/delete/'.$products->id)}}"class="btn btn-danger">Delete</a> 
                </td>
            </tr>
       
           @endforeach
        </tbody>
       
    </table>

 
<script>
$(document).ready(function () {
    $('table.display').DataTable();
});</script>

 
</body>
</html>



@endsection