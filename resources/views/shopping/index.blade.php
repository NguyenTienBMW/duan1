@extends('layouts.app')
@section('content')
<div class="our-product-area new-product">
	<div class="container">
		<div class="area-title">
		   <h2>Giỏ hàng của bạn</h2>
		</div>
		<table class="table">
    <thead>
	      <tr>
	        <th>STT</th>
	        <th>Tên sản phẩm</th>
	        <th>Hình ảnh</th>
	        <th>Giá</th>
	        <th>Số lượng</th>
	        <th>Thành tiền</th>
	        <th>Thao tác</th>
	      </tr>
    </thead>
    <tbody>
    	<?php  $i = 1?>
    	@foreach($products as $key => $product)
    	 
		      <tr>
		      	<td>#{{ $i }}</td>
		        <td><a href="">{{$product->name}}</a></td>
		        <td> 
		        	<img  style="width: 80px;height: 60px"src="{{pare_url_file($product->options->avatar) }}" alt="">
		        </td>
		        <td>{{ number_format($product->price,0,',','.') }}</td>
		        <td>{{$product->qty}}</td>
                <td>{{ number_format($product->qty * $product->price,0,',','.') }} đ</td>
                <td>
                	<a href=""><i class="fa fa-pencil"> </i> Edit</a>
                	<a href="{{ route('delete.shopping.cart',$key)}}"><i class="fa fa-trash-o"> </i> Delete</a>
                </td>
		      </tr>
		      <?php $i ++ ?>
        @endforeach
    </tbody>
  </table>
 <!--  <h2>Tổng tiền cần thanh toán {{ \Cart::total() }}</h2>// co thế -->
  <h5 class="pull-right">Tổng tiền cần thanh toán {{ \Cart::subtotal() }} <a href="{{ route('get.form.pay')}}" class="btn-success btn">Thanh toán</a></h5> <!-- k có thế -->
 
	</div>
</div>

@stop