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
                        <form action="/user/activity" method="post" enctype="multipart/form-data">
                            @csrf
                        <input type="hidden" class="form-control" name="type" value="transfer">
                          <div class="form-group" align="left">
                          <div class="input-group pad_top10" >
                            <div class="input-group-prepend" >
                              <span class="input-group-text "><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="receiver"  required placeholder="Username" >
                          </div>
                          <div class="input-group pad_top10">
                            <div class="input-group-prepend" >
                              <span class=" input-group-text ">$</span>
                            </div>
                            <input type="number" class="form-control" name="amount"  required placeholder="Enter amount you want to send" >
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
       @foreach ($transfers as $inv)
                        <tr>
                            <td>{{$inv->sender}}</td>
                            <td>{{$inv->receiver}}</td>
                            <td>${{$inv->amount}}</td>
                            <td>{{$inv->created_at}}</td>
                           </tr>
                        @endforeach


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
