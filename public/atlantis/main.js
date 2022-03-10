"use strict";

var p_min = 0;
var p_max = 0;


function confirm_inv(id, pn, p, di, min, max, wallet)
{
	p_min = min;
	p_max = max;

	$('#WalletBal').text(Math.fround(wallet).toFixed(2));
	$('#pack_inv').text(pn);
	$('#period').text(p);
	$('#intr').text(Math.fround(di*p*100).toFixed(2));
	$('#min').text(min);
	$('#max').text(max);
	$('#p_id').val(id);

	$('#popInvest').show();

}

////////////////////////////////// user /////////////////////////////////////////////////////////////

$(document).ready(function(){
	$('#country').on('change', function(){
		var data = $('#country').val();
		$('#p_loading').show();
		$.ajax
		({
		    url: "/user/get/states/"+data,
		    type: "get",
		    // dataType: 'json',
		    data: data,
		    success:function(result)
		    {
		        var str = "";
		        var dt = JSON.parse(result);
		        $('#states').html("<option selected disabled>select state</option>");

		        for(var i = 0; i < dt.length; i++ )
		        {
		        	str = str + '<option value="'+dt[i].id+'">'+dt[i].name+'</option>';
		        }
		        $('#states').append(str);
		        // alert('here');
		    },
		    error: function (xhr) {
		    	$('#p_loading').hide();
		        alert(xhr.responseText)
		    }

		});

		$.ajax
		({
		    url: "/user/get/countryCode/"+data,
		    type: "get",
		    data: data,
		    success:function(result)
		    {
		        $('#cCode').val('+'+result);
		        $('#countryCode').html('+'+result);
		        $('#p_loading').hide();
		    },
		    error: function (xhr) {
		    	$('#p_loading').hide();
		        alert(xhr.responseText);
		    }

		});

		// $('#p_loading').hide();
	});
});



$('#selectPic').on ('click', function(){
	$('#prPic').click();
});

$('#prPic').on('change', function(){
	$('#form_profilepic').submit();
});




function inv(id, pn, p, di, min, max, wallet)
{
	alert("here");
}

function read(id, sta)
{
	if(sta == "yes")
	{
		$.ajax
	    ({
	        url: "/user/update/readmsg/"+id,
	        type: "get",
	        data: '',
	        success:function(result)
	        {
	        	var ht = $('#dis_not'+id).html();
	            $('#read_not').fadeOut(1000, function(){
	            	$('#read_not').html(ht);
	            });
	            $('#read_not').fadeIn(2000);

	        },
	        error: function (xhr) {

	        }

	    });
	}
}




$(document).ready(function()
{
    $('#invdata').show();
});

$(document).ready(function()
{
	$('#wd_ref_bal').click( function(){
		$('#ref_wd').show();
	});

	$('#wd_bal').click( function(){
		$('#wallet_wd').show();
	});

	$('#pay_with_bank').click( function(){
		$('#pay_cont').hide();
		$('#pay_with_bank_pop').fadeIn(1000);
	});

	$('#pay_with_card').click( function(){
		$('#pay_cont').hide();
		$('#pay_with_card_pop').fadeIn(1000);
	});

	$('#pay_with_btc').click( function(){
		$('#pay_cont').hide();
		$('#pay_with_btc_pop').fadeIn(1000);
        // alert("Coming soon........")
	});
});

$(document).ready(function () {

    if ($(window).width() < 1000 ) {
        $('.mob_d').css({'margin-top':'150px'});
    }
    else {
        $(".mob_drop").hide();
    }

    $(window).resize(function()     {

        if ($(window).width() < 1000 ) {
            $('.mob_d').css({'margin-top':'150px'});
        }
        else {

            $('.mob_d').css({'margin-top':''});
        }

    });


});

function view_pop(id)
{

	var atr = $('#img'+id).attr('src');
	$('#img_pop').attr('src', atr) ;
	$('#dep_pop').fadeIn(1000);

}



function copy_txt() {
    /* Get the text field */
    var copyText = document.getElementById("reflnk");

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /*For mobile devices*/

    /* Copy the text inside the text field */
    document.execCommand("copy");

    /* Alert the copied text */
    alert("Referral Link Copied, Share with Friends and Family to Earn 4% of their Investment");
  }







  function load_chat()
  {
      var id = $('#ticket_id').val();
      $.ajax
      ({
          url: '/ticket/chat/'+id,
          type: 'get',
          data: {"id": id},
          dataType: 'json',
          success:function(result)
          {
              if(Object.keys(result).length > 0)
              {
                  var i = 0;
                  while(i < Object.keys(result).length)
                  {
                      $('#chat_msg_container').append(
                          '<div class="row col-sm-12">\
                              <p class="mg_top_30">\
                                 <img src="/img/logo.png" alt="..." class="avatar_chat rounded-circle">\
                              </p>\
                              <div class="talk-bubble tri-right left-top ">\
                                <div class="talktext">\
                                  <p class="p-0">\
                                      '+result[i].message+'\
                                  </p>\
                                  <small class="font_10 p-0 float-right"><i>'+result[i].created_at+'</i></small>\
                                </div>\
                              </div>\
                          </div>'
                      );
                      i = i+1;
                  }
                  $('#buzzer').get(0).play();
              }

          },
          error: function (xhr) {

          }
      });
  }

function load_chat_adm()
{
    var id = $('#ticket_id').val();
    $.ajax
    ({
        url: '/support/chat/'+id,
        type: 'get',
        data: {"id": id},
        dataType: 'json',
        success:function(result)
        {
            if(Object.keys(result).length > 0)
            {
                var i = 0;
                while(i < Object.keys(result).length)
                {
                    $('#chat_msg_container').append(
                        '<div class="row col-sm-12">\
                            <p class="mg_top_30">\
                               <img src="/img/profile/'+result[i].user.img+'" alt="..." class="avatar_chat rounded-circle">\
                            </p>\
                            <div class="talk-bubble tri-right left-top ">\
                              <div class="talktext">\
                                <p class="p-0">\
                                    '+result[i].message+'\
                                </p>\
                                <small class="font_10 p-0 float-right"><i>'+result[i].created_at+'</i></small>\
                              </div>\
                            </div>\
                        </div>'
                    );
                    i = i+1;
                }
                $('#buzzer').get(0).play();
            }

        },
        error: function (xhr) {

        }
    });
}

function prvColor(id, input){
	$("#"+id+"color").css({'background-color': $("#input_"+input).val()});
}

function checkedOnOff(id)
{
	if($("#"+id).val() == 1)
	{
		$("#"+id).val(0);
	}
	else
	{
		$("#"+id).val(1);
	}
}

function s_2fa(opr)
{
    // window.location.href='/user/fa/'+opr;
    $('#p_loading').show();
    $.ajax
    ({
        url: '/user/fa/'+opr,
        type: "get",
        data: '',
        dataType: 'json',
        success:function(result)
        {
            $('#p_loading').hide();
            if(result.msg == 'suc')
            {   $('#sec_enable_div').hide();
                $('#google_2fa_disable').hide();
                $('#seccode').val(result.secret)  ;
                $('#img_2fa').attr('src', result.QR_Image)  ;
                $('#google_2fa_cont').show();
            }
            if(result.msg == 'disable_2fa')
            {
                $('#sec_enable_div').hide();
                $('#google_2fa_cont').hide();
                $('#google_2fa_disable').show();
            }
            if(result.msg == 'exist')
            {
                $('#err').html('Two factor authentication is active');
                $('#err').show().animate({ width: "30%" }, "1000").delay(2000).animate({ width: "-50px" }, "1000").fadeOut(50);
            }
            if(result.msg == 'disable')
            {
                $('#err').html('Two factor authentication is not active');
                $('#err').show().animate({ width: "30%" }, "1000").delay(2000).animate({ width: "-50px" }, "1000").fadeOut(50);
            }
        },
        error: function (xhr) {
            $('#err').html(xhr);
            $('#p_loading').hide();
            $('#err').show().animate({ width: "30%" }, "1000").delay(2000).animate({ width: "-50px" }, "1000").fadeOut(50);
        }
    });
}

$(document).ready( function(){
    $('#card_select').change(function(){
        if($('#card_select').val() == 'idcard_op' || $('#card_select').val() == 'driver_op')
        {
            $('#pass_cont').hide();
            $('#card_cont').show();
        }
        else if($('#card_select').val() == 'passport_op')
        {
            $('#card_cont').hide();
            $('#pass_cont').show();
        }
    })
});

function set_inputs(num)
{
    var i = 1;
    var div_str = '';
    for(i = 1; i<=num; i++)
    {
        div_str = div_str+'<div class="col-sm-6 mt-3">\
                                <h6> Level '+i+' Referral Percentage </h6>\
                                <input type="number" step="any" name="'+i+'" value="" class="form-control" placeholder="" required>\
                            </div>';
    }
    $('#referal_levels_div').html(div_str);
    $('#warning_div').show();
}

$('#referal_system').on('change', function(){
    if($('#referal_system').val() == 'Multi_level')
    {
        $('#Multi_level_settings').show();
    }
    else
    {
        $('#Multi_level_settings').hide();
    }
});
