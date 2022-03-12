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
                                <th>Username</th>
                                <th>Email</th>
                                <th>Capital</th>
                                <th>Date Invested</th>
                                <th>Elapse</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="web-table">
                        @foreach ($investments as $inv)
                        <tr>
                            <td>{{$inv->username}}</td>
                            <td>{{$inv->email}}</td>
                            <td>${{$inv->amount}}</td>
                            <td>{{$inv->start_date}}</td>
                            <td>{{$inv->elapse_date}}</td>
                            <td>{{$inv->status}}</td>
                        </tr>
                        @endforeach


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
  <p>Capital accessible after investment elapses.</p>
</div>
<div class="" align="center">
      <a id="1" href="javascript:void(0)" class="collcc btn btn-info" onclick="confirm_inv('1', 'Basic plan', '168', '240', 500, 15000, '0')">
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
  <span class="pk_num">359%</span>
</div>

<div class="" align="center">
  <p>Capital accessible after investment elapses.</p>
</div>
<div class="" align="center">
      <a id="2" href="javascript:void(0)" class="collcc btn btn-info" onclick="confirm_inv('2', 'Veteran plan', '168', '359', '16000', '30000', '0')">
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
  <p>Capital accessible after investment elapses.</p>
</div>
<div class="" align="center">
      <a id="3" href="javascript:void(0)" class="collcc btn btn-info" onclick="confirm_inv('3', 'Expert plan', '168', '600', '31000', '59000', '0')">
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
  <p>Capital accessible after investment elapses.</p>
</div>
<div class="" align="center">
      <a id="4" href="javascript:void(0)" class="collcc btn btn-info" onclick="confirm_inv('4', 'Master plan', '168', '720', '60000', '100000', '0')">
          Invest
      </a>
      <br><br>
</div>

</div>
</div>

   <div class="col-sm-4">
<div class="panel card pack-container" style="" align="center">
<div class="panel-head" style="">
  <h3 class="txt_transform">1ST COMPOUNDING PACKAGE</h3>
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
  <p>Capital accessible after investment elapses.</p>
</div>
<div class="" align="center">
      <a id="7" href="javascript:void(0)" class="collcc btn btn-info" onclick="confirm_inv('7', '1st Compounding', '84', '240', '10000', '100000', '0')">
          Invest
      </a>
      <br><br>
</div>

</div>
</div>


<div class="col-sm-4">
<div class="panel card pack-container" style="" align="center">
<div class="panel-head" style="">
  <h3 class="txt_transform">2ND COMPOUNDING PACKAGE</h3>
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
  <p>Capital accessible after investment elapses.</p>
</div>
<div class="" align="center">
      <a id="7" href="javascript:void(0)" class="collcc btn btn-info" onclick="confirm_inv('7', '2nd Compounding', '168', '500', '150000', '500000', '0')">
          Invest
      </a>
      <br><br>
</div>

</div>
</div>


<div class="col-sm-4">
<div class="panel card pack-container" style="" align="center">
<div class="panel-head" style="">
  <h3 class="txt_transform">3RD COMPOUNDING PACKAGE</h3>
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
  <span class="pk_num">580%</span>
</div>

<div class="" align="center">
  <p>Capital accessible after investment elapses.</p>
</div>
<div class="" align="center">
      <a id="7" href="javascript:void(0)" class="collcc btn btn-info" onclick="confirm_inv('7', '3rd Compounding', '336', '580', '500000', '1000000', '0')">
          Invest
      </a>
      <br><br>
</div>

</div>
</div>


 </div>
 </div>
  </div>								
  </div>							</div>
            </div>
        </div>
</div>



<div id="popInvest" class="container pop_invest_cont" >
  <div class="row wd_row_pad" >
    <div class="col-md-4">&emps;</div>
    <div class="col-md-4 card pop_invest_col" align="center">
      <div class="card-header" style="">
        <h3><b>Initiate Investment</b></h3>
        <h5>Wallet Balance: <b>$ <span >{{$user->balance}}</span></b></h5>
        <hr>
      </div>
      <div class="pop_msg_contnt">
        <p align="center" class="color_blue_b">
            You are about to invest in  <b><span id="plan"></span></b> package which takes a period of  <b><span id="elapse"></span></b> days and comes with   <b><span id="interest"></span></b>%  total interest
        </p>
        <form id="InvForm" action="/user/activity" method="POST">
            @csrf
            <div class="form-group" align="left">

              <br>
              <label>Enter Amount to Invest</label>

<input type="hidden" class="form-control" name="type" value="investment">

<input id="_elapse" type="hidden" class="form-control" name="period" >
<input id="_interest" type="hidden" class="form-control" name="interest" >
<input id="_plan" type="hidden" class="form-control" name="plan" >
<input id="_min" type="hidden" class="form-control" name="min" >
<input id="_max" type="hidden" class="form-control" name="max" >


<input id="_amount" type="number" class="form-control" name="amount" placeholder="Enter capital to invest" required>
            </div>
        
        </form>
    <div class="form-group">
                <button onclick="submitInv()" class="collb btn btn-info">Proceed</button>
                <span style="">
                  <a id="popMsg_close_user" href="javascript:void(0)" class="btn btn-danger">Cancel</a>
                </span>
                <br><br>
            </div>

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
