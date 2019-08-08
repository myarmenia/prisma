<html>
<head>
	<meta charset="utf-8">
	<title>CKEditor Sample</title>
	<script src="ckeditor.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap.css">
	<style>
	img{
		margin: 10px 15px;
	}
	button{
		cursor:pointer
	}
	
	</style>
</head>
<body>
<section   class="js-section careers" >
 <div class="content-wrap" style="transform: none;"> 
<div class="container clearfix ">
<!-- action="add_product.php?prod='.$tip.'&lng='.$lng.'"-->
<div     style="min-height: 110px;">
<form method="post" multiple="multiple" accept="image/*" action="upload_img.php">
<div style="margin-bottom: 12px;font-weight: 600;">Նկարի չափ: (բարձր.800px X լայն.600px)</div> 
<input id="p" type="hidden" name="p" value="1" />
<div style="margin-right:12px;float:left;border: 2px solid white; padding:12px">Ընտրել նկարը<br>
<input id="fayl" type="file" name="fayl[]" required  multiple />
<button  id="up_load" class="btn btn-primary" >Upload</button></div>
 </form>
 </div><br/>
<div>
<ul id="status" style="list-style: none;min-height: 10px;">		
</ul>
</div>

<div style="margin-top:40pxx">
<div class="col_full">
<label for="title">TITLE:</label>
<input type="text"  id="title" value="" class="form-control not-dark" required>
</div>
<textarea  class="ckeditor" id="editor1"></textarea>

</div>
<button id="save" class="btn btn-primary">Save</button>
</div>
</div>
</section>
<script>

 
var editor = CKEDITOR.replace( 'editor1' );
var data,img,front_img, back_img;

$("#up_load").on( 'click', function(e) {
	e.preventDefault();
	event.preventDefault();

        // retrieve form element
        var form = this.form;
        // prepare data
        var data = new FormData(form);
        // get url
        var url = form.action;
	//var p = $('#p').val();
	//var fayl = $('#fayl')[0].files;	
	  console.log(data,"data")
	  //console.log(fayl,"fayl")
	   $.ajax({
            type: 'POST',
            url: url,
            data: data,
            processData: false,
            contentType: false
        }).done(function (status) {
			
			var append="";
			var res=JSON.parse(status);
			
			console.log(res)
			if(res.error){
				append='<li><span style="color:red">Նկարը ընտրված չէ...</span></li>';
			}
			else{
				front_img=res.img1;
				back_img=res.img2;
				 img=res.arr;
				console.log(img)
			
			for(var i=0; i<img.length; i++){
				append+='<li><span>'+img[i]+'<span/><img src="'+img[i]+'" width="50"/> </li>';
			}
				
			}
			
			$("#status").html(append);
    
			});
	
	})

// The "change" event is fired whenever a change is made in the editor.
editor.on( 'change', function( evt ) {
    // getData() returns CKEditor's HTML content.
	data=evt.editor.getData();
    console.log( 'Total bytes: ' + evt.editor.getData() );
});

$("#save").on( 'click', function() {
	var title=$("#title").val();	
	$.post("save.php",{code:data,back_img:back_img,front_img:front_img,title:title}, function(status){
	$("#status").html(status)
   
  });
	
})


</script>
</body>
</html>
