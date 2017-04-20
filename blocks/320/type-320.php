<div class="type-320">
    <div class="container">
        <div class="row">   
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th style="width:10%"></th>
                        <th style="width:50%">Product</th>
                        <th style="width:15%">Price</th>
                        <th style="width:10% ">Quantity</th>
                        <th style="width:25%" class="text-center">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-th="remove"><a class="remove" href="#">x</a></td>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-2 hidden-xs">
                                    <img src="images/1.png" alt="..." class="img-responsive"/>
                                </div>
                                <div class="col-sm-10 title">
                                    <p><a href="#">Red Sport T-Shirt</a></p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price" ><div class="price">£35.00</div></td>
                        <td data-th="Quantity">
                            <input type="number" class="form-control text-center" value="1">
                        </td>
                        <td data-th="Total" ><div class="price1">£35.00</div></td>

                    </tr>
                </tbody>


                <tfoot>                  
                    <tr>
                        <td>
                            <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code">
                        </td>
                        <td>
                            <div class="cart">            
                                <button type="button" class="btn btn-danger">APPLY COUPON</button>
                            </div>
                        </td>
                        <td colspan="2" class="hidden-xs"></td>

                        <td>
                            <button type="button" class="btn btn-danger update">UPDATE CART</button>
                        </td>
                    </tr>
                </tfoot>



            </table> 
            <div class="clearfix"></div>
            <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6 margin">
                <h2>Cart totals</h2> 
                <table cellspacing="0" class="table table-hover table-condensed tab">
                    <tbody>
                        <tr class="cart-subtotal">
                            <th class="sub">Subtotal</th>
                            <td data-title="Subtotal">
                                <div class="price">£35.00</div>
                            </td>
                        </tr>
                        <tr class="order-total">
                            <th>Total</th>
                            <td data-title="Total">
                                <div class="price bold">£35.00</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-danger proc">PROCCED TO CHECKOUT</button>
            </div>


        </div>
    </div>
</div>
