@include('livewire.layouts2.user.head')
@include('livewire.layouts2.user.sidebar')
@include('livewire.layouts2.user.banner')

<div id="prnt"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title">
                                            Referral link:
                                            <a href="/register/teepee" class="text-danger" id="reflnk" >
                                                <small>{{$user->ref_link}}</small>
                                            </a>
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
                                    <div class="card-title">My Downlines</div>
                                </div>
                                <div class="card-body pb-5">


                                            <div class="table-responsive mt-5">
                                                <table id="basic-datatables" class="display table table-striped table-hover" >
                                                    <thead>
                                                        <tr>
                                                            <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                            <th>Name</th>
                                                            <th>Username</th>
                                                            <th>Level</th>
                                                            <th>Amount Earned</th>
                                                            <th>Investment</th>
                                                            <th>Date Registered</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                                <tr>
                                                                <td colspan="4">No data</td>
                                                                </tr>
                                                      </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                            <th>Name</th>
                                                            <th>Username</th>
                                                             <th>Level</th>
                                                            <th>Amount Earned</th>
                                                            <th>Investment</th>
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


@include('livewire.layouts2.user.footer')
@include('livewire.layouts2.user.functions')
