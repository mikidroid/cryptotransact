@include('livewire.layouts2.user.head')
@include('livewire.layouts2.user.sidebar')
@include('livewire.layouts2.user.banner')

<div id="prnt"></div>

          <div class="row">
            <div class="col-md-4">
              <div class="card">

                <div class="card-header">
                  <div class="card-title"> Fund Transfer </div>
                </div>

                <div class="card-body pb-0">
                                        <div class="">
                        <form action="/user/send/fund" method="post" enctype="multipart/form-data">
                          <div class="form-group" align="left">
                              <input type="hidden" class="regTxtBox" name="_token" value="MmJqQsLY5MS8Ab2QwP3MchqiHcg8ltrPXyxewBcH">
                          </div>
                          <div class="input-group pad_top10" >
                            <div class="input-group-prepend" >
                              <span class="input-group-text "><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="usn"  required placeholder="Username" >
                          </div>
                          <div class="input-group pad_top10">
                            <div class="input-group-prepend" >
                              <span class=" input-group-text ">$</span>
                            </div>
                            <input type="text" class="form-control" name="s_amt"  required placeholder="Enter amount you want to send" >
                          </div>

                          <div class="form-group" align="">
                            <br><br>
                              <button class="btn btn_blue">Send</button>
                              <br>
                          </div>
                        </form>
                        <br><br>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Transfer History </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive"><table id="basic-datatables" class="display table table-striped table-hover" >
        <thead>
            <tr>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
                <th>Date</th>
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

          <div class="row">

          </div>

        </div>
      </div>

@include('livewire.layouts2.user.footer')
@include('livewire.layouts2.user.functions')
