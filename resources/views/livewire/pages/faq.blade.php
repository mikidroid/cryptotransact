@extends('layouts.app')
@section('content')

<div class="bg-about">
	<div class="container">
		<h1 class="wow slideInLeft" data-wow-duration="1s">Frequently asked questions</h1>
		<p class=" wow slideInRight" data-wow-duration="1s">General Questions.</p>
	</div>
</div>
<div class="container my-5">
<!-- FAQ -->

			<div class="faq">

				<!-- Accordions -->
				<div class="elements_accordions">
											<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center active" ><div> Who we are?  </div></div>
							<div class="accordion_panel">
								<p>
									{{env('APP_NAME')}} is a registered digital asset investment firm based in the UK. The platform, which includes advanced basic and technical analysis at the source of high return performance, offers high fixed interest return. Aiming for success with its international investor network, experienced team, privileged information from business and technology world; {{env('APP_NAME')}} stands out from its competitors with its proven quality and ease of use. The company, which is managed under the leadership of people who think and foresee the future, is committed to achieving high returns from well-diversified portfolios and prioritizing clients								</p>
							</div>
						</div>
											<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center " ><div> Guaranteed interest returns, but how?   </div></div>
							<div class="accordion_panel">
								<p>
									Digital assets are a considered dangerous and inconvenient. Many reasons such as liquidity, money laundering accusation, uncertainty of regulation, access restriction, volatile markets, functionality inquiries reduce trust in these assets. We have been able to eliminate risk factor by utilizing a quick conversion of deposits to a stable cryptocurrency which eliminates price change due to retracement, trading pairs are taken using our accurate signals provided by experts in candlestick and technical analysis which implies a scalp trading, day trading and swing trading pattern to ensure profits within a short term.								</p>
							</div>
						</div>
											<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center " ><div> What are the company principles? </div></div>
							<div class="accordion_panel">
								<p>
									Successful investment management companies base their business on a core investment philosophy, and Bynamic is no different. Although we offer innovative and specific strategies through digital asset funds, an overarching theme runs through the investment guidance we provide to clients: focus on those things within your control. There are basically four principles that we attach great importance to: 1) Create clear, appropriate investment goals: An appropriate investment goal should be measureable and attainable. Success should not depend on outsize investment returns or impractical saving or spending requirements. 2) Develop a suitable asset allocation using broadly diversified funds: A sound investment strategy starts with an asset allocation befitting the portfolio's objective. The allocation should be built upon reasonable expectations for risk and returns and use diversified investments to avoid exposure to unnecessary risks. 3) Minimize cost: Markets are unpredictable. Costs are forever. The lower your costs, the greater your share of an investment's return. And research suggests that lower-cost investments have tended to outperform higher-cost alternatives. To hold onto even more of your return, manage for efficiency. You can't control the markets, but you can control the bite of costs and efficiency. 4) Maintain perspective and long-term discipline: Investing can provoke strong emotions. In the face of market turmoil, some investors may find themselves making impulsive decisions or, conversely, becoming paralyzed, unable to implement an investment strategy or rebalance a portfolio as needed. Discipline and perspective can help them remain committed to a long-term investment program through periods of market uncertainty. 								</p>
							</div>
						</div>
											<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center " ><div> What are digital assets and how are they valued? </div></div>
							<div class="accordion_panel">
								<p>
									Digital assets distributed ledger based electronic means of exchanges. Transactions involving them are secured by cryptography, and they have dedicated servers for verification of transactions and the creation of extra units. The most popular of them are Bitcoin, Ethereum, Litecoin, etc. All digital assets are valued by price action, and as a result, almost total control is in the hand of the investing public. 								</p>
							</div>
						</div>
											<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center " ><div> How can i ask for support?   </div></div>
							<div class="accordion_panel">
								<p>
									We are here to help you with any problems and questions you may encounter while using the platform and during your investment experience. You can always contact or turn the situation into an opportunity 								</p>
							</div>
						</div>
											<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center " ><div> What is the minimum amount I can invest? </div></div>
							<div class="accordion_panel">
								<p>
									For the Starter Plan the minimum amount is 300 USD 								</p>
							</div>
						</div>
											<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center " ><div> How can I make an investment?  </div></div>
							<div class="accordion_panel">
								<p>
									To make an investment with us simply choose the investment plan or click on register and you will be redirected to the registration page. After you have completed registration, navigate to account funding section to deposit money into your account.								</p>
							</div>
						</div>
									</div>

			</div>
		</div>
	</div>

@endsection

@section('homeFunctions')
@include('livewire.layouts2.footer.homeJsFunctions')
@endsection
