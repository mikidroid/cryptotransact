@include('livewire.layouts2.admin.head')
@include('livewire.layouts2.admin.sidebar')
@include('livewire.layouts2.admin.banner')

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


@include('livewire.layouts2.admin.footer')
@include('livewire.layouts2.admin.functions')
