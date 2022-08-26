@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <table class="table">                
                <tbody>
                  <tr>
                    <td>Amount</td>
                    <td>$ {{$total}}</td>
                  </tr>
                  <tr>
                    <td>Tax</td>
                    <td>$ 0</td>                    
                  </tr>
                  <tr>
                    <td>Delivery Charge</td>
                    <td>$ 10</td>
                  </tr>
                  <tr>
                    <td>Total</td>
                    <td>$ {{$total+10}}</td>
                  </tr>
                </tbody>
              </table>
              <div>
                <form action="/orderplace" method="POST">
                  @csrf
                    <div class="form-group">
                      <label for="address">Your address:</label>
                      <textarea name="address" placeholder="enter your address" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="pwd">Payment Method:</label><br><br>
                      <input type="radio" value="cash" name="payment"> <span>Online Payment</span><br><br>
                      <input type="radio" value="cash" name="payment"> <span>EMI Payment</span><br><br>
                      <input type="radio" value="cash" name="payment"> <span>Cash on delivery</span><br><br>
                    </div>        
                    <button type="submit" class="btn btn-success">OrderNow</button><br><br>
                  </form>
              </div>
        </div>
</div>
@endsection