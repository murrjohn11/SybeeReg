$('button').click(function(){
	var val=$('input').val();
	$.post('/SybeeR/login.php','idnum='+val,function(response){
		alert(response);
	});
});