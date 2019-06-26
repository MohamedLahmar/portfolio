$(window).scroll(function(event) {
	if($(window).width() > 768){
		if($(window).scrollTop() > 200){
			$("nav ul").css('paddingTop', '0px');
			$("nav ul").css('backgroundColor', 'black');
			$("nav ul li a").css('color', 'white');
		}
		else{
			$("nav ul").css('paddingTop', '50px');
			$("nav ul").css('backgroundColor', 'rgba(0,0,0,0.0)');
			$("nav ul li a").css('color', 'black');
		}
	}
});

function showMenu(){
	if(document.getElementById('toggle').checked) {
	    $("nav ul").slideDown(200);
	} else {
	    $("nav ul").slideUp(200);
	}
}

var modal = document.getElementById('myModal');
var lblCms = document.getElementById("lblCms");
var span = document.getElementsByClassName("close")[0];

lblCms.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

function mailafriend(){
	$("#btnMailafriend").html("Loading...");
	$.ajax({
		url: 'includes/mailafriend.php',
		type: 'POST',
		dataType: 'text',
		data: 'email=' + $("#email").val(),
	})
	.done(function(data) {
		$("#btnMailafriend").html("Verzend");
		$("#mailafriendResult").html(data);
	})
	.fail(function() {
		$("#btnMailafriend").html("'Verzend");
		$("#mailafriendResult").html("Error")
	});
}

function contact(){
	$("#btnContact").html("Loading...");
	$.ajax({
		url: 'includes/contact.php',
		type: 'POST',
		dataType: 'text',
		data: 'naam=' + $("#naam").val() + '&mail=' + $("#mail").val() + '&vraag=' + $("#vraag").val(),
	})
	.done(function(data) {
		$("#btnContact").html("Verzend");
		$("#contactResult").html(data);
	})
	.fail(function() {
		$("#btnContact").html("'Verzend");
		$("#contactResult").html("Error")
	});
}

$("#home").click(function (){
    $('html, body').animate({
        scrollTop: $(".intro").offset().top
    }, 1500);
});

$("#inleiding").click(function (){
    $('html, body').animate({
        scrollTop: $(".inleiding").offset().top
    }, 1500);
});

$("#producten").click(function (){
    $('html, body').animate({
        scrollTop: $(".producten").offset().top
    }, 1500);
});

$("#artikelen").click(function (){
    $('html, body').animate({
        scrollTop: $(".artikelen").offset().top
    }, 1500);
});

$("#mailafriend").click(function (){
    $('html, body').animate({
        scrollTop: $(".mailafriend").offset().top
    }, 1500);
});

$("#contact").click(function (){
    $('html, body').animate({
        scrollTop: $(".contact").offset().top
    }, 1500);
});

$(document).ready(function(){
$("#flip").click(function(){
		$("#panel").slideDown("slow");
});
});
$(document).ready(function(){
$("#flip2").click(function(){
		$("#panel2").slideDown("slow");
});
});
$(document).ready(function(){
$("#flip3").click(function(){
		$("#panel3").slideDown("slow");
});
});
	CKEDITOR.replace( 'probleem' );
	CKEDITOR.replace( 'code' );
	CKEDITOR.replace( 'verbeterdecode' );

	CKEDITOR.config.autoParagraph = false;
