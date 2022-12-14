<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | DiepviShop</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 0123456789</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> diepvi@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/vi.diep.54584"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{URL::to('/trang-chu')}}"><img src="{{URL::to('public/frontend/images/logo.png')}}" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							
								<li><a href="#"><i class="fa fa-star"></i> Y??u th??ch</a></li>
								<?php
									$customer_id = Session::get('customer_id');
									$shipping_id = Session::get('shipping_id');
									if($customer_id!=NULL && $shipping_id==Null){
										
									
								?>
								<li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh to??n</a></li>
								<?php
									}elseif($customer_id!=Null && $shipping_id!=Null){

								?>
								<li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Thanh to??n</a></li>
								<?php
									}else{ 	?>
								<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i> Thanh to??n</a></li>
										<?php }?>
								

								<li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Gi??? h??ng</a></li>
								<?php
									$customer_id = Session::get('customer_id');
									$customer_name=Session::get('customer_name');
									if($customer_id!=NULL){
										
									
								?>
								
								
								<li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> {{$customer_name}} (????ng xu???t) </a></li>
								
								<?php
									}else{ 	?>
								<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> ????ng nh???p</a></li>
										<?php }?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('/trang-chu')}}" class="active">Trang ch???</a></li>
								<li><a href="#">S???n ph???m<i></i></a>
                                    <!-- <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="{{URL::to('/show-cart')}}">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul> -->
                                </li> 
								<li class="dropdown"><a href="#">Tin t???c<i class="fa fa-angle-down"></i></a>
									
                                    <ul role="menu" class="sub-menu">
										@foreach ($post as $key =>$all_post)
                                       	 <li><a href="{{URL::to('/danh-muc-bai-viet/'.$all_post->category_post_id)}}">{{$all_post->category_post_name}}</a></li>
										@endforeach
                                    </ul>
									
                                </li> 
								<li><a href="{{URL::to('/show-cart')}}">Gi??? h??ng</a></li>
								<!-- <li><a href="contact-us.html">Li??n h???</a></li> -->
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<form autocomplete="off" action="{{URL::to('/tim-kiem')}}" method="post">
							{{csrf_field()}}
							<div class="search_box pull-right">
								<input type="text" id="keywords" name="keywords" placeholder="T??m ki???m s???n ph???m"/>
								<div id="search-ajax"></div>
								<input type="submit" style="" name="search_item" class="btn btn-info btn-sm" value="T??m ki???m "/>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<?php
								$i=0;
							?>
							@foreach($slider as $key =>$slide)
							<?php $i++; ?>
							<div class="item {{$i==1? 'active':''}}">
								
								<div class="col-sm-12">
								<img src="public/uploads/slider/{{$slide->slider_image}}" alt=""  class="img img-responsive">
								
								</div>
							</div>
							
							
							@endforeach
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh m???c s???n ph???m</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							@foreach($category_product as $key =>$category)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$category->category_id)}}">{{$category->category_name}}</a></h4>
								</div>
								
							</div>
							@endforeach
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Th????ng hi???u s???n ph???m</h2>
							@foreach($brand_product as $key => $brand)
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}"> <span class="pull-right"></span>{{$brand->brand_name}}</a></li>
								</ul>
							</div>
							@endforeach
						</div><!--/brands_products-->
						
						
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">

					@yield('content')

					
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>D???ch V???</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Gi??p ????? tr???c tuy???n</a></li>
								<li><a href="#">Li??n h???</a></li>
								<li><a href="#">T??nh tr???ng ????n h??ng</a></li>
								<li><a href="#">Thay ?????i v??? tr??</a></li>
							
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">??o</a></li>
								<li><a href="#">Qu???n</a></li>
								<li><a href="#">Ba l??</a></li>
								<li><a href="#">V?? v?? t??i</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Ch??nh s??ch an ninh</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">??i???u kho???n s??? d???ng</a></li>
								<li><a href="#">Ch??nh s??ch t?? nh??n</a></li>
								<li><a href="#">Ch??nh s??ch ho??n tr???</a></li>
								<li><a href="#">H??? th???ng thanh to??n</a></li>
						
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>V??? ng?????i mua</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Th??ng tin shop </a></li>
								<li><a href="#">S??? nghi???p</a></li>
								<li><a href="#">V??? tr?? c???a h??ng</a></li>
								<li><a href="#">Ch????ng tr??nh li??n k???t</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Li??n h???</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Email c???a b???n" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Nh???n c??c b???n c???p nh???t g???n ????y nh???t t??? ??????trang web c???a ch??ng t??i v?? ???????c c???p nh???t ch??nh b???n ...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright ?? 2022 DiepviShop.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="https://www.facebook.com/vi.diep.54584">Di???p V??</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
   
	<script src="{{asset('public/frontend/js/main.js')}}"></script>
	<script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
	<script type="text/javascript">
		
		$('#keywords').keyup(function(){
			var query =$(this).val();
			
			if(query!=''){
				var _token = $('input[name="_token"]').val();
				$.ajax({
					url: '{{url('/autocomplete-ajax')}}',
                    method: 'POST',
					data:{query:query,_token:_token},
					success:function(data){
						$('#search-ajax').fadeIn();
						$('#search-ajax').html(data);

					}
				});
			}
			else{
				$('#search-ajax').fadeOut();
			}
		});
		$(document).on('click','.li_search_ajax',function(){
			$('#keywords').val($(this).text());
			$('#search-ajax').fadeOut();
		});
			
				
			 

				
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.add-to-cart').click(function(){
				var id=$(this).data('id_product');
				var product_id_hidden =$('.cart_product_id_'+id).val();
				// var cart_product_name =$('.cart_product_name_'+id).val();
				// var cart_product_image =$('.cart_product_image_'+id).val();
				// var cart_product_price =$('.cart_product_price_'+id).val();
				var qty =$('.cart_product_qty_'+id).val();
			
				var _token = $('input[name="_token"]').val();
			 

				$.ajax({
					url: '{{url('/save-cart')}}',
                    method: 'POST',
					data:{product_id_hidden:product_id_hidden,qty:qty,_token:_token},
					success:function(data){
						swal({
                                title: "???? th??m s???n ph???m v??o gi??? h??ng",
                                text: "B???n c?? th??? mua h??ng ti???p ho???c t???i gi??? h??ng ????? ti???n h??nh thanh to??n",
                                showCancelButton: true,
                                cancelButtonText: "Xem ti???p",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "??i ?????n gi??? h??ng",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "{{url('/show-cart')}}";
                            });

					}
				});
			});
		});
	</script>
	
		<!-- Messenger Plugin chat Code -->
		<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "111032414943733");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
	FB.init({
	  xfbml            : true,
	  version          : 'v13.0'
	});
  };

  (function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
	fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

</body>
</html>