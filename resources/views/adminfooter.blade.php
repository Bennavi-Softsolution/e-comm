@extends('layouts.welcome')

@section('adminfooter')

<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>company</h4>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">contacts</a></li>
  	 				<li><a href="#">blogs</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>legal</h4>
  	 			<ul>
  	 				<li><a href="#">Terms and condition</a></li>
  	 				<li><a href="#">privacy and policy</a></li>
  	 			</ul>
  	 		</div>

  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
				   	<a href="#"><i class="bi bi-facebook"></i></a>
  	 				<a href="#"><i class="bi bi-twitter-x"></i></a>
  	 				<a href="#"><i class="bi bi-instagram"></i></a>
  	 				<a href="#"><i class="bi bi-linkedin"></i></a>
  	 			</div>

            <div class="footer-col">
  	 			<h4>payment method</h4>
				<div class="payment-links">
    				<img src="{{ asset('images/m-pesa-logo.png') }}" alt="M-Pesa Logo" class="icon-size icon-spacing">
    				<img src="{{ asset('images/mastercard-logo.png') }}" alt="MasterCard Logo" class="icon-size icon-spacing">
    				<img src="{{ asset('images/visa-logo.png') }}" alt="VISA Logo" class="icon-size icon-spacing">
				</div>

                	 
  	 		    </div>    
  	 		</div>
  	 	</div>
  	 </div>
  </footer>

@endsection
