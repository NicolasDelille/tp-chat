function showMessages(){
	$.ajax({
		url: "get.php"

	}).done(function(response){
		console.log(response)
		$("#result").html(response);
	});

}


function sendMessage(event){
	event.preventDefault();

	$.ajax({
		url: "send.php",
		data: {message: $("#message").val()},
		type: "POST"

	});
}

$("#sendForm").on("submit",sendMessage);

$(window).on('load',showMessages);

window.setInterval(function(){
	showMessages();
}, 3000);
