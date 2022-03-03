@include('livewire.layouts2.user.head')
@include('livewire.layouts2.user.sidebar')
@include('livewire.layouts2.user.banner')

<div id="prnt"></div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-head-row">
                    <div class="card-title">My Investment</div>
                </div>
            </div>
            <div class="card-body ">
                <div class="table-responsive web-table">
                    <table class="display table table-hover" >
                        <thead>
                            <tr>
                                <th>Package</th>
                                <th>Capital</th>
                                <th>Date Invested</th>
                                <th>Elapse</th>
                                <th>Days Spent</th>
                                <th>Status</th>
                                <th>Earning</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="web-table">

                                                                        </tbody>
                    </table>
                    <div class="text-right col-md-12"></div>
                </div>

                <div class="mobile_table container messages-scrollbar" >


                                                        </div>

            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title"> Available Packages</div>
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
                            168
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
                 <span class="pk_num">240%</span>
            </div>
             <div class="" align="center">
                <h4 class="u_case">
                   <strong> Withdrawal Interval</strong>
                </h4>
                <span class="pk_num">7 Days</span>
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
                            168
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
                 <span class="pk_num">359.99999999999%</span>
            </div>
             <div class="" align="center">
                <h4 class="u_case">
                   <strong> Withdrawal Interval</strong>
                </h4>
                <span class="pk_num">7 Days</span>
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
                            168
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
                 <span class="pk_num">600%</span>
            </div>
             <div class="" align="center">
                <h4 class="u_case">
                   <strong> Withdrawal Interval</strong>
                </h4>
                <span class="pk_num">7 Days</span>
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
                            168
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
                 <span class="pk_num">720%</span>
            </div>
             <div class="" align="center">
                <h4 class="u_case">
                   <strong> Withdrawal Interval</strong>
                </h4>
                <span class="pk_num">7 Days</span>
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
                <h3 class="txt_transform">1ST Compounding Package</h3>
            </div>
            <div class="" align="center" >
                <br>
                    <h4 class="u_case" >
                        <strong>Period of Investment</strong>
                    </h4>
                    <div style="font-size: 40px;">
                        <b>
                            84
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
                 <span class="pk_num">240%</span>
            </div>
             <div class="" align="center">
                <h4 class="u_case">
                   <strong> Withdrawal Interval</strong>
                </h4>
                <span class="pk_num">7 Days</span>
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

                        <div class="col-sm-4">
        <div class="panel card pack-container" style="" align="center">
            <div class="panel-head" style="">
                <h3 class="txt_transform">2nd Compounding Package</h3>
            </div>
            <div class="" align="center" >
                <br>
                    <h4 class="u_case" >
                        <strong>Period of Investment</strong>
                    </h4>
                    <div style="font-size: 40px;">
                        <b>
                            168
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
                    <span class="pk_num">$ 150000</span>
                    <h4 class="u_case">
                        <strong>Max Investment</strong>
                    </h4>
                    <span class="pk_num">$ 500000</span>
            </div>

            <span align="center">..............................</span>
            <div class="" align="center">
                <h4 class="u_case">
                    <strong>Total Interest</strong>
                </h4>
                 <span class="pk_num">500%</span>
            </div>
             <div class="" align="center">
                <h4 class="u_case">
                   <strong> Withdrawal Interval</strong>
                </h4>
                <span class="pk_num">28 Days</span>
            </div>
            <div class="" align="center">
                <p>Capital accessible after investment elapses.</p>
            </div>
            <div class="" align="center">
                    <a id="9" href="javascript:void(0)" class="collcc btn btn-info" onclick="confirm_inv('9', '2nd Compounding', '168', '0.029761904761905', '150000', '500000', '0')">
                        Invest
                    </a>
                    <br><br>
            </div>

        </div>
    </div>

                        <div class="col-sm-4">
        <div class="panel card pack-container" style="" align="center">
            <div class="panel-head" style="">
                <h3 class="txt_transform">3rd Compounding Package</h3>
            </div>
            <div class="" align="center" >
                <br>
                    <h4 class="u_case" >
                        <strong>Period of Investment</strong>
                    </h4>
                    <div style="font-size: 40px;">
                        <b>
                            336
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
                    <span class="pk_num">$ 500000</span>
                    <h4 class="u_case">
                        <strong>Max Investment</strong>
                    </h4>
                    <span class="pk_num">$ 1000000</span>
            </div>

            <span align="center">..............................</span>
            <div class="" align="center">
                <h4 class="u_case">
                    <strong>Total Interest</strong>
                </h4>
                 <span class="pk_num">580.00000000001%</span>
            </div>
             <div class="" align="center">
                <h4 class="u_case">
                   <strong> Withdrawal Interval</strong>
                </h4>
                <span class="pk_num">28 Days</span>
            </div>
            <div class="" align="center">
                <p>Capital accessible after investment elapses.</p>
            </div>
            <div class="" align="center">
                    <a id="12" href="javascript:void(0)" class="collcc btn btn-info" onclick="confirm_inv('12', '3rd Compounding', '336', '0.017261904761905', '500000', '1000000', '0')">
                        Invest
                    </a>
                    <br><br>
            </div>

        </div>
    </div>

                                    </div>
</div>
</div>                                </div>
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
          <form id="userpackinv" action="/user/{{$user->username}}/investment" method="post">
              <div class="form-group" align="left">
                <div class="pop_form_min_max" align="center">
                  <b>Min. Capital: $ <span id="min"></span></b> |
                  <b>Max. Capital: $ <span id="max"></span></b>
                </div>
                <br>
                <label>Enter Amount to Invest</label>
                <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend " >
                        <span class="input-group-text span_bg">$</span>
                      </div>
                      <input id="ref_amt" type="number" class="form-control" name="amount"  required placeholder="Enter Amount to invest" >
                    </div>
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


@include('livewire.layouts2.user.footer')
@include('livewire.layouts2.user.functions')
