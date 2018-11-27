<!DOCTYPE html>
<html lang="en">
<head>
<title>Cart</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="fontend/styles/bootstrap4/bootstrap.min.css">
<link href="fontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="fontend/styles/cart_styles.css">
<link rel="stylesheet" type="text/css" href="fontend/styles/cart_responsive.css">

</head>

<body>
@extends('lib.master3')
@section('content')
	<!-- Cart -->

	<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 offset-lg-1">
					<div class="cart_container">
						<div class="cart_title">Spec</div>
						<div class="cart_items">
							<ul class="cart_list">
                            <table class="table" >
                            <thead>
                                <tr>
                                     <th style="text-align: center;">รูปภาพ</th>
                                     <th style="text-align: center;">ชื่อสินค้า</th>
                                     <th style="text-align: center;">สี</th>
                                     <th style="text-align: center;">ราคา</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                         <td style="text-align: center;"><img src="images/rod_1.jpg" alt="" width="100"></td>
                                         <td style="padding-top: 50px; text-align: center;">Ryujin Forrest</td>
                                        <td style="padding-top: 50px; text-align: center;">ฟ้า</td>
                                        <td style="padding-top: 50px; text-align: center;">1500</td>
                                    </tr>
                                    <tr>
                                         <td style="text-align: center;"><img src="images/reel_1.jpg" alt="" width="100"></td>
                                        <td style="padding-top: 50px; text-align: center;">YUMOSHI</td>
                                        <td style="padding-top: 50px; text-align: center;">แดง</td>
                                        <td style="padding-top: 50px; text-align: center;">2800</td>
                                    </tr>
                                    <tr>
                                         <td style="text-align: center;"><img src="images/line_1.jpg" alt="" width="100"></td>
                                        <td style="padding-top: 50px; text-align: center;">JOF</td>
                                        <td style="padding-top: 50px; text-align: center;">เขียว</td>
                                        <td style="padding-top: 50px; text-align: center;">250</td>
                                    </tr>
                                    <tr>
                                         <td style="text-align: center;"><img src="images/hook_1.jpg" alt="" width="100"></td>
                                        <td style="padding-top: 50px; text-align: center;">Proberos</td>
                                        <td style="padding-top: 50px; text-align: center;">เงิน</td>
                                        <td style="padding-top: 50px; text-align: center;">50</td>
                                    </tr>                          
                            </tbody>
                        </table>
							</ul>
						</div>
						
						<!-- Order Total -->
						<div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title">ราคา รวม:</div>
								<div class="order_total_amount">4600</div>
							</div>
						</div>

						<div class="cart_buttons">
							<button type="button" class="button cart_button_checkout">SAVE</button>
						</div>
					</div>
				</div>

                <div class="col-lg-3 offset-lg-1">
					<div class="cart_container"><br/><br/>
						<div class="cart_items">
							<ul class="cart_list">
                            <table class="table" >

                            <tbody>
                                    <tr>
                                        <td style="padding-top: 20px; text-align: center;">รูปแบบ : Casting</td>                        
                                    </tr>
                                    <tr>
                                        <td style="padding-top: 20px; text-align: center;">ประเภทการใช้งาน : ตีเหยื่อปลอม</td>                        
                                    </tr>
                                    <tr>
                                        <td style="padding-top: 20px; text-align: center;">รับน้ำหนักปลาได้สูงสุด : 20 kg.</td>                        
                                    </tr>
                        </table>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Newsletter -->


@stop

<script src="fontend/js/jquery-3.3.1.min.js"></script>
<script src="fontend/styles/bootstrap4/popper.js"></script>
<script src="fontend/styles/bootstrap4/bootstrap.min.js"></script>
<script src="fontend/plugins/greensock/TweenMax.min.js"></script>
<script src="fontend/plugins/greensock/TimelineMax.min.js"></script>
<script src="fontend/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="fontend/plugins/greensock/animation.gsap.min.js"></script>
<script src="fontend/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="fontend/plugins/easing/easing.js"></script>
<script src="fontend/js/cart_custom.js"></script>
</body>

</html>