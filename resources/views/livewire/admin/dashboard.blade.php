@include('livewire.layouts2.admin.head')
@include('livewire.layouts2.admin.sidebar')
@include('livewire.layouts2.admin.banner')

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
							</div>
						</div>

                    -->
					</div>

					<div class="row">
						<div class="col-md-12">

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
									<p class="card-category">All actions performed by users.</p>
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
                                                                    <th>Username</th>
                                                                    <th>Amount</th>
                                                                    <th>Status</th>
																	<th>Date</th>
                                                                    <th>Actions</th>
																</tr>
															</thead>
															<tfoot>
																<tr>
																	<th>Actions</th>
                                                                    <th>Username</th>
                                                                    <th>Amount</th>
                                                                    <th>Status</th>
																	<th>Date</th>
                                                                    <th>Actions</th>
																</tr>
															</tfoot>
															<tbody>

                                                                @foreach ($activity as $act)
                                                                <tr>
                                                                    <td>
                                                                        A {{$act->type}}
                                                                    </td>
                                                                    <td>{{$act->username}}</td>
                                                                    <td>$ {{$act->amount}}</td>
                                                                    <td>{{$act->status}}</td>
                                                                    <td>{{$act->created_at}}</td>
                                                                    <td>
                                                                        @if ($act->type == 'deposit')
                                                                         @if ($act->status == 'successful')
                                                                          <span>Deposit confirmed</span>
                                                                         @else
                                                                          <form action="/admin/{{$act->id}}/confirm-deposit" method="POST">
                                                                            @csrf
                                                                            <button type="submit" class="alert-info btn">Confirm deposit</button>
                                                                          </form>
                                                                         @endif
                                                                        @endif

                                                                    </td>
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
        <form id="userpackinv" action="/user/invest/packages" method="post">
            <div class="form-group" align="left">
              <div class="pop_form_min_max" align="center">
                <b>Min. Capital: $ <span id="min"></span></b> |
                <b>Max. Capital: $ <span id="max"></span></b>
              </div>
              <br>
              <label>Enter Amount to Invest</label>
              <input type="hidden" class="form-control" name="_token" value="Nshtt9JXVZiRhV4z6bfsC5hLNar0lZwl5BJC6CCc">
              <input id="p_id" type="hidden" class="form-control" name="p_id" value="">
              <input type="text" class="form-control" name="capital" placeholder="Enter capital to invest" required>
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

@include('livewire.layouts2.admin.footer')
@include('livewire.layouts2.admin.functions')
