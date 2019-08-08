var tpj=jQuery;		
tpj(document).ready(function() {
	tpj(".nav-link").click(function (e) {
		e.preventDefault();
		var id_t = tpj(this).attr('id')
		$(this).addClass( "bg-dark" );
		tpj('.nav-link').each(function(){
				if(id_t != $(this).attr('id') ){
					$(this).removeClass( "bg-dark" );
						}
			})
				$.ajax({
						method: 'POST',
						url: 'set_lng.php',
						data: {data:id_t},								
						}).done(function (status) {
							$("#lng_set").html(status);
							
							});
	console.log(tpj(this).attr('id'))
	
	});		
})		