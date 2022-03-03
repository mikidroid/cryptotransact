<script type="text/javascript">
	// Init slick slider + animation
	$(document).ready(function(){

  $(".testimonials").slick({
    autoplay:true,
    autoplaySpeed:10000,
    speed:600,
    slidesToShow:1,
    slidesToScroll:1,
    pauseOnHover:false,
    dots:false,
	arrows: false,
	adaptiveHeight: true
  });

})
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f6dc1ca4704467e89f238a5/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<div class="modal" id="myCookie">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><i class="fas fa-shield-alt mr-2 text-danger" style="font-size: 32px;"></i>This website uses cookies</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p>By clicking “Continue”, you agree to the default cookie settings on our website.</p>
        <button type="button" class="cookieBtn btn btn-success border-0 mb-3">Continue</button>
        <p>{{env('APP_NAME')}} uses cookies to ensure that we provide you with the best experience while visiting our website. Some of the cookies are needed to provide essential features, such as login sessions, and cannot be disabled. Other cookies help us improve our website’s performance and your experience through personalising content, providing social media features and analysing our traffic. Such cookies may also include third-party cookies, which might track your use of our website. You may change your cookie settings at any time.</p>
      </div>
      <div class="modal-footer d-flex">
        <p class="m-0">Read more, or change your <a href="cookies.html">cookie settings</a>.</p>
        <img src="img/logo.png" style="width: 40px; height: 40px" class="ml-auto"/>
      </div>

    </div>
  </div>
</div>

<script>
    $(document).ready(function(){
        if (getCookie("cookiePopup") == null){
            $("#myCookie").modal();
        }
        $(".cookieBtn").click(function () {
          $("#myCookie").modal("hide");
            setCookie("cookiePopup", 0);
        });
    });

    function setCookie(c_name, value, exdays) {
        var exdate = new Date();
        exdate.setDate(exdate.getDate() + exdays);
        var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
        document.cookie = c_name + "=" + c_value;
    }
    function getCookie(c_name) {
        var i, x, y, ARRcookies = document.cookie.split(";");
        for (i = 0; i < ARRcookies.length; i++) {
            x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
            y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
            x = x.replace(/^\s+|\s+$/g, "");
            if (x == c_name) {
                return unescape(y);
            }
        }
    }
    </script>


<script>
new WOW().init();
</script>
<script>
  (function(b,i,t,C,O,I,N) {
    window.addEventListener('load',function() {
      if(b.getElementById(C))return;
      I=b.createElement(i),N=b.getElementsByTagName(i)[0];
      I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
    },false)
  })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
</script>

<div id="google_translate_element" style="display:none"></div>
<script type="text/javascript">

function readCookie(name) {
    var c = document.cookie.split('; '),
    cookies = {}, i, C;

    for (i = c.length - 1; i >= 0; i--) {
        C = c[i].split('=');
        cookies[C[0]] = C[1];
     }

     return cookies[name];
}
var lang = readCookie('googtrans').slice(-2);
$('#language option[value="'+lang+'"]').prop('selected', true);

function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: "en"}, 'google_translate_element');
}

function changeLanguageByButtonClick() {
  var language = document.getElementById("language").value;
  var selectField = document.querySelector("#google_translate_element select");
  for(var i=0; i < selectField.children.length; i++){
    var option = selectField.children[i];
    // find desired langauge and change the former language of the hidden selection-field
    if(option.value==language){
       selectField.selectedIndex = i;
       // trigger change event afterwards to make google-lib translate this side
       selectField.dispatchEvent(new Event('change'));
       break;
    }
  }
}

function changeLanguageByButtonClick2() {
  var language = document.getElementById("language2").value;
  var selectField = document.querySelector("#google_translate_element select");
  for(var i=0; i < selectField.children.length; i++){
    var option = selectField.children[i];
    // find desired langauge and change the former language of the hidden selection-field
    if(option.value==language){
       selectField.selectedIndex = i;
       // trigger change event afterwards to make google-lib translate this side
       selectField.dispatchEvent(new Event('change'));
       break;
    }
  }
}
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
