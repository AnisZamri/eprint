 
@foreach($subproduct as $subproduct)
                                   
                                   <tr>
                                       <td class="cart__product__item">
                                           <img src="{{asset($subproduct->subProductImage)}}" style="height:80px;">
                                       </td>
                                       <td class="cart__product__item">
                                           <div class="cart__product__item__title">
                                               <h6>{{$subproduct->subProductName}}</h6>
                                               <div class="rating">
                                                   <i class="fa fa-star"></i>
                                                   <i class="fa fa-star"></i>
                                                   <i class="fa fa-star"></i>
                                                   <i class="fa fa-star"></i>
                                                   <i class="fa fa-star"></i>
                                               </div>
                                           </div>
                                       </td>
                                       <td class="cart__price">RM{{$subproduct->subProductPrice}}</td>
                                       <td class="cart__quantity">
                                           <div class="pro-qty">
                                               <input type="text" value="1">
                                           </div>
                                       </td>
                                       <td class="cart__total">$ 300.0</td>
                                       <td class="cart__close"><span class="icon_close"></span></td>
                                   </tr>
                                  
                               @endforeach
                               @section('scripts')
<script type="text/javascript">
   
    $(".cart_update").change(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
   
    $(".cart_remove").click(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        if(confirm("Do you really want to remove?")) {
            $.ajax({
                url: '{{ route('remove_from_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
   
</script>