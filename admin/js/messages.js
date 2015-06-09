$(function() {
	$('button[name=send_msg]').on('click', function(event) {
		event.preventDefault();
		to = $('select[name=to] option:selected').val();
		message = $('textarea[name=message]').val();

		$.ajax({
			type: 'POST',
			url: "send_msg.php", 
			data: {msg:message , to : to} , 
			success: function(data){
				alert(data);
			}
		});
	});
});


