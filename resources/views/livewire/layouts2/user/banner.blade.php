<div class="main-panel">
    <div class="content">
                        <div class="panel-header " style="background-color: #1d59d8">
<div class="page-inner py-5" style="background-color: #1d59d8">
<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
    <div>
        <h2 class="text-white pb-2 fw-bold">
            Dashboard
        </h2>
        @include('livewire.inc.flashMessages')
    </div>
    <div class="ml-md-auto py-2 py-md-0">
        <a href="/user/{{Auth::user()->username}}/investments" class="btn btn-white btn-border btn-round mr-2">Investments</a>
        <a href="/user/{{Auth::user()->username}}/deposit" class="btn btn-secondary btn-round">Deposit</a>
    </div>
</div>
</div>
</div>				<div class="page-inner mt--5">
            <div class="row mt--2">
<div class="col-md-6">
<div class="card full-height">
    <div class="card-body">
        <div class="card-title">Overall statistics</div>
        <div class="card-category"></div>
        <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
            <div class="px-2 pb-2 pb-md-0 text-center">
                <div id="circles-1"></div>
                <h6 class="fw-bold mt-3 mb-0">Investments</h6>
            </div>
            <div class="px-2 pb-2 pb-md-0 text-center">
                <div id="circles-2"></div>
                <h6 class="fw-bold mt-3 mb-0">Withdrawals</h6>
            </div>
            <div class="px-2 pb-2 pb-md-0 text-center">
                <div id="circles-3"></div>
                <h6 class="fw-bold mt-3 mb-0">Downlines</h6>
            </div>
        </div>
    </div>
</div>
</div>

<div class="col-md-6">
<div class="card full-height">
    <div class="card-body">
        <div class="card-title"><h2>Balances</h2></div>
        <div class="row py-3">
            <div class="col-md-6 d-flex flex-column justify-content-around">
                <a id="wd_bal" title="Click to withdraw" href="javascript:void(0)" >
                    <div class="border_btm">
                        <h4 class="fw-bold text-uppercase text-success op-8">Wallet</h4>
                        <h3 class="fw-bold">$ {{$user->balance}}</h3>
                        <div class="colhd margin_n10">Click to Withdraw Fund</div>
                        <br>
                    </div>
                </a>
                <div class="clearfix"><br></div>
                <a id="wd_ref_bal" title="Click to withdraw" href="javascript:void(0)">
                    <div>
                        <h4 class="fw-bold text-uppercase text-success op-8">Referral Bonus</h4>
                        <h3 class="fw-bold">$ {{$user->referral_bonus}}</h3>
                        <div class="colhd margin_n10" >Click to Withdraw Fund</div>
                        <br>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
    <a href="#">
                  <div class="border_btm">
                      <h4 class="fw-bold text-uppercase text-success op-8 ml-2">Earning</h4>
                      <h3 class="fw-bold ml-2">$ {{$user->earnings}}</h3>

                      <div class="colhd margin_n10" >&emsp;</div>
                      <br>
                  </div>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<div id="wallet_wd" class="container popmsgContainer" >
<div class="row padding_per_2_2">
<div class="col-md-4">&emps;</div>
<div class="col-md-4 popmsg-mobile card" align="Center">
<div class="card-title">
  <br>
  <h3><b>Wallet Withdrawal</b></h3>
  <h5 class="text-danger"><b>Available Balance:</b></h5>
              <h3 class="fw-bold">$ {{$user->balance}}</h3>

  <hr>
</div>
<div class="card-body">
    Enter amount and select bank/wallet below
    <form id="wd_formssss" action="/user/activity" method="post">
        @csrf
        <div class="form-group" align="left">
            <input id="ref_amt" type="hidden" class="form-control" name="type" value="withdrawal"  >
            <input id="ref_amt" type="hidden" class="form-control" name="from" value="balance"  >
            <input id="ref_amt" type="hidden" class="form-control" name="balance" value="{{$user->balance}}"  >
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-prepend " >
              <span class="input-group-text span_bg">$</span>
            </div>
            <input id="wd_amt" type="text" class="form-control" name="amount"  required placeholder="Enter Amount to withdraw" >
          </div>
        </div>

        <div class="form-group">
          <br><br>
            <button class="collb btn btn-info">Withdraw</button>
            <span style="">
              <a id="wallet_wd_close" href="javascript:void(0)" class="collcc btn btn-danger">Cancel</a>
            </span>
            <br>
        </div>
    </form>
</div>
<!-- close btn -->
<script type="text/javascript">
  $('#wallet_wd_close').click( function(){
    $('#wallet_wd').hide();
  });
</script>
<!-- end close btn -->
</div>

</div>
</div>

<div id="ref_wd" class="container popmsgContainer" >
<div class="row padding_per_2_2">
<div class="col-md-4">&emps;</div>
<div class="col-md-4 popmsg-mobile card" align="Center">
<div class="panel-heading" style="">
  <br>
  <h3><b>Referral Withdrawal</b></h3>
  <h5 class="text-danger"><b>Total Earning:</b> $ 0</h5>
  <hr>
</div>
<div id="" >
      Enter amount to withdraw and select bank below
     <form id="wd_formssss" action="/user/activity" method="post">
        @csrf
        <div class="form-group" align="left">
        </div>
        <input id="ref_amt" type="hidden" class="form-control" name="type" value="withdrawal"  >
        <input id="ref_amt" type="hidden" class="form-control" name="from" value="bonus"  >
        <input id="ref_amt" type="hidden" class="form-control" name="balance" value="{{$user->referral_bonus}}"  >
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-prepend " >
              <span class="input-group-text span_bg">$</span>
            </div>
            <input id="ref_amt" type="text" class="form-control" name="amount"  required placeholder="Enter Amount to withdraw" >
          </div>
        </div>
        <div class="form-group">
          <br><br>
            <button class="collb btn btn-info">Withdraw</button>
            <span style="">
              <a id="ref_wd_close" href="javascript:void(0)" class="collcc btn btn-danger">Cancel</a>
            </span>
            <br>
        </div>
    </form>
</div>
<!-- close btn -->
<script type="text/javascript">
  $('#ref_wd_close').click( function(){
    $('#ref_wd').hide();
  });
</script>
<!-- end close btn -->

</div>

</div>
</div>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">User actions</h5>
        <br>
        <h6 class="card-subtitle mb-2 text-muted"> <a class="dropdown-item" href="/user/{{Auth::user()->username}}/dashboard"><span class="fa fa-desktop"></span> &nbsp;Dashboard</a>
        </h6>
        <div class="dropdown-divider"></div>
        <h6 class="card-subtitle mb-2 text-muted"> <a class="dropdown-item" href="/user/{{Auth::user()->username}}/deposit"><span class="fa fa-folder"></span>&nbsp; Deposit</a>
        
        <!-- user profile
       <div class="dropdown-divider"></div>
        <h6 class="card-subtitle mb-2 text-muted"> <a class="dropdown-item" href="/user/{{Auth::user()->username}}/profile"><span class="fa fa-folder"></span>&nbsp; Profile</a>
        </h6>
        </h6>
        -->
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="/user/{{Auth::user()->username}}/investments"><span class="fa fa-folder"></span>&nbsp; My Investments</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="/user/{{Auth::user()->username}}/withdrawal"><span class="fa fa-download"></span>&nbsp; Withdrawal</a>
        
        <!--
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="contact"> <i class="fa fa-circle text-danger"></i>&nbsp; Contact Support &nbsp; </a>
        
        -->

        <div class="dropdown-divider"></div>
        <h6 class="card-subtitle mb-2 text-muted"> <form method="POST" action="/logout">
                            @csrf
                            <button class="dropdown-item btn btn-link" type="submit">
                                <i class="fas fa-arrow-right"></i>
                                Logout
                            </button></form>
        </h6>
    </div>

</div>
