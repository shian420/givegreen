$(function(){
$('.form-item').click(function(){
$('.form-item')
.css('color','red')
.css('font-size','40px')
.css('text-weight','bold')
.css('text-shadow','4px 4px black')
.html('色変わりまーす！');
});



$('#sanple').click(function(){
$('#form-area').css('background-image','url("i.png")');
});


$('#sanple1').click(function(){
$('#form-area').fadeOut(2000);
});

$('#sanple1').click(function(){
$('.contener').fadeOut(2000);
});

$('#sanple1').click(function(){
$('#header').fadeOut(2000);
});

$('#list li').hover(
function(){
$(this).css('border-bottom','solid 4px white')
.css('background-color','gray');
},
function(){
$(this).css('background-color','black')
.css('border-bottom','solid 0px white');
});

$('#login-show').click(function(){
$('#modal-wrapper').fadeIn();
});


});
