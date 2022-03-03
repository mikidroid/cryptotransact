@extends('layouts.app')
@section('content')
<div class="hero-image">
	<div class="container">
		<div class="hero-text">
			<div class="row">
				<div class="col-md-6">
					<h1>Short-term trading. It's what we do.</h1>
					<p>Join 125,000+ traders who have opened an account with {{env('APP_NAME')}}</p>
					<a href="register.html" class="btn btn-secondary">Create free account</a>
				</div>
			</div>

		</div>
		<div class="hero-image-holder">
			<img src="images/1X_Hosting_Illustration_04.png" style="width: 100%"/>
		</div>

	</div>
</div>
<div class="container pt-5">
	<div class="row">
		<div class="col-12 col-md-6 py-3">
			<div class="hero-object">
				<img src="images/icon-aroundtheclock.png" class="wow fadeIn slideInDown" />
				<div>
					<h3>Short-Term Contracts</h3>
					<p class="desc">Trading intra-day, daily or weekly provides unique opportunities.</p>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6 py-3">
			<div class="hero-object">
				<img src="images/icon-short-term-trading.png" class="wow fadeIn slideInDown" />
				<div>
					<h3>Trading Around the Clock</h3>
					<p class="desc">24 hours a day, Monday-Friday only.</p>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6 py-3">
			<div class="hero-object">
				<img src="images/icon-active-markets.png" class="wow fadeIn slideInDown" />
				<div>
					<h3>Active Markets</h3>
					<p class="desc">24 hours a day, Monday-Friday. Whenever you want to trade.</p>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6 py-3">
			<div class="hero-object">
				<img src="images/icon-defined-risk.png" class="wow fadeIn slideInDown" />
				<div>
					<h3>Risk That You Define</h3>
					<p class="desc">Know your maximum potential profit or loss up front.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="py-md-5"></div>
		<div class="section_title text-center my-5">
		<h2>How it work</h2>
		<p>Start Trading in 3 Steps</p>
	</div>
	<div class="row">
		<div class="col-lg-4">
			<div class="work_step work_first text-center">
				<div class="work_icon wow fadeIn slideInDown">
					<img src="images/icon_blue-controlled-risk.png">
				</div>
				<h2 class="mb_0">Register</h2>
				<p class="mb_0">Open Account for free in just a few minutes</p>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="work_step work_middle text-center">
				<div class="work_icon wow fadeIn slideInDown">
					<img src="images/icon_blue-active-markets-v2.png">
				</div>
				<h2 class="mb_0">Fund Your Account</h2>
				<p class="mb_0">Login to {{env('APP_NAME')}} and make your deposit to activate your trade.</p>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="work_step text-center">
				<div class="work_icon wow fadeIn slideInDown">
					<img src="images/icon_blue-short-term-contracts.png">
				</div>
				<h2 class="mb_0">Invest</h2>
				<p class="mb_0">Start getting profits to your trading account once your trade is activated.</p>
			</div>
		</div>
	</div>
</div>
	<div class="section_title text-center my-5">
		<h2>Our Trading Plans</h2>
		<p>Choose your best Trading Plan</p>
	</div>
	<!-- Section: Pricing table -->
<section id="one" class="pricing-table d-flex align-items-center blue-gradient">

<div class="container">

  <div class="row">
    <!-- Free Tier -->
    <div class="col-lg-4">
      <div class="card mb-5 mb-lg-0">
        <div class="card-body">
          <h5 class="card-title grey-text text-uppercase text-center">BASIC PLAN</h5>
          <h6 class="card-price text-center">$500 <span class="term">- $15,000</span></h6>
          <hr class="my-4">
          <ul class="fa-ul">
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Minimum Investment:     $500</li>
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Maximum Investment:     $15,000</li>
            <li><span class="fa-li"><i class="fas fa-check"></i></span>On Weekly ROI Model:     10% weekly</li>
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Profit days 5/7</li>
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Investment Duration: 3 Months</li>
            <li class="grey-text"><span class="fa-li"><i class="fas fa-times"></i></span>Referral Commission:     5%</li>
          </ul>
          <a href="login" class="btn btn-block btn-primary z-depth-0 btn-rounded my-2">Get Started</a>
        </div>
      </div>
    </div>
    <!-- Plus Tier -->
    <div class="col-lg-4">
      <div class="card mb-5 mb-lg-0">
        <div class="card-body">
          <h5 class="card-title grey-text text-uppercase text-center">VETERAN PLAN</h5>
          <h6 class="card-price text-center">$16,000<span class="term">- $30,000</span></h6>
          <hr class="my-4">
          <ul class="fa-ul">
            <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Minimum Investment:     $16,000</strong></li>
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Maximum Investment:     $30,000</li>
            <li><span class="fa-li"><i class="fas fa-check"></i></span>On Weekly ROI Model:     15% weekly</li>
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Profit days 5/7</li>
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Investment Duration: 3 Months</li>
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Referral Commission:     5%</li>
          </ul>
          <a href="login" class="btn btn-block btn-primary z-depth-0 btn-rounded my-2">Get Started</a>
        </div>
      </div>
    </div>
    <!-- Pro Tier -->
    <div class="col-lg-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title grey-text text-uppercase text-center">EXPERT PLAN</h5>
          <h6 class="card-price text-center">$31,000<span class="term">- $59,000</span></h6>
          <hr class="my-4">
          <ul class="fa-ul">
            <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Minimum Investment: $25,000	</strong></li>
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Maximum Investment: $59,000</li>
            <li><span class="fa-li"><i class="fas fa-check"></i></span>On Weekly ROI Model: 25%</li>
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Profit days 5/7</li>
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Investment Duration: 3 Months</li>
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Referral Commission: 5%</li>
          </ul>
          <a href="login" class="btn btn-block btn-primary z-depth-0 btn-rounded my-2">Get Started</a>
        </div>
      </div>
    </div>
  </div>

</div>

</section>

<!-- Section: Pricing table -->

<!-- Scrollspy -->
<div class="dotted-scrollspy">
  <ul class="nav smooth-scroll clearfix d-none d-sm-flex flex-column">
    <li class="nav-item"><a class="nav-link" href="#one"><span></span></a></li>
    <li class="nav-item"><a class="nav-link" href="#two"><span></span></a></li>
    <li class="nav-item"><a class="nav-link" href="#three"><span></span></a></li>
    <li class="nav-item"><a class="nav-link" href="#four"><span></span></a></li>
  </ul>
</div>
		</div>
	</div>
</div>
<section class="primary_section pt-md-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="section_title my-5">
					<p>Our Services</p>
					<h2>Why Choose Us</h2>
				</div>
				<ul class="icon-list">
					<li>
						<img src="images/icon_blue-binary-options.png">
						<div>
							<h3>Binary Options</h3>
							<p class="text-italic text-black-50">{{env('APP_NAME')}} Binary Options turn every trade into a simple question: will this market be above this price at this time.</p>
						</div>
					</li>
					<li>
						<img src="images/icon_orange-touch-brackets.png">
						<div>
							<h3>Knock-outs</h3>
							<p class="text-italic text-black-50">{{env('APP_NAME')}} Knock-Outs, also known as Touch Bracket™ contracts, have floor and ceiling knock-out points. This structure can maximize effective leverage and provide natural profit targets.</p>
						</div>
					</li>
					<li>
						<img src="images/icon_green-call-spreads.png">
						<div>
							<h3>Call Spreads</h3>
							<p class="text-italic text-black-50">{{env('APP_NAME')}} Call Spreads have a floor-to-ceiling trading range which offers defined risk without the need for stops, allowing time for the market to prove you right.</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-md-6 pt-5">
			<div style="border-radius: 6px; overflow: hidden; border: 1px solid #505E76;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&amp;theme=light&amp;cnt=6&amp;pref_coin_id=1505&amp;graph=yes" width="100%" height="409px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div>
				<a href="info/about.html" class="mt-3 btn btn-primary">Learn more</a>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="section_title text-center mb-3">
		<p>What Our Clients say about us</p>
		<h2>Testimony</h2>
	</div>

	<ul class="testimonials">
			<li class="text-center">
				<div style="max-width: 800px" class="mx-auto">
					<p>"TESTIMONIES I&#39;m from South Africa, My Trading on {{env('APP_NAME')}} has been Easy because of their Advanced Trading Equipment which made Forex and Bitcoin Easy for Me Oliver Alfaneti"</p>
					<div class="author my-2">Oliver Alfaneti</div>
				</div>
			</li>
			<li class="text-center">
				<div style="max-width: 800px" class="mx-auto">
					<p>"When a friend told me about this site a few months ago i was obviously a little sceptical but as he has been doing it for a while i thought i would try it out. I invested on their Basic plan. Today Received my investment  Profit. Thanks {{env('APP_NAME')}}

Steven Larson from Australia"</p>
					<div class="author my-2"></div>
				</div>
			</li></ul>	<div class="row about_info my-5">
		<div class="col-lg-4 py-2">
			<div class="media about_item h-100 bg-primary">
				<div class="media-body">
					<h3 class="mb_0">Forex</h3>
					<p class="mb_0">Explore and trade CFDs on major, minor, and exotic currency pairs with efficient spreads.</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 py-2">
			<div class="media about_item h-100 bg-warning">
				<div class="media-body">
					<h3>CFD STOCK</h3>
					<p>Trade CFDs on stocks of leading companies and industry giants without actually owning them</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 py-2">
			<div class="media about_item h-100 bg-danger">
				<div class="media-body">
					<h3>Indices</h3>
					<p>Select from a list of CFDs on widely traded indices representing a particular market sector or national economy.</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('homeFunctions')
@include('livewire.layouts2.footer.homeJsFunctions')
@endsection
