@include('livewire.layouts2.user.head')
@include('livewire.layouts2.user.sidebar')
@include('livewire.layouts2.user.banner')

							<div id="prnt"></div>
					<div class="row">

                        <!--
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title">Investment Statistics</div>
										<div class="card-tools">
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="chart-container">
										<canvas id="statisticsChart2"></canvas>
									</div>
									<div id="myChartLegend2"></div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-primary">
								<div class="card-header">
									<div class="card-title">Withdrawal Stats </div>
									<div class="card-category">
									    										<h1>$ 0</h1>
									</div>
								</div>
								<div class="card-body pb-0">
									<div class="pull-in">
										<canvas id="wd_stats"></canvas>
									</div>
								</div>
							</div>


							<div class="card">
								<div class="card-body pb-0">
									<div class="px-2 pb-2 pb-md-0 text-center">
										<div id="circles-logs"></div>
										<h6 class="fw-bold mt-3 mb-0">My Total Actions</h6>
										<br>
									</div>
								</div>
							</div> -->
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Available Packages  </div>
								</div>
								<div class="card-body pb-0">
									<div class="sparkline8-graph dashone-comment  dashtwo-messages">
    <div class="comment-phara">
        <div class="row comment-adminpr">
                                                                                    <div class="col-sm-4">
                            <div class="panel card pack-container" style="" align="center">
                                <div class="panel-head" style="">
                                    <h3 class="txt_transform">BASIC PLAN Package</h3>
                                </div>
                                <div class="" align="center" >
                                    <br>
                                        <h4 class="u_case" >
                                            <strong>Period of Investment</strong>
                                        </h4>
                                        <div style="font-size: 40px;">
                                            <b>
                                                {{env('INVESTMENT_ELAPSE_DATE')}}
                                            </b>
                                        </div>
                                        <span class="pk_num">
                                                Days
                                        </span>
                                </div>
                                <span align="center">..............................</span>
                                <div class="" align="center" style="">
                                        <h4 class="u_case" >
                                            <strong>Min Investment</strong>
                                        </h4>
                                        <span class="pk_num">$ 500</span>
                                        <h4 class="u_case">
                                            <strong>Max Investment</strong>
                                        </h4>
                                        <span class="pk_num">$ 15000</span>
                                </div>

                                <span align="center">..............................</span>
                                <div class="" align="center">
                                    <h4 class="u_case">
                                        <strong>Total Interest</strong>
                                    </h4>
                                     <span class="pk_num">200%</span>
                                </div>

                                <div class="" align="center">
                                    <p>Capital accessible after investment elapses.</p>
                                </div>
                                <div class="" align="center">
                                        <a id="1" href="javascript:void(0)" class="collcc btn btn-info" onclick="confirm_inv('1', 'BASIC PLAN', '168', '0.014285714285714', '500', '15000', '0')">
                                            Invest
                                        </a>
                                        <br><br>
                                </div>

                            </div>
                        </div>

                                            <div class="col-sm-4">
                            <div class="panel card pack-container" style="" align="center">
                                <div class="panel-head" style="">
                                    <h3 class="txt_transform">VETERAN PLAN Package</h3>
                                </div>
                                <div class="" align="center" >
                                    <br>
                                        <h4 class="u_case" >
                                            <strong>Period of Investment</strong>
                                        </h4>
                                        <div style="font-size: 40px;">
                                            <b>
                                                {{env('INVESTMENT_ELAPSE_DATE')}}
                                            </b>
                                        </div>
                                        <span class="pk_num">
                                                Days
                                        </span>
                                </div>
                                <span align="center">..............................</span>
                                <div class="" align="center" style="">
                                        <h4 class="u_case" >
                                            <strong>Min Investment</strong>
                                        </h4>
                                        <span class="pk_num">$ 16000</span>
                                        <h4 class="u_case">
                                            <strong>Max Investment</strong>
                                        </h4>
                                        <span class="pk_num">$ 30000</span>
                                </div>

                                <span align="center">..............................</span>
                                <div class="" align="center">
                                    <h4 class="u_case">
                                        <strong>Total Interest</strong>
                                    </h4>
                                    <span class="pk_num">200%</span>
                                </div>

                                <div class="" align="center">
                                    <p>Capital accessible after investment elapses.</p>
                                </div>
                                <div class="" align="center">
                                        <a id="2" href="javascript:void(0)" class="collcc btn btn-info" onclick="confirm_inv('2', 'VETERAN PLAN', '168', '0.021428571428571', '16000', '30000', '0')">
                                            Invest
                                        </a>
                                        <br><br>
                                </div>

                            </div>
                        </div>

                                            <div class="col-sm-4">
                            <div class="panel card pack-container" style="" align="center">
                                <div class="panel-head" style="">
                                    <h3 class="txt_transform">EXPERT PLAN Package</h3>
                                </div>
                                <div class="" align="center" >
                                    <br>
                                        <h4 class="u_case" >
                                            <strong>Period of Investment</strong>
                                        </h4>
                                        <div style="font-size: 40px;">
                                            <b>
                                                {{env('INVESTMENT_ELAPSE_DATE')}}
                                            </b>
                                        </div>
                                        <span class="pk_num">
                                                Days
                                        </span>
                                </div>
                                <span align="center">..............................</span>
                                <div class="" align="center" style="">
                                        <h4 class="u_case" >
                                            <strong>Min Investment</strong>
                                        </h4>
                                        <span class="pk_num">$ 31000</span>
                                        <h4 class="u_case">
                                            <strong>Max Investment</strong>
                                        </h4>
                                        <span class="pk_num">$ 59000</span>
                                </div>

                                <span align="center">..............................</span>
                                <div class="" align="center">
                                    <h4 class="u_case">
                                        <strong>Total Interest</strong>
                                    </h4>
                                    <span class="pk_num">200%</span>
                                </div>

                                <div class="" align="center">
                                    <p>Capital accessible after investment elapses.</p>
                                </div>
                                <div class="" align="center">
                                        <a id="3" href="javascript:void(0)" class="collcc btn btn-info" onclick="confirm_inv('3', 'EXPERT PLAN', '168', '0.035714285714286', '31000', '59000', '0')">
                                            Invest
                                        </a>
                                        <br><br>
                                </div>

                            </div>
                        </div>

                                            <div class="col-sm-4">
                            <div class="panel card pack-container" style="" align="center">
                                <div class="panel-head" style="">
                                    <h3 class="txt_transform">MASTER PLAN Package</h3>
                                </div>
                                <div class="" align="center" >
                                    <br>
                                        <h4 class="u_case" >
                                            <strong>Period of Investment</strong>
                                        </h4>
                                        <div style="font-size: 40px;">
                                            <b>
                                                {{env('INVESTMENT_ELAPSE_DATE')}}
                                            </b>
                                        </div>
                                        <span class="pk_num">
                                                Days
                                        </span>
                                </div>
                                <span align="center">..............................</span>
                                <div class="" align="center" style="">
                                        <h4 class="u_case" >
                                            <strong>Min Investment</strong>
                                        </h4>
                                        <span class="pk_num">$ 60000</span>
                                        <h4 class="u_case">
                                            <strong>Max Investment</strong>
                                        </h4>
                                        <span class="pk_num">$ 100000</span>
                                </div>

                                <span align="center">..............................</span>
                                <div class="" align="center">
                                    <h4 class="u_case">
                                        <strong>Total Interest</strong>
                                    </h4>
                                     <span class="pk_num">200%</span>
                                </div>

                                <div class="" align="center">
                                    <p>Capital accessible after investment elapses.</p>
                                </div>
                                <div class="" align="center">
                                        <a id="4" href="javascript:void(0)" class="collcc btn btn-info" onclick="confirm_inv('4', 'MASTER PLAN', '168', '0.042857142857143', '60000', '100000', '0')">
                                            Invest
                                        </a>
                                        <br><br>
                                </div>

                            </div>
                        </div>

                                            <div class="col-sm-4">
                            <div class="panel card pack-container" style="" align="center">
                                <div class="panel-head" style="">
                                    <h3 class="txt_transform">Ultimate Package</h3>
                                </div>
                                <div class="" align="center" >
                                    <br>
                                        <h4 class="u_case" >
                                            <strong>Period of Investment</strong>
                                        </h4>
                                        <div style="font-size: 40px;">
                                            <b>
                                                {{env('INVESTMENT_ELAPSE_DATE')}}
                                            </b>
                                        </div>
                                        <span class="pk_num">
                                                Days
                                        </span>
                                </div>
                                <span align="center">..............................</span>
                                <div class="" align="center" style="">
                                        <h4 class="u_case" >
                                            <strong>Min Investment</strong>
                                        </h4>
                                        <span class="pk_num">$ 10000</span>
                                        <h4 class="u_case">
                                            <strong>Max Investment</strong>
                                        </h4>
                                        <span class="pk_num">$ 100000</span>
                                </div>

                                <span align="center">..............................</span>
                                <div class="" align="center">
                                    <h4 class="u_case">
                                        <strong>Total Interest</strong>
                                    </h4>
                                    <span class="pk_num">200 %</span>
                                </div>

                                <div class="" align="center">
                                    <p>Capital accessible after investment elapses.</p>
                                </div>
                                <div class="" align="center">
                                        <a id="7" href="javascript:void(0)" class="collcc btn btn-info" onclick="confirm_inv('7', '1ST Compounding', '84', '0.028571428571429', '10000', '100000', '0')">
                                            Invest
                                        </a>
                                        <br><br>
                                </div>

                            </div>
                        </div>





                                                        </div>
    </div>
</div>								</div>
							</div>
						</div>
					</div>

					<div class="row row-card-no-pd">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row card-tools-still-right">
										<h4 class="card-title">User Activities</h4>
										<div class="card-tools">
											<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-angle-down"></span></button>
											<button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span class="fa fa-sync-alt"></span></button>
											<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-times"></span></button>
										</div>
									</div>
									<p class="card-category">All actions performed by you.</p>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
											<div class="card">
												<div class="card-body">
													<div class="table-responsive">
														<table id="basic-datatables" class="display table table-striped
														table-hover" >
															<thead>
																<tr>
																	<th>Actions</th>
                                                                    <th>Amount</th>
                                                                    <th>Status</th>
																	<th>Date</th>
																</tr>
															</thead>
															<tfoot>
																<tr>
																	<th>Actions</th>
                                                                    <th>Amount</th>
                                                                    <th>Status</th>
																	<th>Date</th>
																</tr>
															</tfoot>
															<tbody>

                                                                @foreach ($activity as $act)
                                                                <tr>
                                                                    <td>
                                                                        You made a {{$act->type}}
                                                                    </td>
                                                                    <td>$ {{$act->amount}}</td>
                                                                    <td>{{$act->status}}</td>
                                                                    <td>{{$act->created_at}}</td>
                                                                </tr>
                                                                @endforeach

															</tbody>
														</table>
													</div>

												</div>
											</div>
										</div>

									</div>

								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			 <div id="popInvest" class="container pop_invest_cont" >
  <div class="row wd_row_pad" >
    <div class="col-md-4">&emps;</div>
    <div class="col-md-4 card pop_invest_col" align="center">
      <div class="card-header" style="">
        <h3><b>Initiate Investment</b></h3>
        <h5>Wallet Balance: <b>$ <span id="WalletBal"></span></b></h5>
        <hr>
      </div>
      <div class="pop_msg_contnt">
        <p align="center" class="color_blue_b">
            You are about to invest in  <b><span id="pack_inv"></span></b> package which takes a period of  <b><span id="period"></span></b>days and comes with   <b><span id="intr"></span></b>%  total interest
        </p>
        <form id="userpackinv" action="/user/activity" method="POST">
            @csrf
            <div class="form-group" align="left">
              <div class="pop_form_min_max" align="center">
                <b>Min. Capital: $ <span id="min"></span></b> |
                <b>Max. Capital: $ <span id="max"></span></b>
              </div>
              <br>
              <label>Enter Amount to Invest</label>

              <input type="hidden" class="form-control" name="type" value="investment">
              <input type="number" class="form-control" name="amount" placeholder="Enter capital to invest" required>
            </div>
            <div class="form-group">
                <button class="collb btn btn-info">Proceed</button>
                <span style="">
                  <a id="popMsg_close_user" href="javascript:void(0)" class="btn btn-danger">Cancel</a>
                </span>
                <br><br>
            </div>
        </form>

      </div>
      <!-- close btn -->
      <script type="text/javascript">
        $('#popMsg_close_user').click( function(){
          $('#popInvest').hide();
        });
      </script>
      <!-- end close btn -->
    </div>
  </div>
</div>

@include('livewire.layouts2.user.footer')
@include('livewire.layouts2.user.functions')
