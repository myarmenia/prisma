  
  
  
  // This is called with the results from from FB.getLoginStatus().

  function statusChangeCallback(response) {

    //console.log('statusChangeCallback');

    //console.log(response);

    // The response object is returned with a status field that lets the

    // app know the current login status of the person.

    // Full docs on the response object can be found in the documentation

    // for FB.getLoginStatus().

    if (response.status === 'connected') {

      // Logged into your app and Facebook.

      testAPI();

    } else if (response.status === 'not_authorized') {

      // The person is logged into Facebook, but not your app.

      document.getElementById('status').innerHTML = 'Please log ' +

        'into this app.';

    } else {

      // The person is not logged into Facebook, so we're not sure if

      // they are logged into this app or not.

      document.getElementById('status').innerHTML = 'Please log ' +

        'into Facebook.';

    }

  }



  // This function is called when someone finishes with the Login

  // Button.  See the onlogin handler attached to it in the sample

  // code below.

  function checkLoginState() {

    FB.getLoginStatus(function(response) {

      statusChangeCallback(response);

    });

  }



  window.fbAsyncInit = function() {

  FB.init({

    appId      : '1712137872341386',

    cookie     : true,  // enable cookies to allow the server to access 

                        // the session

    xfbml      : true,  // parse social plugins on this page

    version    : 'v2.5' // use graph api version 2.5

  });



  // Now that we've initialized the JavaScript SDK, we call 

  // FB.getLoginStatus().  This function gets the state of the

  // person visiting this page and can return one of three states to

  // the callback you provide.  They can be:

  //

  // 1. Logged into your app ('connected')

  // 2. Logged into Facebook, but not your app ('not_authorized')

  // 3. Not logged into Facebook and can't tell if they are logged into

  //    your app or not.

  //

  // These three cases are handled in the callback function.



  FB.getLoginStatus(function(response) {

    statusChangeCallback(response);

  });



  };



  // Load the SDK asynchronously

  (function(d, s, id) {

    var js, fjs = d.getElementsByTagName(s)[0];

    if (d.getElementById(id)) return;

    js = d.createElement(s); js.id = id;

   // js.src = "//connect.facebook.net/en_US/sdk.js";

    fjs.parentNode.insertBefore(js, fjs);

  }(document, 'script', 'facebook-jssdk'));



  // Here we run a very simple test of the Graph API after login is

  // successful.  See statusChangeCallback() for when this call is made.

  function testAPI() {

    FB.api('/me', 'GET', {fields: 'first_name,last_name,name,id,email' }, function(response) {

     // console.log(JSON.stringify(response));

     // console.log('Successful login for: ' + response.name);



    });

  }
  

	



  function f1() {

    FB.api('/me', 'GET', {fields: 'first_name,last_name,name,id,email' }, function(response) {

    var dd = response.name;

    var bb = response.email;

    var request4;

    request4 = $.ajax({

        url: "log-fbuser.php",

        type: "post",

        data: {name: dd, email:bb},

    });

    request4.done(function (response, textStatus, jqXHR){ 

      window.location.href = "/home.php?cat=html";

      //  console.log(response);

    });

    request4.fail(function (jqXHR, textStatus, errorThrown){

        console.error(

            "The following error occurred: "+

            textStatus, errorThrown

        );

    });













      return dd;

    });

  }

















function opentask() {

    $("#open").hide();

    $("#close").show();

    $(".homework").slideDown();

}

function closetask() {

    $("#open").show();

    $("#close").hide();

    $(".homework").slideUp();

}


function selectvideo(id,number,cat) {
	
	$.post("select-video.php",{id:id},function(arg){			
	        $("#forr").html(arg);

        
		
	
})
}
	
	function selecttask(id,name) {
	
	$.post("select-task.php",{id:id, name:name},function(arg){			
	        $("#forr").html(arg);

        
		
	
})

}
function workfadeIn(){
	 $("#help").fadeIn();
}


/*function selectvideo(id,number,cat) {
//alert (id+number+cat)
var request;

    request = $.ajax({

        url: "select-video.php",

        type: "post",

        data: {id:id},

    });

    request.done(function (response, textStatus, jqXHR){

        var res = $.parseJSON(response);

        $("#source").slideUp(500);

        $("#source").html(res[0]);

        $("#source").slideDown(500);

        $(".vtitle2").html(res[1]);

        $("#task_video").html(res[2]);

        $("#answer").html(res[3]);

        $("#code").html(res[4]);



        $("#iddidi").html(res[6]);



        $(".vtr a").css("color", "white");

        $("#"+id).css("color", "#2f8baf");

        $("#lid").html(res[5]);

        $("#upbutton").html('<div class="btn btn-primary vbtn" onclick="addcomment('+res[5]+')">Ավելացնել Մեկնաբանություն</div><br/><br/><br/><br/>');

        $(".itask").html('');

        $(".itask").load('homework/'+cat+'/'+number+'.php');

var request6 = $.ajax({



        url: "updatecomment.php",

        type: "post",

data: {id:id},

    });

    request6.done(function (response, textStatus, jqXHR){

      var res = response;

        $("#ucomm").html(res); 

        //console.log(res);

    });

    request6.fail(function (jqXHR, textStatus, errorThrown){

        console.error(

            "The following error occurred: "+

            textStatus, errorThrown

        );

    });













       // console.log(res);

    });

    request.fail(function (jqXHR, textStatus, errorThrown){

        console.error(

            "The following error occurred: "+

            textStatus, errorThrown

        );

    });

}*/

function logi() {

$('#showlog').fadeIn().addClass('mu-search-open');

//$("#ll").css("color", "#5CA4FF");

//$("#ll").css("border", "2px solid #5CA4FF");    

//$("#rr").css("color", "#ffffff");

//$("#rr").css("border", "1px solid #999999");

$(".rebox").hide();

$(".lobox").slideDown();

}

function regi() {

$('#showlog').fadeIn();

//$("#rr").css("color", "#5CA4FF");

//$("#rr").css("border", "2px solid #5CA4FF");    

//$("#ll").css("color", "#ffffff");

//$("#ll").css("border", "1px solid #999999");

$(".lobox").hide();

$(".rebox").slideDown();

}

function lessm(){

       $('html, body').animate({scrollTop:$('#lessons').position().top}, 400);

};

function teamm(){

       $('html, body').animate({scrollTop:$('#team').position().top}, 400);

};

function aboutm(){

       $('html, body').animate({scrollTop:$('#about').position().top}, 400);

};

function studentsm(){

       $('html, body').animate({scrollTop:$('#students').position().top}, 400);

};

function servicesm(){

       $('html, body').animate({scrollTop:$('#services').position().top}, 400);

       $('#pricelist').slideDown(); $('#c1').hide(); $('#c2').show();

};

function contactm(){

       $('html, body').animate({scrollTop:$('#footer').position().top}, 400);

};

function yesno(){

       $('html, body').animate({scrollTop:$('#yesno').position().top}, 400);

};

function chbg(){

      $("#log-email").css("border", "0");   

       $("#log-pass").css("border", "0");

       $("#log-email").css("border-bottom", "2px solid #555555");   

       $("#log-pass").css("border-bottom", "2px solid #555555");

};

function chbg2(){

       $("#reg-name").css("border", "0"); 

       $("#reg-email").css("border", "0");   

       $("#reg-pass").css("border", "0");
	   
	   $("#reg-tel").css("border", "0");

       $("#reg-name").css("border-bottom", "2px solid #555555"); 

       $("#reg-email").css("border-bottom", "2px solid #555555");   

       $("#reg-pass").css("border-bottom", "2px solid #555555");
	   
	    $("#reg-tel").css("border-bottom", "2px solid #555555");

};



function sendemail() {

var request;

var name= $("#m-name").val();

var email=$("#m-email").val();

var subject=$("#m-subject").val();

var message=$("#m-message").val();

var captcha=grecaptcha.getResponse();

    request = $.ajax({

        url: "send-email.php",

        type: "post",

        data: {name:name, email:email, subject:subject, message:message, captcha:captcha},

    });

    request.done(function (response, textStatus, jqXHR){

      var res = response;

        $("#email-messages").html(res); 

    });

    request.fail(function (jqXHR, textStatus, errorThrown){

        console.error(

            "The following error occurred: "+

            textStatus, errorThrown

        );

    });

}



function sendwork() {

var request;

var name= $("#m-name2").val();

var email=$("#m-email2").val();

var subject=$("#m-subject2").val();

var message=$("#m-message2").val();

    request = $.ajax({

        url: "sendwork.php",

        type: "post",

        data: {name:name, email:email, subject:subject, message:message},

    });

    request.done(function (response, textStatus, jqXHR){

      var res = response;
if(res == 'ok') {
       
        $('#okwork').fadeIn();
    $('#nowork').fadeOut();
    $('#m-name2').val('');
    $('#m-email2').val('');
    $('#m-subject2').val('');
    $('#m-message2').val('');
} else {
    $('#nowork').fadeIn();
    $('#okwork').fadeOut();
}
    });

    request.fail(function (jqXHR, textStatus, errorThrown){

        console.error(

            "The following error occurred: "+

            textStatus, errorThrown

        );

    });

}





function sendphone() {

var request;

var phone=$("#m-phone").val();

    request = $.ajax({

        url: "sendphone.php",

        type: "post",

        data: {phone:phone},

    });

    request.done(function (response, textStatus, jqXHR){

      var res = response;

        $('#okphone').fadeIn();
    $('#m-phone').val('');

    });

    request.fail(function (jqXHR, textStatus, errorThrown){

        console.error(

            "The following error occurred: "+

            textStatus, errorThrown

        );

    });

}









function addcomment(id) {

var request5;

var comment= $("#newcomment").val();

var lid= $("#lid").val();

var captcha=grecaptcha.getResponse();

    request5 = $.ajax({

        url: "addcomment.php",

        type: "post",

        data: {comment:comment, captcha:captcha, lid:lid, id:id},

    });

    request5.done(function (response, textStatus, jqXHR){

      var res = response;

        $("#commentinfo").html(res); 

    });

    request5.fail(function (jqXHR, textStatus, errorThrown){

        console.error(

            "The following error occurred: "+

            textStatus, errorThrown

        );

    });

}



function updatecomments(id) {

 var request6 = $.ajax({

        url: "updatecomment.php",

        type: "post",

data: {id:id},

    });

    request6.done(function (response, textStatus, jqXHR){

      var res = response;

        $("#ucomm").html(res); 

      //  console.log(res);

    });

    request6.fail(function (jqXHR, textStatus, errorThrown){

        console.error(

            "The following error occurred: "+

            textStatus, errorThrown

        );

    }); 



}







function addme(id) {

  var request7 = $.ajax({

        url: "addme.php",

        type: "post",

data: {id:id},

    });

    request7.done(function (response, textStatus, jqXHR){

        $(".addme").hide();

        $(".addme2").html("<img src='img/pr.gif' height='30px' title='Ձեր հարցումը ընթացքի մեջ է' style='float:left; cursor: pointer;' />");  

       // console.log(res);

    });

    request7.fail(function (jqXHR, textStatus, errorThrown){

        console.error(

            "The following error occurred: "+

            textStatus, errorThrown

        );

    }); 



}





function noaccess(id, status) {
	if (status===0){
		$('.yesno2').html("Խնդրում ենք կապնվել ադմինիստրացիայի հետ: <br/><br/><span class='dd yn' onclick='closeyn2()'>ՓԱԿԵԼ</span>");

  $('.yesno2').fadeIn();
		
		
	}
	else{
		
  $('.yesno2').html("Դուք չեք կարող դիտել տվյալ վիդեոդասը: <br/><br/><span class='dd yn' onclick='closeyn2()'>ՓԱԿԵԼ</span>");

	$('.yesno2').fadeIn();}

}

function closeyn2() {

  $('.yesno2').fadeOut();

}






function addgroup() {
var request55;
var name= $("#gname").val();
    request55 = $.ajax({
        url: "add-group.php",
        type: "post",
        data: {name:name},
    });
    request55.done(function (response, textStatus, jqXHR){
      var res = response;
        $("#groupinfo").html(res); 
    });
    request55.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });
}












function getgrade() {

var request0;



var cat = $("#tcategory").val();

var lesson = $("#tlesson").val();



var selectedVal = "";

var selected = $("input[type='radio'][name='radio1']:checked");

if (selected.length > 0) {

    selectedVal = selected.val();

}

var selectedVal2 = "";

var selected2 = $("input[type='radio'][name='radio2']:checked");

if (selected2.length > 0) {

    selectedVal2 = selected2.val();

}



if (document.getElementById('c11').checked) { var c11 = 1; } else { var c11 = 0; }

if (document.getElementById('c12').checked) { var c12 = 1; } else { var c12 = 0; }

if (document.getElementById('c13').checked) { var c13 = 1; } else { var c13 = 0; }

if (document.getElementById('c14').checked) { var c14 = 1; } else { var c14 = 0; }

if (document.getElementById('c21').checked) { var c21 = 1; } else { var c21 = 0; }

if (document.getElementById('c22').checked) { var c22 = 1; } else { var c22 = 0; }

if (document.getElementById('c23').checked) { var c23 = 1; } else { var c23 = 0; }

if (document.getElementById('c24').checked) { var c24 = 1; } else { var c24 = 0; }



var inp1 = $("#inp1").val();

var inp2 = $("#inp2").val();

var inp3 = $("#inp3").val();

var inp4 = $("#inp4").val();



    request0 = $.ajax({

        url: "getgrade.php",

        type: "post",

        data: {cat:cat, lessnum:lesson, r1:selectedVal, r2:selectedVal2, c11:c11, c12:c12, c13:c13, c14:c14, c21:c21, c22:c22, c23:c23, c24:c24, inp1:inp1, inp2:inp2, inp3:inp3, inp4:inp4 },

    });

    request0.done(function (response, textStatus, jqXHR){

     var res = $.parseJSON(response);

        //alert(res[1]);

        if(res[0] == 'ok') {

            $('#seegrade').html("<font color='darkgreen'><b>Շնորհավորում ենք:</b><br/>Դուք հավաքել եք "+res[1]+" միավոր և ստանում եք հնարավորություն դիտելու հաջորդ վիդեոդասը:</font>");

            $('#seegrade').slideDown();

            window.location.href = "/home.php?cat="+cat+"&grade="+res[1];

        } else {

            $('#seegrade').html("<font color='darkred'>Ձեր հավաքած միավորները ցածր են անցողիկից:<br/>Դիտեք վիդեոդասը և փորձեք Ձեր ուժերը կրկին:</font>");

            $('#seegrade').slideDown();

        }



    });

    request0.fail(function (jqXHR, textStatus, errorThrown){

       //alert(errorThrown);

        console.error(

            "The following error occurred: "+

            textStatus, errorThrown

        );

    });

}



function addnewgrade(c) {

  $("#puk").hide();

  var request555;

  var gid = $("#gidd").val();

  var i;

  var na2 = '';

  for (i = 1; i <= c; i++) {

  var na = $("#newgrade"+i).val()+"|"+$("#newgrade"+i).attr("alt");

  na2 = na2+":"+na;

  }

    request555 = $.ajax({

        url: "addnewgrade.php",

        type: "post",

        data: {grades:na2, c:c, gid:gid},

    });

    request555.done(function (response, textStatus, jqXHR){

      var res = response;

        window.location.href = "/administrate.php?gid="+gid;

    });

    request555.fail(function (jqXHR, textStatus, errorThrown){

        console.error(

            "The following error occurred: "+

            textStatus, errorThrown

        );

    });

}

function boxview() {
 $("#noaccess").fadeIn();
    setTimeout(nono, 5000)
}
function nono() {
  $("#noaccess").fadeOut();
}






function note_add(id){
	 
	
	//console.log(id)
	$.post("setsess.php",{st:id }, function(arg){
	$("#status").html(arg);
	})
}
function note_add1(id){
	
	
	
	$.post("setsess1.php",{st:id }, function(arg){
	$("#status").html(arg);
	})
}
function selectpdf(id) {
        $(".vvf").css("color", "#ffffff");

       // $("#sourcepdf").slideUp(500);

       // $("#sourcepdf").html('<object src="http://webex.am/pddf/'+id+'.pdf" width="100%" height="100%" style="padding:0"><embed src="http://webex.am/pddf/'+id+'.pdf" style="width:100%; min-height:480px"></embed></object>');
        document.getElementById("sourcepdf").innerHTML='<object src="http://webex.am/pddf/'+id+'.pdf" width="100%" height="100%" style="padding:0"><embed src="http://webex.am/pddf/'+id+'.pdf" style="width:100%; min-height:480px"></embed></object>';

       // $("#sourcepdf").slideDown(500);

}