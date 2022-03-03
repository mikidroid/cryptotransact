@include('livewire.layouts2.user.head')
@include('livewire.layouts2.user.sidebar')
@include('livewire.layouts2.user.banner')


<div id="wallet_wd" class="container popmsgContainer" >
    <div class="row padding_per_2_2">
      <div class="col-md-4">&emps;</div>
      <div class="col-md-4 popmsg-mobile card" align="Center">
        <div class="card-title">
          <br>
          <h3><b>Wallet Withdrawal</b></h3>
          <h5 class="text-danger"><b>Available Balance:</b></h5>
          			<h3 class="fw-bold">$ 0</h3>

          <hr>
        </div>
        <div class="card-body">
            Enter amount and select bank/wallet below
            <form id="wd_formssss" action="/user/wallet/wd" method="post">
                <div class="form-group" align="left">
                    <input type="hidden" class="form-control" name="_token" value="IcY9x2BEQEhUPzKJCF6SGpuxnRstZb21TAgzp3Mp">
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend " >
                      <span class="input-group-text span_bg">$</span>
                    </div>
                    <input id="wd_amt" type="text" class="form-control" name="amt"  required placeholder="Enter Amount to withdraw" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group" >
                    <div class="input-group-prepend " >
                      <span class="input-group-text span_bg"><i class="fa fa-home" ></i></span>
                    </div>
                    <select name="bank" class="form-control" required>

                    </select>
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
             <form id="wd_formssss" action="/user/ref/wd" method="post">
                <div class="form-group" align="left">
                    <input type="hidden" class="form-control" name="_token" value="IcY9x2BEQEhUPzKJCF6SGpuxnRstZb21TAgzp3Mp">
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend " >
                      <span class="input-group-text span_bg">$</span>
                    </div>
                    <input id="ref_amt" type="text" class="form-control" name="amt"  required placeholder="Enter Amount to withdraw" >
                  </div>
                </div>
                 <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend " >
                      <span class="input-group-text span_bg"><i class="fa fa-home"></i></span>
                    </div>
                    <select name="bank" class="form-control" required>

                    </select>
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
  </div>                    <div id="prnt"></div>
                    <div class="row">
                       <div class="col-sm-12 card">

                          <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="profile-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="bank-tab" data-toggle="pill" href="#bank" role="tab" aria-controls="bank" aria-selected="false">Banks</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="wallet-tab" data-toggle="pill" href="#wallet" role="tab" aria-controls="wallet" aria-selected="false">Wallets</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="kyc-tab" data-toggle="pill" href="#kyc" role="tab" aria-controls="kyc" aria-selected="false">KYC</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="sec-tab" data-toggle="pill" href="#sec" role="tab" aria-controls="sec" aria-selected="false">Security</a>
                            </li>

                          </ul>

                          <div class="tab-content" id="pills-tabContent">

                            <!-- profile panel -->

                            <div class="p-5 tab-pane fade show active" id="profile" role="tabpanel" >
                              <div class=" row form-group">

                                <div class="col-md-4">
                                  <div class="card">
                                      <div class="card-header">
                                          <div class="card-head-row">
                                              <div class="card-title text-center">Avatar</div>
                                              <div class="card-tools">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card-body">
                                          <div class="chart-container">
                                              <div class="comment-phara">
                                                  <div class="comment-adminpr" align="center">
                                                      <a id="selectPic" href="javascript:void(0)"  >
                                                                                                                        <img class="avatar_img" src="/img/any.png">
                                                                                                                </a>

                                                      <form id="form_profilepic" action="/user/upload/profile_pic" method="post" enctype="multipart/form-data">
                                                          <input type="hidden" name="_token" value="IcY9x2BEQEhUPzKJCF6SGpuxnRstZb21TAgzp3Mp">
                                                          <input type="file" name="prPic" id="prPic" class="display_not">
                                                      </form>
                                                  </div>
                                                  <br>

                                              </div>
                                              <div class="admin-comment-month" align="left" style="font-size: 16px;">

                                                  <div align="center"><b> Tee Pee </b></div>
                                                  <hr>


                                                  <div align="center" style="">
                                                      <b>Referral link:</b><br>
                                                      <div style="color: #c60; font-size: 13px; word-wrap: break-word;">
                                                          {{$user->ref_link ??''}}
                                                      </div>
                                                      <br>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                </div>

                                <div class="col-md-8">
                                  <div class="card">
                                      <div class="card-header">
                                          <div class="card-head-row">
                                              <div class="card-title">Profile Settings</div>
                                              <div class="card-tools">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card-body pb-0">
                                          <div class="datatable-dashv1-list custom-datatable-overright dashtwo-project-list-data">

                                              <div class="row">
                                                  <div class="col-lg-6">
                                                      <div class="form-group">
                                                          <label>First Name</label>
                                                          <input id="adr" type="text" value="{{$user->firstname ??''}}" class="form-control" name="firstname" readonly>
                                                      </div>
                                                  </div>
                                                  <div class="col-lg-6">
                                                      <div class="form-group">
                                                          <label>Last Name</label>
                                                          <input id="adr" type="text" value="{{$user->lastname ??''}}" class="form-control" name="lastname" readonly>
                                                      </div>
                                                  </div>

                                              </div>

                                              <div class="row">
                                                  <div class="col-lg-6">
                                                      <div class="form-group">
                                                          <label>Email Address</label>
                                                          <div class="input-group">
                                                              <input id="email" type="email" value="{{$user->email ??''}}" class="form-control" name="email" readonly>
                                                          </div>

                                                      </div>
                                                  </div>

                                                  <div class="col-lg-6">
                                                      <div class="form-group">
                                                          <label>Username</label>
                                                          <div class="input-group">
                                                              <input id="usn" type="text" value="{{$user->username ??''}}" class="form-control" name="usn" readonly>
                                                          </div>

                                                      </div>
                                                  </div>

                                              </div>

                                              <form class="" method="post" action="/user/{{$user->username}}/profile">
                                                @csrf
                                                  <div class="row">
                                                      <div class="col-lg-6">
                                                          <div class="form-group">

                                                            <label>Country</label>
                                                            <select id="country" class="form-control" name="country" >
                                                                                                                                                                                                                                                                                          <option value="1">Afghanistan</option>
                                                                                                                                                                                                                                                                                                  <option value="2">Albania</option>
                                                                                                                                                                                                                                                                                                  <option value="3">Algeria</option>
                                                                                                                                                                                                                                                                                                  <option value="4">American Samoa</option>
                                                                                                                                                                                                                                                                                                  <option value="5">Andorra</option>
                                                                                                                                                                                                                                                                                                  <option value="6">Angola</option>
                                                                                                                                                                                                                                                                                                  <option value="7">Anguilla</option>
                                                                                                                                                                                                                                                                                                  <option value="8">Antarctica</option>
                                                                                                                                                                                                                                                                                                  <option value="9">Antigua And Barbuda</option>
                                                                                                                                                                                                                                                                                                  <option value="10">Argentina</option>
                                                                                                                                                                                                                                                                                                  <option value="11">Armenia</option>
                                                                                                                                                                                                                                                                                                  <option value="12">Aruba</option>
                                                                                                                                                                                                                                                                                                  <option value="13">Australia</option>
                                                                                                                                                                                                                                                                                                  <option value="14">Austria</option>
                                                                                                                                                                                                                                                                                                  <option value="15">Azerbaijan</option>
                                                                                                                                                                                                                                                                                                  <option value="16">Bahamas The</option>
                                                                                                                                                                                                                                                                                                  <option value="17">Bahrain</option>
                                                                                                                                                                                                                                                                                                  <option value="18">Bangladesh</option>
                                                                                                                                                                                                                                                                                                  <option value="19">Barbados</option>
                                                                                                                                                                                                                                                                                                  <option value="20">Belarus</option>
                                                                                                                                                                                                                                                                                                  <option value="21">Belgium</option>
                                                                                                                                                                                                                                                                                                  <option value="22">Belize</option>
                                                                                                                                                                                                                                                                                                  <option value="23">Benin</option>
                                                                                                                                                                                                                                                                                                  <option value="24">Bermuda</option>
                                                                                                                                                                                                                                                                                                  <option value="25">Bhutan</option>
                                                                                                                                                                                                                                                                                                  <option value="26">Bolivia</option>
                                                                                                                                                                                                                                                                                                  <option value="27">Bosnia and Herzegovina</option>
                                                                                                                                                                                                                                                                                                  <option value="28">Botswana</option>
                                                                                                                                                                                                                                                                                                  <option value="29">Bouvet Island</option>
                                                                                                                                                                                                                                                                                                  <option value="30">Brazil</option>
                                                                                                                                                                                                                                                                                                  <option value="31">British Indian Ocean Territory</option>
                                                                                                                                                                                                                                                                                                  <option value="32">Brunei</option>
                                                                                                                                                                                                                                                                                                  <option value="33">Bulgaria</option>
                                                                                                                                                                                                                                                                                                  <option value="34">Burkina Faso</option>
                                                                                                                                                                                                                                                                                                  <option value="35">Burundi</option>
                                                                                                                                                                                                                                                                                                  <option value="36">Cambodia</option>
                                                                                                                                                                                                                                                                                                  <option value="37">Cameroon</option>
                                                                                                                                                                                                                                                                                                  <option value="38">Canada</option>
                                                                                                                                                                                                                                                                                                  <option value="39">Cape Verde</option>
                                                                                                                                                                                                                                                                                                  <option value="40">Cayman Islands</option>
                                                                                                                                                                                                                                                                                                  <option value="41">Central African Republic</option>
                                                                                                                                                                                                                                                                                                  <option value="42">Chad</option>
                                                                                                                                                                                                                                                                                                  <option value="43">Chile</option>
                                                                                                                                                                                                                                                                                                  <option value="44">China</option>
                                                                                                                                                                                                                                                                                                  <option value="45">Christmas Island</option>
                                                                                                                                                                                                                                                                                                  <option value="46">Cocos (Keeling) Islands</option>
                                                                                                                                                                                                                                                                                                  <option value="47">Colombia</option>
                                                                                                                                                                                                                                                                                                  <option value="48">Comoros</option>
                                                                                                                                                                                                                                                                                                  <option value="51">Cook Islands</option>
                                                                                                                                                                                                                                                                                                  <option value="52">Costa Rica</option>
                                                                                                                                                                                                                                                                                                  <option value="53">Cote D&#039;Ivoire (Ivory Coast)</option>
                                                                                                                                                                                                                                                                                                  <option value="54">Croatia (Hrvatska)</option>
                                                                                                                                                                                                                                                                                                  <option value="55">Cuba</option>
                                                                                                                                                                                                                                                                                                  <option value="56">Cyprus</option>
                                                                                                                                                                                                                                                                                                  <option value="57">Czech Republic</option>
                                                                                                                                                                                                                                                                                                  <option value="50">Democratic Republic Of The Congo</option>
                                                                                                                                                                                                                                                                                                  <option value="58">Denmark</option>
                                                                                                                                                                                                                                                                                                  <option value="59">Djibouti</option>
                                                                                                                                                                                                                                                                                                  <option value="60">Dominica</option>
                                                                                                                                                                                                                                                                                                  <option value="61">Dominican Republic</option>
                                                                                                                                                                                                                                                                                                  <option value="62">East Timor</option>
                                                                                                                                                                                                                                                                                                  <option value="63">Ecuador</option>
                                                                                                                                                                                                                                                                                                  <option value="64">Egypt</option>
                                                                                                                                                                                                                                                                                                  <option value="65">El Salvador</option>
                                                                                                                                                                                                                                                                                                  <option value="66">Equatorial Guinea</option>
                                                                                                                                                                                                                                                                                                  <option value="67">Eritrea</option>
                                                                                                                                                                                                                                                                                                  <option value="68">Estonia</option>
                                                                                                                                                                                                                                                                                                  <option value="69">Ethiopia</option>
                                                                                                                                                                                                                                                                                                  <option value="70">External Territories of Australia</option>
                                                                                                                                                                                                                                                                                                  <option value="71">Falkland Islands</option>
                                                                                                                                                                                                                                                                                                  <option value="72">Faroe Islands</option>
                                                                                                                                                                                                                                                                                                  <option value="73">Fiji Islands</option>
                                                                                                                                                                                                                                                                                                  <option value="74">Finland</option>
                                                                                                                                                                                                                                                                                                  <option value="75">France</option>
                                                                                                                                                                                                                                                                                                  <option value="76">French Guiana</option>
                                                                                                                                                                                                                                                                                                  <option value="77">French Polynesia</option>
                                                                                                                                                                                                                                                                                                  <option value="78">French Southern Territories</option>
                                                                                                                                                                                                                                                                                                  <option value="79">Gabon</option>
                                                                                                                                                                                                                                                                                                  <option value="80">Gambia The</option>
                                                                                                                                                                                                                                                                                                  <option value="81">Georgia</option>
                                                                                                                                                                                                                                                                                                  <option value="82">Germany</option>
                                                                                                                                                                                                                                                                                                  <option value="83">Ghana</option>
                                                                                                                                                                                                                                                                                                  <option value="84">Gibraltar</option>
                                                                                                                                                                                                                                                                                                  <option value="85">Greece</option>
                                                                                                                                                                                                                                                                                                  <option value="86">Greenland</option>
                                                                                                                                                                                                                                                                                                  <option value="87">Grenada</option>
                                                                                                                                                                                                                                                                                                  <option value="88">Guadeloupe</option>
                                                                                                                                                                                                                                                                                                  <option value="89">Guam</option>
                                                                                                                                                                                                                                                                                                  <option value="90">Guatemala</option>
                                                                                                                                                                                                                                                                                                  <option value="91">Guernsey and Alderney</option>
                                                                                                                                                                                                                                                                                                  <option value="92">Guinea</option>
                                                                                                                                                                                                                                                                                                  <option value="93">Guinea-Bissau</option>
                                                                                                                                                                                                                                                                                                  <option value="94">Guyana</option>
                                                                                                                                                                                                                                                                                                  <option value="95">Haiti</option>
                                                                                                                                                                                                                                                                                                  <option value="96">Heard and McDonald Islands</option>
                                                                                                                                                                                                                                                                                                  <option value="97">Honduras</option>
                                                                                                                                                                                                                                                                                                  <option value="98">Hong Kong S.A.R.</option>
                                                                                                                                                                                                                                                                                                  <option value="99">Hungary</option>
                                                                                                                                                                                                                                                                                                  <option value="100">Iceland</option>
                                                                                                                                                                                                                                                                                                  <option value="101">India</option>
                                                                                                                                                                                                                                                                                                  <option value="102">Indonesia</option>
                                                                                                                                                                                                                                                                                                  <option value="103">Iran</option>
                                                                                                                                                                                                                                                                                                  <option value="104">Iraq</option>
                                                                                                                                                                                                                                                                                                  <option value="105">Ireland</option>
                                                                                                                                                                                                                                                                                                  <option value="106">Israel</option>
                                                                                                                                                                                                                                                                                                  <option value="107">Italy</option>
                                                                                                                                                                                                                                                                                                  <option value="108">Jamaica</option>
                                                                                                                                                                                                                                                                                                  <option value="109">Japan</option>
                                                                                                                                                                                                                                                                                                  <option value="110">Jersey</option>
                                                                                                                                                                                                                                                                                                  <option value="111">Jordan</option>
                                                                                                                                                                                                                                                                                                  <option value="112">Kazakhstan</option>
                                                                                                                                                                                                                                                                                                  <option value="113">Kenya</option>
                                                                                                                                                                                                                                                                                                  <option value="114">Kiribati</option>
                                                                                                                                                                                                                                                                                                  <option value="115">Korea North</option>
                                                                                                                                                                                                                                                                                                  <option value="116">Korea South</option>
                                                                                                                                                                                                                                                                                                  <option value="117">Kuwait</option>
                                                                                                                                                                                                                                                                                                  <option value="118">Kyrgyzstan</option>
                                                                                                                                                                                                                                                                                                  <option value="119">Laos</option>
                                                                                                                                                                                                                                                                                                  <option value="120">Latvia</option>
                                                                                                                                                                                                                                                                                                  <option value="121">Lebanon</option>
                                                                                                                                                                                                                                                                                                  <option value="122">Lesotho</option>
                                                                                                                                                                                                                                                                                                  <option value="123">Liberia</option>
                                                                                                                                                                                                                                                                                                  <option value="124">Libya</option>
                                                                                                                                                                                                                                                                                                  <option value="125">Liechtenstein</option>
                                                                                                                                                                                                                                                                                                  <option value="126">Lithuania</option>
                                                                                                                                                                                                                                                                                                  <option value="127">Luxembourg</option>
                                                                                                                                                                                                                                                                                                  <option value="128">Macau S.A.R.</option>
                                                                                                                                                                                                                                                                                                  <option value="129">Macedonia</option>
                                                                                                                                                                                                                                                                                                  <option value="130">Madagascar</option>
                                                                                                                                                                                                                                                                                                  <option value="131">Malawi</option>
                                                                                                                                                                                                                                                                                                  <option value="132">Malaysia</option>
                                                                                                                                                                                                                                                                                                  <option value="133">Maldives</option>
                                                                                                                                                                                                                                                                                                  <option value="134">Mali</option>
                                                                                                                                                                                                                                                                                                  <option value="135">Malta</option>
                                                                                                                                                                                                                                                                                                  <option value="136">Man (Isle of)</option>
                                                                                                                                                                                                                                                                                                  <option value="137">Marshall Islands</option>
                                                                                                                                                                                                                                                                                                  <option value="138">Martinique</option>
                                                                                                                                                                                                                                                                                                  <option value="139">Mauritania</option>
                                                                                                                                                                                                                                                                                                  <option value="140">Mauritius</option>
                                                                                                                                                                                                                                                                                                  <option value="141">Mayotte</option>
                                                                                                                                                                                                                                                                                                  <option value="142">Mexico</option>
                                                                                                                                                                                                                                                                                                  <option value="143">Micronesia</option>
                                                                                                                                                                                                                                                                                                  <option value="144">Moldova</option>
                                                                                                                                                                                                                                                                                                  <option value="145">Monaco</option>
                                                                                                                                                                                                                                                                                                  <option value="146">Mongolia</option>
                                                                                                                                                                                                                                                                                                  <option value="147">Montserrat</option>
                                                                                                                                                                                                                                                                                                  <option value="148">Morocco</option>
                                                                                                                                                                                                                                                                                                  <option value="149">Mozambique</option>
                                                                                                                                                                                                                                                                                                  <option value="150">Myanmar</option>
                                                                                                                                                                                                                                                                                                  <option value="151">Namibia</option>
                                                                                                                                                                                                                                                                                                  <option value="152">Nauru</option>
                                                                                                                                                                                                                                                                                                  <option value="153">Nepal</option>
                                                                                                                                                                                                                                                                                                  <option value="154">Netherlands Antilles</option>
                                                                                                                                                                                                                                                                                                  <option value="155">Netherlands The</option>
                                                                                                                                                                                                                                                                                                  <option value="156">New Caledonia</option>
                                                                                                                                                                                                                                                                                                  <option value="157">New Zealand</option>
                                                                                                                                                                                                                                                                                                  <option value="158">Nicaragua</option>
                                                                                                                                                                                                                                                                                                  <option value="159">Niger</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                              selected
                                                                            <option selected></option>
                                                                                                                                                                                                                                                                                                  <option value="161">Niue</option>
                                                                                                                                                                                                                                                                                                  <option value="162">Norfolk Island</option>
                                                                                                                                                                                                                                                                                                  <option value="163">Northern Mariana Islands</option>
                                                                                                                                                                                                                                                                                                  <option value="164">Norway</option>
                                                                                                                                                                                                                                                                                                  <option value="165">Oman</option>
                                                                                                                                                                                                                                                                                                  <option value="166">Pakistan</option>
                                                                                                                                                                                                                                                                                                  <option value="167">Palau</option>
                                                                                                                                                                                                                                                                                                  <option value="168">Palestinian Territory Occupied</option>
                                                                                                                                                                                                                                                                                                  <option value="169">Panama</option>
                                                                                                                                                                                                                                                                                                  <option value="170">Papua new Guinea</option>
                                                                                                                                                                                                                                                                                                  <option value="171">Paraguay</option>
                                                                                                                                                                                                                                                                                                  <option value="172">Peru</option>
                                                                                                                                                                                                                                                                                                  <option value="173">Philippines</option>
                                                                                                                                                                                                                                                                                                  <option value="174">Pitcairn Island</option>
                                                                                                                                                                                                                                                                                                  <option value="175">Poland</option>
                                                                                                                                                                                                                                                                                                  <option value="176">Portugal</option>
                                                                                                                                                                                                                                                                                                  <option value="177">Puerto Rico</option>
                                                                                                                                                                                                                                                                                                  <option value="178">Qatar</option>
                                                                                                                                                                                                                                                                                                  <option value="49">Republic Of The Congo</option>
                                                                                                                                                                                                                                                                                                  <option value="179">Reunion</option>
                                                                                                                                                                                                                                                                                                  <option value="180">Romania</option>
                                                                                                                                                                                                                                                                                                  <option value="181">Russia</option>
                                                                                                                                                                                                                                                                                                  <option value="182">Rwanda</option>
                                                                                                                                                                                                                                                                                                  <option value="183">Saint Helena</option>
                                                                                                                                                                                                                                                                                                  <option value="184">Saint Kitts And Nevis</option>
                                                                                                                                                                                                                                                                                                  <option value="185">Saint Lucia</option>
                                                                                                                                                                                                                                                                                                  <option value="186">Saint Pierre and Miquelon</option>
                                                                                                                                                                                                                                                                                                  <option value="187">Saint Vincent And The Grenadines</option>
                                                                                                                                                                                                                                                                                                  <option value="188">Samoa</option>
                                                                                                                                                                                                                                                                                                  <option value="189">San Marino</option>
                                                                                                                                                                                                                                                                                                  <option value="190">Sao Tome and Principe</option>
                                                                                                                                                                                                                                                                                                  <option value="191">Saudi Arabia</option>
                                                                                                                                                                                                                                                                                                  <option value="192">Senegal</option>
                                                                                                                                                                                                                                                                                                  <option value="193">Serbia</option>
                                                                                                                                                                                                                                                                                                  <option value="194">Seychelles</option>
                                                                                                                                                                                                                                                                                                  <option value="195">Sierra Leone</option>
                                                                                                                                                                                                                                                                                                  <option value="196">Singapore</option>
                                                                                                                                                                                                                                                                                                  <option value="197">Slovakia</option>
                                                                                                                                                                                                                                                                                                  <option value="198">Slovenia</option>
                                                                                                                                                                                                                                                                                                  <option value="199">Smaller Territories of the UK</option>
                                                                                                                                                                                                                                                                                                  <option value="200">Solomon Islands</option>
                                                                                                                                                                                                                                                                                                  <option value="201">Somalia</option>
                                                                                                                                                                                                                                                                                                  <option value="202">South Africa</option>
                                                                                                                                                                                                                                                                                                  <option value="203">South Georgia</option>
                                                                                                                                                                                                                                                                                                  <option value="204">South Sudan</option>
                                                                                                                                                                                                                                                                                                  <option value="205">Spain</option>
                                                                                                                                                                                                                                                                                                  <option value="206">Sri Lanka</option>
                                                                                                                                                                                                                                                                                                  <option value="207">Sudan</option>
                                                                                                                                                                                                                                                                                                  <option value="208">Suriname</option>
                                                                                                                                                                                                                                                                                                  <option value="209">Svalbard And Jan Mayen Islands</option>
                                                                                                                                                                                                                                                                                                  <option value="210">Swaziland</option>
                                                                                                                                                                                                                                                                                                  <option value="211">Sweden</option>
                                                                                                                                                                                                                                                                                                  <option value="212">Switzerland</option>
                                                                                                                                                                                                                                                                                                  <option value="213">Syria</option>
                                                                                                                                                                                                                                                                                                  <option value="214">Taiwan</option>
                                                                                                                                                                                                                                                                                                  <option value="215">Tajikistan</option>
                                                                                                                                                                                                                                                                                                  <option value="216">Tanzania</option>
                                                                                                                                                                                                                                                                                                  <option value="217">Thailand</option>
                                                                                                                                                                                                                                                                                                  <option value="218">Togo</option>
                                                                                                                                                                                                                                                                                                  <option value="219">Tokelau</option>
                                                                                                                                                                                                                                                                                                  <option value="220">Tonga</option>
                                                                                                                                                                                                                                                                                                  <option value="221">Trinidad And Tobago</option>
                                                                                                                                                                                                                                                                                                  <option value="222">Tunisia</option>
                                                                                                                                                                                                                                                                                                  <option value="223">Turkey</option>
                                                                                                                                                                                                                                                                                                  <option value="224">Turkmenistan</option>
                                                                                                                                                                                                                                                                                                  <option value="225">Turks And Caicos Islands</option>
                                                                                                                                                                                                                                                                                                  <option value="226">Tuvalu</option>
                                                                                                                                                                                                                                                                                                  <option value="227">Uganda</option>
                                                                                                                                                                                                                                                                                                  <option value="228">Ukraine</option>
                                                                                                                                                                                                                                                                                                  <option value="229">United Arab Emirates</option>
                                                                                                                                                                                                                                                                                                  <option value="230">United Kingdom</option>
                                                                                                                                                                                                                                                                                                  <option value="231">United States</option>
                                                                                                                                                                                                                                                                                                  <option value="232">United States Minor Outlying Islands</option>
                                                                                                                                                                                                                                                                                                  <option value="233">Uruguay</option>
                                                                                                                                                                                                                                                                                                  <option value="234">Uzbekistan</option>
                                                                                                                                                                                                                                                                                                  <option value="235">Vanuatu</option>
                                                                                                                                                                                                                                                                                                  <option value="236">Vatican City State (Holy See)</option>
                                                                                                                                                                                                                                                                                                  <option value="237">Venezuela</option>
                                                                                                                                                                                                                                                                                                  <option value="238">Vietnam</option>
                                                                                                                                                                                                                                                                                                  <option value="239">Virgin Islands (British)</option>
                                                                                                                                                                                                                                                                                                  <option value="240">Virgin Islands (US)</option>
                                                                                                                                                                                                                                                                                                  <option value="241">Wallis And Futuna Islands</option>
                                                                                                                                                                                                                                                                                                  <option value="242">Western Sahara</option>
                                                                                                                                                                                                                                                                                                  <option value="243">Yemen</option>
                                                                                                                                                                                                                                                                                                  <option value="244">Yugoslavia</option>
                                                                                                                                                                                                                                                                                                  <option value="245">Zambia</option>
                                                                                                                                                                                                                                                                                                  <option value="246">Zimbabwe</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                         <div class="form-group">
                                                            <label>State/Province</label>
                                                            <input  id="states" class="form-control" value="{{$user->state ??''}}" name="state" required />

                                                          </div>
                                                      </div>

                                                  </div>
                                                  <div class="row">
                                                      <div class="col-lg-6">
                                                          <div class="form-group">
                                                              <label>Address</label>
                                                              <input id="adr" type="text" class="form-control" value="{{$user->address ??''}}" name="address" required>
                                                          </div>
                                                      </div>

                                                      <div class="col-lg-6">
                                                          <div class="form-group">
                                                              <label>Phone</label>

                                                                  <input id="phone" type="text" class="form-control" value="{{$user->phone ??''}}" name="phone" required>

                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-lg-12">
                                                          <div class="form-group">
                                                              <button class="collcc btn btn-info">Update Profile</button>
                                                          </div>
                                                      </div>

                                                  </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                                </div>

                              </div>
                            </div>

                            <!-- end of profile panel -->

                            <!-- Banks panel -->

                            <div class="p-5 tab-pane fade " id="bank" role="tabpanel" >
                              <div class="row form-group">
                                <div class="col-sm-12">
                                  <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Add Bank Details</div>
                                    </div>
                                    <div class="card-body">
                                        <form class="" method="post" action="/user/{{$user->username}}/update-bank">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Bank Name</label>

                                                        <input type="text" class="form-control" name="bank_name" value="{{$user->bank_name ??''}}" required placeholder="Bank name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Account Number</label>
                                                        <input type="text" class="form-control" name="acc_no" value="{{$user->acc_no ??''}}"  required placeholder="Account number">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Account Name</label>
                                                        <input type="text" class="form-control" name="acc_name" value="{{$user->acc_name ??''}}" required placeholder="Account Name">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <button class="collcc btn btn-info">Add Bank</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">My Bank Details</div>
                                    </div>
                                    <div class="card-body pb-0 table-responsive" >
                                       <table id="basic-datatables" class="display table table-striped table-hover" >
                                            <thead>
                                                <tr>
                                                    <th data-field="status" data-editable="true">Bank Name</th>
                                                    <th data-field="phone" data-editable="true">Acount Name</th>
                                                    <th data-field="date" data-editable="true">Acount Number</th>
                                                    <th data-field="company" >Updated at</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>{{$user->bank_name ??''}}</td>
                                                    <td>{{$user->acc_name ??''}}</td>
                                                    <td>{{$user->acc_no ??''}}</td>
                                                    <td>{{$user->updated_at ??''}}</td>
                                                </tr>
                                                                                            </tbody>
                                        </table>
                                        <br><br>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- End of bank Panel -->

                            <!-- wallets -->
                            <div class="p-5 tab-pane fade " id="wallet" role="tabpanel" >
                              <div class="row form-group">
                                <div class="col-sm-12">
                                  <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Add Crypto Wallet</div>
                                    </div>
                                    <div class="card-body">
                                        <form class="" method="post" action="/user/{{$user->username}}/update-crypto">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Coin Host</label>
                                                        <input type="text" class="form-control" name="coin_host" required placeholder="Exp. Blockchain, Coinbase Paxful">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Wallet</label>
                                                        <input type="text" class="form-control" name="wallet_address"  required placeholder="Wallet address">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <button class="collcc btn btn-info">Add Wallet Address</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">My Wallet Addresses</div>
                                    </div>
                                    <div class="card-body pb-0 table-responsive" >
                                       <table id="basic-datatables" class="display table table-striped table-hover" >
                                            <thead>
                                                <tr>
                                                    <th>Coin</th>
                                                    <th>Coin Host</th>
                                                    <th>Wallet Address</th>
                                                    <th>Updated at</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>BTC</td>
                                                    <td>{{$user->coin_host ??''}}</td>
                                                    <td>{{$user->wallet_address ??''}}</td>
                                                    <td>{{$user->updated_at ??''}}</td>
                                                </tr>
                                                                                            </tbody>
                                        </table>
                                        <br><br>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- End of wallets -->

                            <!-- KYC -->
                            <div class="p-5 tab-pane fade " id="kyc" role="tabpanel" >
                                                              <form id="id_verify" class="" method="post" action="https://crestcredits.com/user/kyc/upload" enctype="multipart/form-data">
                                  <div class="row form-group">
                                    <div class="col-sm-6">
                                      <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">KYC Level Upgrade</div>
                                        </div>
                                        <div class="card-body">

                                          <div class="row">
                                            <div class="col-lg-12">
                                                <div id="selfie" class="">
                                                  <div class="form-group" align="center">
                                                    <h3>Upload Selfie</h3>
                                                    <hr>
                                                    <p class="text-warning " align="left">
                                                     Take a selfie of yourself holding your ID with your full face clearly shown
                                                    </p>
                                                    <!--<p class="text-warning " align="left">-->
                                                    <!--  Hold a paper clearly written "HTTPS://CRESTCREDITS.COM" <br> and take a selfie with it. <br>Must show your full face and your arm raised.-->
                                                    <!--</p>-->
                                                    <img src="/storage/card/{{$user->avatar_url}}" class="" align="center">
                                                    <input type="file" class="form-control upload_inp mt-2" name="avatar_url" required>
                                                  </div>
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                  <h3>Identity verification</h3>
                                                  <p>
                                                    Valid documents are: Country ID Card, Internattional Passport and Drivers Licence
                                                  </p>
                                                </div>
                                                <div class="form-group mt-4">
                                                  <label>Card Type</label>
                                                  <select id="card_select" name="id_type" class="form-control" required="required">
                                                    <option selected >Select ID type</option>
                                                    <option value="Other ID">Other ID</option>
                                                    <option value="International passport">International Passport</option>
                                                    <option value="Driver's licence">Driver's Licence</option>
                                                  </select>
                                                </div>
                                                <hr>
                                                <div id="card_cont" class="cont_display_none">
                                                  <div class="form-group mt-3">
                                                    <label>Card Front</label>
                                                    <br>
                                                    <img src="/storage/card/{{$user->card_front ??''}}" class="img_card_temp" width="100%">
                                                    <input type="file" class="form-control upload_inp mt-2" name="card_front" >
                                                  </div>

                                                  <hr>
                                                  <div class="form-group mt-3">
                                                    <label>Card Back</label>
                                                    <br>
                                                    <img src="/storage/card/{{$user->card_back ??''}}" class="img_card_temp" width="100%">
                                                    <input type="file" class="form-control mt-2" name="card_back" >
                                                  </div>
                                                </div>



                                            </div>
                                          </div>

                                        </div>
                                      </div>
                                    </div>

                                    <div class="col-sm-6">
                                      <div class="card">
                                        <div class="card-header">
                                          <div class="card-title">Proof of Address</div>
                                        </div>
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="row">
                                              <div class="col-lg-12">

                                                  <div class="form-group">
                                                    <h3></h3>
                                                    <p>
                                                      Valid documents are: Utility bill and Bank statement
                                                    </p>
                                                    <input type="file" class="form-control" name="utility_file" required >
                                                  </div>

                                              </div>
                                            </div>
                                          </div>

                                        </div>
                                      </div>

                                    </div>

                                    <div class="col-sm-12 mt-5">
                                      <div class="form-group">
                                        <button class="collcc btn btn-info float-right">Upload</button>
                                      </div>
                                    </div>

                                  </div>
                                </form>
                                                          </div>
                            <!-- End of KYC -->


                            <!-- Security -->
                            <div class="p-5 tab-pane fade " id="sec" role="tabpanel" >
                              <div class="row form-group">

                                <div class="col-sm-6">
                                  <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">2FA Security</div>
                                    </div>
                                    <div class="card-body">

                                      <div class="row">
                                          <div id="sec_enable_div" class="col-lg-12">
                                            <div class="form-group ">
                                              <div>
                                                <label>Enable/Disable</label>
                                              </div>

                                              <div class="btn-group btn-group-toggle btn-lg p-0 ">
                                                <label class="btn btn_grey" onclick="s_2fa('enable')">
                                                  <input type="radio" name="options" autocomplete="off" > Enable
                                                </label>
                                                <label class="btn btn-success text-white" onclick="s_2fa('disable')">
                                                  <input type="radio" name="options" autocomplete="off" > Disable
                                                </label>
                                              </div>
                                              <div class="width_100per float-right">
                                                <small class="float-right mt-4">
                                                  Current status:  Disable                                                </small>
                                              </div>

                                            </div>
                                          </div>

                                          <div class="col-sm-12">
                                            <div id="google_2fa_cont" class="cont_display_none ">
                                              <div class="card-header">
                                                  <div class="card-title">QR CODE</div>
                                              </div>
                                              <div id="qrcode_2fa_div" class="card-body pb-0 table-responsive text-center" >
                                                <div class="form-group" align="center">
                                                  <img id="img_2fa" src="" class="qr_code_img " align="center">
                                                </div>
                                                <div class="form-group">
                                                  <p>
                                                    Scan the QR CODE with Google Authenticator and enter the coe dispayed in the box below.
                                                  </p>
                                                </div>
                                                <form action="https://crestcredits.com/user/verify/sec_2fa" method="post">
                                                  <div class="form-group">
                                                    <input type="text" class="form-control" name="fa_code" required placeholder="6-digit OTP">
                                                    <input id="seccode" type="hidden" class="form-control" value="" name="seccode" required placeholder="">
                                                  </div>
                                                  <div class="form-group">
                                                    <button class="collcc btn btn-info">Activate</button>
                                                  </div>
                                                </form>
                                                <br>
                                              </div>
                                            </div>
                                          </div>

                                          <div class="col-sm-12">
                                            <div id="google_2fa_disable" class="cont_display_none ">
                                              <div class="card-header">
                                                  <div class="card-title">Verify OTP</div>
                                              </div>
                                              <div id="qrcode_2fa_div" class="card-body pb-0 table-responsive text-center" >
                                                <div class="form-group">
                                                  <p>
                                                    Pleaae enter Google Authenticator OTP.
                                                  </p>
                                                </div>
                                                <form action="https://crestcredits.com/user/disable/sec_2fa" method="post">
                                                  <div class="form-group">
                                                    <input type="text" class="form-control" name="fa_otp" required placeholder="6-digit OTP">
                                                  </div>
                                                  <div class="form-group">
                                                    <button class="collcc btn btn-info">Disable</button>
                                                  </div>
                                                </form>
                                                <br>
                                              </div>
                                            </div>
                                          </div>

                                      </div>

                                    </div>
                                  </div>
                                </div>

                                <div class="col-sm-6">
                                  <div class="card">
                                    <div class="card-header">
                                        <div class="card-head-row">
                                            <div class="card-title">Change Password</div>
                                            <div class="card-tools">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form class="" method="post" action="/user/change/pwd">
                                            <input type="hidden" name="_token" value="IcY9x2BEQEhUPzKJCF6SGpuxnRstZb21TAgzp3Mp">
                                            <div class="form-group">
                                                <label>Old Password</label>
                                                <input type="password" class="form-control" name="oldpwd" placeholder="Your current password" required>
                                            </div>
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" class="form-control" name="newpwd" placeholder="New Password" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" class="form-control" name="cpwd" placeholder="Confirm Password" required>
                                            </div>
                                            <div class="form-group" align="">
                                               <button class="collcc btn btn-info">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                            <!-- End of Security -->
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
              <input type="hidden" class="form-control" name="_token" value="IcY9x2BEQEhUPzKJCF6SGpuxnRstZb21TAgzp3Mp">
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

@include('livewire.layouts2.user.footer')
@include('livewire.layouts2.user.functions')
