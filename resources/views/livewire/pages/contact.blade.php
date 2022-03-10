@extends('layouts.app')
@section('content')

<div class="bg-about">
	<div class="container">
		<h1>Contact Us</h1>
		<p>Feel free to drop us a message, What can we help you with?</p>
	</div>
</div>
<div class="container">
<div class="row">
	<div class="col-12 col-lg-8 p-4">
		<div class="alerter"></div>

	</div>
	<div class="col-12 col-lg-12 p-4">
			<ul class="contact_list shadow">
								<li>
					<i class="fas fa-map-marker-alt text-primary wow fadeIn"></i>
					<div>
						<h2>Company Address:</h2>
						<p class="m-0"> {{env('ADMIN_ADDRESS')}}</p>
					</div>
				</li>
								<li>
					<i class="fas fa-comment-dots text-primary wow fadeIn"></i>
					<div>
						<h2>Phone Number:</h2>
						<p class="m-0"><a href="#" target="_blank">{{env('ADMIN_PHONE_NUMBER')}}</a></p>
					</div>
				</li>
				
				<li>
					<i class="fas fa-comment-dots text-primary wow fadeIn"></i>
					<div>
						<h2>Whatsapp Chat:</h2>
						<p class="m-0"><a href="{{env('ADMIN_WHATSAPP_LINK')}}">{{env('ADMIN_WHATSAPP_LINK')}}</a></p>
					</div>
				</li>
								<li>
					<i class="fa fa-envelope text-primary wow fadeIn"></i>
					<div>
						<h2>Company Email:</h2>
						<p class="m-0"><a href="mailto://{{env('ADMIN_EMAIL')}}">info@ {{env('APP_NAME')}} .com</a></p>
					</div>
				</li>
			</ul>
	</div>
 </div>


</div>

</div>
@endsection

@section('homeFunctions')
@include('livewire.layouts2.footer.homeJsFunctions')
@endsection
