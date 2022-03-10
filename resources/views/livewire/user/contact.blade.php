@include('livewire.layouts2.user.head')
@include('livewire.layouts2.user.sidebar')
@include('livewire.layouts2.user.banner')


<div class="page-inner mt--5">
    <div id="prnt"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title col-sm-12" id="try" >Open Ticket
                            <span class="float-right"><a data-target="#open_ticket" data-toggle="modal" href="javascript:void(0)" class="btn btn_blue text-white"><i class="fas fa-plus-circle "></i>New Ticket</a></span>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table  class=" display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Ticket ID</th>
                                    <th>Title</th>
                                    <th>status</th>
                                    <th>Action</th>
                                    <!-- <th>Status</th>                                   -->
                                </tr>
                            </thead>
                            <tbody>

                                                                                                                                                                                </tbody>
                        </table>

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
<input type="hidden" class="form-control" name="_token" value="G2W33csMffkFvUe3gPZXkTVxNkukHHJtITN0FOXM">
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
<!-- Modal -->
<div class="modal fade" id="open_ticket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Open a new ticket</h5>
    <button type="button" id="dismissmodal" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true" class="text-danger">&times;</span>
    </button>
  </div>
  <div class="modal-body">

    <!-- not ready to do form yet -->
   <!-- <form class="form-horizontal" method="POST" role="form"  > -->
        <input type="hidden" name="_token" value="G2W33csMffkFvUe3gPZXkTVxNkukHHJtITN0FOXM">                        <div class="form-group ">
            <label class="control-label">Title</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-pen-alt"></i></span>
                </div>
                <input type="text" class="form-control" name="title" value="" required autofocus>
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label">Message</label>
            <div class="input-group">
                <textarea name="msg" class="form-control" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" id="ticket-submit" class="btn btn-primary">Submit</button>

            <script>

                $('#ticket-submit').on('click',function(){
                    alert('Ticket sent to admin!');
                    $('#open_ticket').modal("hide");

                })
            </script>
        </div>
   <!-- </form> -->
  </div>

</div>
</div>
</div>

@include('livewire.layouts2.user.footer')
@include('livewire.layouts2.user.functions')
