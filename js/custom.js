$(document).ready(function(){

	$('#loginForm').submit(function(e){
		var username = $('#username').val(),
		    password = $('#password').val();
		    error = $('.error');

		if(username == "" || password == ""){
			error.html('Enter a username and password!').show();
		} else {
			error.hide();

			$.ajax({
				type: $(this).attr('method'),
				url: $(this).attr('action'),
				data: {username:username, password:password},
				success: function(result){
					if(result == 'ok'){
						window.location = 'index.php';
					} else {
						error.html(result).show();
					}
				}
			});
		}

		e.preventDefault();
	});
});