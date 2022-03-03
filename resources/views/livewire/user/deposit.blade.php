@include('livewire.layouts2.user.head')
@include('livewire.layouts2.user.sidebar')
@include('livewire.layouts2.user.banner')

<div id="prnt"></div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-head-row">
                    <div class="card-title">Deposit into your wallet</div>
                </div>
            </div>
            <div class="card-body">

                            <div id="pay_cont" class="row">








                                                                                    <div class="col-lg-6 mt-5">
                                    <div class="payment_method" align="center">
                                        <p>
                                            <i class="far fa-building fa-4x text-info"></i> <br>
                                        </p>
                                        <p>
                                            Pay using Bitcoin
                                        </p>

                                        <div align="">
                                            <a id="pay_with_bank_dep" href="javascript:void(0)" class="btn btn_blue" >
                                                Pay with BTC
                                            </a>
                                        </div>
                                        <div id="bank_dets" align="" class="cont_display_none">
                                             <p class="text-danger">
                                                       Make payment to the wallet details below and click continue below.
                                                    </p>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h3 class="color_blue_b">

                                                        <center><img src="https://chart.googleapis.com/chart?chs=250x250&amp;cht=qr&amp;chl=13HZjAkaA38mswgLgT1n2cosw5gvEqNGZ7" heigh="200" width="200"> <img></center>

                                                    Wallet Address: 13HZjAkaA38mswgLgT1n2cosw5gvEqNGZ7

                                                    </h3>
                                                    <!--<h4 class="text-danger">Account Number: 09876545678</h4>-->
                                                    <!--<h5 class="">Bank: BOA</h5>-->
                                                </div>
                                            </div>
                                            <!--<div class="row">              -->
                                            <!--    <div class="col-sm-12">-->
                                            <!--        <p class="text-danger">-->
                                            <!--           Make payment to the wallet details above and click continue below. -->
                                            <!--        </p>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <a id="bank_deposit_cont" href="javascript:void(0)" class="btn btn_blue" >
                                                        Continue
                                                    </a>
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

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Deposit History</div>
            </div>
            <div class="card-body pb-0">


                <div class="table-responsive">
                    <table class="display table table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>Amount</th>
                            <th>Method</th>
                            <th>Account</th>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Url</th>
                        </tr>
                    </thead>
                    <tbody>

                                                                                                                            <tr>
                                    <td>$ 666</td>
                                    <td>BTC</td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>2022-02-26 10:09:44</td>
                                    <td>
                                                                                                        Pending
                                                                                                </td>
                                    <td>
                                                                                                        <a href="https://crestcredits.com/coinpayment/confirm?id=" target="_blank" class="btn btn-info">Check</a>
                                                                                                </td>
                                </tr>
                                                                                <tr>
                                    <td>$ 3000</td>
                                    <td>BTC</td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>2022-02-26 09:00:11</td>
                                    <td>
                                                                                                        Pending
                                                                                                </td>
                                    <td>
                                                                                                        <a href="https://crestcredits.com/coinpayment/confirm?id=" target="_blank" class="btn btn-info">Check</a>
                                                                                                </td>
                                </tr>
                                                                                                                </tbody>
                </table>
                <div>

                </div>
                <br><br>
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
<input type="hidden" class="form-control" name="_token" value="a0RSFbuw9NTKuSnJDMFUD90z1O8Z7HM2mOpMF1S3">
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
</div>            <div id="dep_pop" class="container dep_pop">
<div class="row pad_5p2p">
<div class="col-md-4">&emps;</div>
<div class="col-md-4 pop_cont" align="Center">
    <div class="">
            <span>
              <a id="dep_pop_close" href="javascript:void(0)" class="btn btn-danger">Cancel</a>
            </span>
            <br>
        </div>
        <div>
            <img id="img_pop" src="" class="pop_img_h">
        </div>
        <br>
    </div>
    <!-- close btn -->
    <script type="text/javascript">
      $('#dep_pop_close').click( function(){
        $('#dep_pop').hide();
      });
    </script>
    <!-- end close btn -->
</div>
</div>
</div>

<div id="bank_deposit_cont_dets" class="container popmsgContainer" >
<div class="row">
<div class="col-md-4">&emps;</div>
<div class="col-md-4 popmsg-mobile card" align="Center">
<div class="mt-2">
  <h3><b>Deposit Details</b></h3>
  <hr>
</div>
<div class="">
    <form action="/user/wallet/bank_deposit" method="post">
        <div class="form-group" align="left">
            <input type="hidden" class="form-control" name="_token" value="a0RSFbuw9NTKuSnJDMFUD90z1O8Z7HM2mOpMF1S3">
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-prepend " >
              <span class="input-group-text span_bg">$</span>
            </div>
            <input type="number" class="form-control" name="amt"  required placeholder="Enter Amount Sent" >
          </div>
        </div>
        <!--<div class="form-group">-->
        <!--  <div class="input-group" >                   -->
        <!--    <div class="input-group-prepend " >-->
        <!--      <span class="input-group-text span_bg"><i class="fa fa-user" ></i></span>-->
        <!--    </div>-->
        <!--    <input type="text" class="form-control" name="account_name"  required placeholder="Account name sent from" >-->
        <!--  </div>-->
        <!--</div>-->
        <!--<div class="form-group">-->
        <!--  <div class="input-group" >                   -->
        <!--    <div class="input-group-prepend " >-->
        <!--      <span class="input-group-text span_bg"><i class="fa fa-home" ></i></span>-->
        <!--    </div>-->
        <!--    <input type="text" class="form-control" name="account_no"  required placeholder="Account number sent from" >-->
        <!--  </div>-->
        <!--</div>-->
        <!--<div class="form-group">-->
        <!--  <div class="input-group" >                   -->
        <!--    <div class="input-group-prepend" >-->
        <!--      <span class="input-group-text span_bg"><i class="fa fa-home" ></i></span>-->
        <!--    </div>-->
        <!--    <input type="text" class="form-control" name="bank_name"  required placeholder="Bank name sent from" >-->
        <!--  </div>-->
        <!--</div>-->
        <div class="form-group">
          <br>
            <button class="collb btn btn-info">Proceed</button>
            <span style="">
              <a id="bank_deposit_cont_dets_close" href="javascript:void(0)" class="collcc btn btn-danger">Cancel</a>
            </span>
            <br>
        </div>
    </form>
</div>
<!-- close btn -->
<script type="text/javascript">
  $('#bank_deposit_cont_dets_close').click( function(){
    $('#bank_deposit_cont_dets').hide();
  });
</script>
<!-- end close btn -->
</div>

</div>
</div>

@include('livewire.layouts2.user.footer')
@include('livewire.layouts2.user.functions')
