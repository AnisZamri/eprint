@extends('staff.staffMaster')

@section('staff')


><!-- End Page Title -->

            <!-- <div class="card-header">All Order Details </div>  -->
       
         <!-- <table class="table"> 
  <thead> 
    <tr> 
      <th scope="col">No</th> 
      <th scope="col">Order Id</th> 
      <th scope="col">Order Date</th> 
      <th scope="col">Products</th> 
      <th scope="col">Order Status</th> 
      <th scope="col">Action</th> 

   
 
 
    </tr> 
  </thead> 
 
  <tbody> 
  <tr> 
      <td>1</td> 
      <td>001</td> 
      <td>10/12/2022</td> 
      <td>Sticker</td> 
      <td>Completed</td> 
      <td> 

        <a href=""class="btn btn-info">Update</a> 
        <a href=""class="btn btn-danger">Delete</a> 

      </td> 
  
    </tr> 
     
    <tr> 
      <td>2</td> 
      <td>002</td> 
      <td>10/12/2022</td> 
      <td>Business Card</td> 
      <td>Completed</td> 
      <td> 

        <a href=""class="btn btn-info">Update</a> 
        <a href=""class="btn btn-danger">Delete</a> 

      </td> 
  
    </tr>  -->
    
    <main id="main" class="main">

<div class="pagetitle">
  <h1>Order Details</h1>
 
</div>

  <div class="container">
  <div class="row">
    <div style="background-color: #fffff"
>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col"  type="checkbox"></th>
            <th scope="col">Order Id</th>
            <th scope="col">Order Date	</th>
            <th scope="col">Products</th>
            <th scope="col">Order Status</th>
            <th scope="col">Actions</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                  <label class="custom-control-label" for="customCheck1"></label>
              </div>
            </td>
            <td>0001</td>
            <td>10/12/2022</td>
            <td>Sticker</td>
            <td>Completed</td>
            <td> 

<a href=""class="btn btn-info">Update</a> 
<a href=""class="btn btn-danger">Delete</a> 

</td> 
          </tr>

          <tr>
            <td>
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                  <label class="custom-control-label" for="customCheck1"></label>
              </div>
            </td>
            <td>0002</td>
            <td>4/12/2022</td>
            <td>Business Card</td>
            <td>Designing</td>
            <td> 

<a href=""class="btn btn-info">Update</a> 

</td> 
          </tr>
          
        </tbody>
      </table>
    </div>
  </div>
</div>