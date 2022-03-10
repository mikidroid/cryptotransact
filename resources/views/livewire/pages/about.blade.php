@extends('layouts.app')
@section('content')


<div class="bg-about">
    <div class="container">
      <h1>About Us</h1>
    </div>
  </div>
  <div class="container"><p style="-webkit-font-smoothing: antialiased !important;">{{env('APP_NAME')}} is a distinctive investment company offering our investors access to high-growth investment opportunities in Bitcoin markets and other services. We implement best practices of trading &amp; mining of Bitcoins through our operations, while offering flexibility in our investment plans. Our company benefits from an extensive network of global clients. At {{env('APP_NAME')}} campany, we emphasize on understanding our client&rsquo;s requirement and providing suitable solutions to meet their investment criteria. Our aim is to utilize our expertise &amp; knowledge which will benefit our clients and the users of our services. Our company believes that when a team outperforms expectations, excellence becomes a reality.</p>
   <p>our Company head office is located here "20 Chapel Street, Liverpool, United Kingdom, L3 9AG "</em></p>


   <center>
      <center>
        
   </center>
   <article class="box docs__gui">


  </article>
      </center>
  <div class="row">
          <div class="col-md-6">
              <div class="section_title my-5">
                  <p>Our Services</p>
                  <h2>Why Choose Us</h2>
              </div>
              <ul class="icon-list">
                  <li>
                      <img src="../images/icon_blue-binary-options.png">
                      <div>
                          <h3>Binary Options</h3>
                          <p class="text-italic text-black-50">{{env('APP_NAME')}} Binary Options turn every trade into a simple question: will this market be above this price at this time.</p>
                      </div>
                  </li>
                  <li>
                      <img src="../images/icon_orange-touch-brackets.png">
                      <div>
                          <h3>Knock-outs</h3>
                          <p class="text-italic text-black-50">{{env('APP_NAME')}} Knock-Outs, also known as Touch Bracket™ contracts, have floor and ceiling knock-out points. This structure can maximize effective leverage and provide natural profit targets.</p>
                      </div>
                  </li>
                  <li>
                      <img src="../images/icon_green-call-spreads.png">
                      <div>
                          <h3>Call Spreads</h3>
                          <p class="text-italic text-black-50">{{env('APP_NAME')}} Call Spreads have a floor-to-ceiling trading range which offers defined risk without the need for stops, allowing time for the market to prove you right.</p>
                      </div>
                  </li>
              </ul>
          </div>
          <div class="col-md-6 pt-5">
            <div style="border-radius: 6px; overflow: hidden; border: 1px solid #505E76;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&amp;theme=light&amp;cnt=6&amp;pref_coin_id=1505&amp;graph=yes" width="100%" height="409px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div>
          </div>
      </div>

@endsection

@section('homeFunctions')
@include('livewire.layouts2.footer.homeJsFunctions')
@endsection
