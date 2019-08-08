
$('.js-btn').click(function(){
	var id = $(this).attr('id')
	var clas_s=".js-section."+id;
	//console.log(clas_s)
	
	$(this).removeClass().addClass( "pbutton btn js-btn active" );
	$('html, body').animate({
        scrollTop: $(clas_s).offset().top + 20
		
    }, 800);
	$('.js-btn').each(function(){
		if(id != $(this).attr('id') ){
			$(this).removeClass().addClass( "pbutton btn js-btn" );
				}
	})
});

//var elem0 = $('.js-section').eq(0);
var elem_all =  $('.js-section').eq().prevObject;
var idd =  $('.pbutton').eq().prevObject;
var data=[];
var id_arr=[];
var id_str=[];
for(var i=0; i<idd.length; i++){
	var str= "#"+idd[i].id;
	id_str.push(idd[i].id);	
	id_arr.push(str);	
}
for(var i=0; i<elem_all.length; i++){
	var curr=[];
	curr[i]=[elem_all[i].offsetTop, elem_all[i].offsetHeight];
	data.push(curr[i]);	
}
//console.log(data,"data")
//console.log(id_arr,"id_arr")
//console.log(id_str,"id_str")

$(document).scroll(function () {
	
	if(data[0]){
		//console.log( $(this).scrollTop()," $(this).scrollTop()")
		//console.log(data[0][0],"data0")
		//console.log(data[0][1],"data1")
		if( $(this).scrollTop() > data[0][0] && $(this).scrollTop() < (data[0][0]  + data[0][1]*2 )){		
		
		   $(id_arr[0]).removeClass().addClass( "pbutton btn js-btn active" );
		   $('.js-btn').each(function(){
		if( $(this).attr('id') != id_str[0] ){
			$(this).removeClass().addClass( "pbutton btn js-btn " );
				}
	})
	   }
	   else{
		    $('.js-btn').each(function(){
		
			$(this).removeClass().addClass( "pbutton btn js-btn " );
				
			})
	   }	
	}
		if(data[1]){
			//console.log( $(this).scrollTop()," $(this).scrollTop()")
		//console.log(data[1][0],"data0-1")
		//console.log(data[1][1],"data1-1")
		if( $(this).scrollTop() + 20 > data[1][0] && $(this).scrollTop() < (data[1][0]  + data[1][1]*2 )){		 
		   $(id_arr[1]).removeClass().addClass( "pbutton btn js-btn active" );
		   $('.js-btn').each(function(){
		if( $(this).attr('id') != id_str[1] ){
			$(this).removeClass().addClass( "pbutton btn js-btn " );
				}
	})
	   }
	  
	}
		if(data[2]){
		if( $(this).scrollTop()+20> data[2][0] && $(this).scrollTop() < (data[2][0]  + data[2][1]*2)){		 
		   $(id_arr[2]).removeClass().addClass( "pbutton btn js-btn active" );
		   $('.js-btn').each(function(){
		if( $(this).attr('id') != id_str[2] ){
			$(this).removeClass().addClass( "pbutton btn js-btn " );
				}
	})
	   }
	  
	}
	if(data[3]){
		if( $(this).scrollTop()+20 > data[3][0] && $(this).scrollTop() < (data[3][0]  + data[3][1]*2)){		 
		   $(id_arr[3]).removeClass().addClass( "pbutton btn js-btn active" );
		   $('.js-btn').each(function(){
		if( $(this).attr('id') != id_str[3] ){
			$(this).removeClass().addClass( "pbutton btn js-btn " );
				}
	})
	   }
	  
	}
	if(data[4]){
		if( $(this).scrollTop()+ data[4][1]*1.2 > data[4][0] && $(this).scrollTop() < (data[4][0]  + data[4][1]*2)){		 
		   $(id_arr[4]).removeClass().addClass( "pbutton btn js-btn active" );
		   $('.js-btn').each(function(){
		if( $(this).attr('id') != id_str[4] ){
			$(this).removeClass().addClass( "pbutton btn js-btn" );
				}
	})
	   }
	  
	}
	/*
	if(data[5]){
		if( $(this).scrollTop() > data[5][0] && $(this).scrollTop() < data[5][0]  + data[5][1]){		 
		   $(id_arr[5]).removeClass().addClass( "pbutton btn js-btn active" );
		   $('.js-btn').each(function(){
		if( $(this).attr('id') != id_str[5] ){
			$(this).removeClass().addClass( "pbutton btn js-btn " );
				}
	})
	   }
	  
	}
	if(data[6]){
		if( $(this).scrollTop() > data[6][0] && $(this).scrollTop() < data[6][0]  + data[6][1]){		 
		   $(id_arr[6]).removeClass().addClass( "pbutton btn js-btn active" );
		   $('.js-btn').each(function(){
		if( $(this).attr('id') != id_str[6] ){
			$(this).removeClass().addClass( "pbutton btn js-btn " );
				}
	})
	   }
	  
	}
	if(data[7]){
		if( $(this).scrollTop() > data[2][0] && $(this).scrollTop() < data[2][0]  + data[2][1]){		 
		   $(id_arr[2]).removeClass().addClass( "pbutton btn js-btn active" );
		   $('.js-btn').each(function(){
		if( $(this).attr('id') != id_str[2] ){
			$(this).removeClass().addClass( "pbutton btn js-btn" );
				}
	})
	   }
	  
	}*/
	   
	
	  
	});

