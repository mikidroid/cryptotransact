@include('livewire.layouts2.admin.head')
@include('livewire.layouts2.admin.sidebar')
@include('livewire.layouts2.admin.banner')

<div id="prnt"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">All Users</div>
                                </div>
                                <div class="card-body pb-5">


                                            <div class="table-responsive mt-5">
                                                <table id="basic-datatables" class="display table table-striped table-hover" >
                                                    <thead>
                                                        <tr>
                                                            <!-- <th data-field="state" data-checkbox="true"></th> -->

                                                            <th>Username</th>
                                                            <th>Email</th>
                                                            <th>Phone</th>
                                                            <th>Balance</th>
                                                            <th>Investments</th>
                                                            <th>Withdrawals</th>
                                                            <th>Date Registered</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                                @foreach ($users as $user)
                                                                <tr>
                                                                    <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                                    <td>{{$user->username}}</td>
                                                                    <td>{{$user->email}}</td>
                                                                    <th>{{$user->phone}}</th>
                                                                    <td>${{$user->balance}}</td>
                                                                    <td>{{$user->investments}}</td>
                                                                    <td>{{$user->withdrawals}}</td>
                                                                    <td>{{$user->created_at}}</td>
                                                                </tr>
                                                                @endforeach
                                                      </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                            <th>Username</th>
                                                            <th>Email</th>
                                                            <th>Phone</th>
                                                            <th>Balance</th>
                                                            <th>Investments</th>
                                                            <th>Withdrawals</th>
                                                            <th>Date Registered</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>

                                                <br><br>
                                            </div>





                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


@include('livewire.layouts2.admin.footer')
@include('livewire.layouts2.admin.functions')
