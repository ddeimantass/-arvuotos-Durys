$('.skaityti').css({ cursor: 'pointer' });
$('.info-box').css({ cursor: 'pointer' });
$('.mail').css({ cursor: 'pointer' });

$('.navbar-toggle').click(function(){
    $('#mobmenu').slideToggle(300);
});

$('.durys').click(function (){
    $('.menu-link').removeClass('Here');
    $('.durys').addClass('Here');
});
$('.mail').click(function (){
    $('.mail-bottom').toggle();
});
$('.kainos').click(function(){
    $('.menu-link').removeClass('Here');
    $('.kainos').addClass('Here');
});
$('.kontaktai').click(function(){
    $('.menu-link').removeClass('Here');
    $('.kontaktai').addClass('Here');
});

//-----------------------

$('.akc1').click(function(){
    if($('#ap1').css('display') == 'none' && $('#ap1-mob').css('display') == 'none'  ){
        $('.aprasymas').hide();
        $('.d').removeClass('akcija-active');
        $('#d1').addClass('akcija-active');
        if ($(window).width() < 960) {
            $('#ap1-mob').slideDown(300);
            $('html, body').animate({
                scrollTop: $("#d1").offset().top
            }, 1000);
        }
        else{
            $('#ap1').slideDown(300);
            $('html, body').animate({
                scrollTop: $("#d2").offset().top
            }, 1000);
        }
    }
    else{
        $('.aprasymas').slideUp(300);
        $('.d').removeClass('akcija-active');
    }
});
$('.akc2').click(function(){
    if($('#ap2').css('display') == 'none' && $('#ap2-mob').css('display') == 'none'  ){
        $('.aprasymas').hide();
        $('.d').removeClass('akcija-active');
        $('#d2').addClass('akcija-active');
        if ($(window).width() < 960) {
            $('#ap2-mob').slideDown(300);
            $('html, body').animate({
                scrollTop: $("#d2").offset().top
            }, 1000);
        }
        else{
            $('#ap2').slideDown(300);
            $('html, body').animate({
                scrollTop: $("#d2").offset().top
            }, 1000);
        }
    }
    else{
        $('.aprasymas').slideUp(300);
        $('.d').removeClass('akcija-active');

    }
});
$('.akc3').click(function(){
    if($('#ap3').css('display') == 'none'){
        $('.d').removeClass('akcija-active');
        $('.aprasymas').slideUp(300);
        $('#ap3').slideDown(300);
        $('#d3').addClass('akcija-active');
        $('html, body').animate({
        scrollTop: $("#d3").offset().top
            }, 1000);
    }
    else{
        $('.aprasymas').slideUp(300);
        $('.d').removeClass('akcija-active');

    }
});
$('.akc4').click(function(){
    if($('#ap4').css('display') == 'none'){
        $('.d').removeClass('akcija-active');
        $('.aprasymas').slideUp(300);
        $('#ap4').slideDown(300);
        $('#d4').addClass('akcija-active');
        $('html, body').animate({
        scrollTop: $("#d4").offset().top
            }, 1000);
    }
    else{
        $('.aprasymas').slideUp(300);
        $('.d').removeClass('akcija-active');
    }
});

//--------------------

$('#ic1-1').click(function(){
    if($('#ap1-1').css('display') == 'none' && $('#ap1-1-mob').css('display') == 'none'  ){
        $('.aprasymas1').hide();
        $('.ic1').removeClass('me');
        $('.iconShadow1').css('box-shadow','none');
        $('.plotis1').removeClass('bottom-line');
        $('#ic1-2').addClass('bottom-line');
        if ($(window).width() < 960) {
            $('#ap1-1-mob').slideDown(300);
            $('.ic1-1').addClass('me');
            $('#shadow1').css('box-shadow','inset 0px -6px 10px 0px rgba(0,0,0,0.5)');
            $('html, body').animate({
            scrollTop: $("#ic1-1").offset().top
            }, 1000);

        }
        else{
            $('#ap1-1').slideDown(300);
            $('.ic1-1').addClass('me');
            $('#shadow1').css('box-shadow','inset 0px -6px 10px 0px rgba(0,0,0,0.5)');
            $('#ic1-3').addClass('bottom-line');
            $('#ic1-4').addClass('bottom-line');
            $('html, body').animate({
            scrollTop: $("#ic1-1").offset().top
            }, 1000);
        }
    }
    else{
        $('.aprasymas1').slideUp(300);
        $('.ic1').removeClass('me');
        $('.iconShadow1').css('box-shadow','none');
        $('.plotis1').removeClass('bottom-line');
    }
});
$('#ic1-2').click(function(){
    if($('#ap1-2').css('display') == 'none' && $('#ap1-2-mob').css('display') == 'none'  ){
        $('.aprasymas1').hide();
        $('.ic1').removeClass('me');
        $('.iconShadow1').css('box-shadow','none');
        $('.plotis1').removeClass('bottom-line');
        $('#ic1-1').addClass('bottom-line');
        if ($(window).width() < 960) {
            $('#ap1-2-mob').slideDown(300);
            $('.ic1-2').addClass('me');
            $('#shadow2').css('box-shadow','inset 0px -6px 10px 0px rgba(0,0,0,0.5)');
            $('html, body').animate({
            scrollTop: $("#ic1-2").offset().top
            }, 1000);
        }
        else{
            $('#ap1-2').slideDown(300);
            $('.ic1-2').addClass('me');
            $('#shadow2').css('box-shadow','inset 0px -6px 10px 0px rgba(0,0,0,0.5)');
            $('#ic1-3').addClass('bottom-line');
            $('#ic1-4').addClass('bottom-line');
            $('html, body').animate({
            scrollTop: $("#ic1-2").offset().top
            }, 1000);
        }
    }
    else{
        $('.aprasymas1').slideUp(300);
        $('.ic1').removeClass('me');
        $('.iconShadow1').css('box-shadow','none');
        $('.plotis1').removeClass('bottom-line');
    }
});
$('#ic1-3').click(function(){
    if($('#ap1-3').css('display') == 'none'){
        $('.aprasymas1').slideUp(300);
        $('.ic1').removeClass('me');
        $('.iconShadow1').css('box-shadow','none');
        $('.plotis1').removeClass('bottom-line');
        $('#shadow3').css('box-shadow','inset 0px -6px 10px 0px rgba(0,0,0,0.5)');
        $('#ic1-4').addClass('bottom-line');
        $('#ap1-3').slideDown(300);
        $('.ic1-3').addClass('me');
        $('html, body').animate({
        scrollTop: $("#ic1-3").offset().top
            }, 1000);
        if ($(window).width() >= 960) {
            $('#ic1-1').addClass('bottom-line');
            $('#ic1-2').addClass('bottom-line');
        }
    }
    else{
        $('.aprasymas1').slideUp(300);
        $('.ic1').removeClass('me');
        $('.iconShadow1').css('box-shadow','none');
        $('.plotis1').removeClass('bottom-line');
    }
});
$('#ic1-4').click(function(){
    if($('#ap1-4').css('display') == 'none'){
        $('.aprasymas1').slideUp(300);
        $('.ic1').removeClass('me');
        $('.iconShadow1').css('box-shadow','none');
        $('.plotis1').removeClass('bottom-line');
        $('#ic1-3').addClass('bottom-line');
        $('#shadow4').css('box-shadow','inset 0px -6px 10px 0px rgba(0,0,0,0.5)');
        $('#ap1-4').slideDown(300);
        $('.ic1-4').addClass('me');
        $('html, body').animate({
        scrollTop: $("#ic1-4").offset().top
            }, 1000);
        if ($(window).width() >= 960) {
            $('#ic1-1').addClass('bottom-line');
            $('#ic1-2').addClass('bottom-line');
        }
    }
    else{
        $('.aprasymas1').slideUp(300);
        $('.ic1').removeClass('me');
        $('.iconShadow1').css('box-shadow','none');
        $('.plotis1').removeClass('bottom-line');
    }
});

//----

$('#ic2-1').click(function(){
    if($('#ap2-1').css('display') == 'none' && $('#ap2-1-mob').css('display') == 'none'  ){
        $('.aprasymas2').hide();
        $('.ic').removeClass('me');
        $('.iconShadow2').css('box-shadow','none');
        $('.plotis2').removeClass('bottom-line');
        $('#ic2-2').addClass('bottom-line');
        if ($(window).width() < 960) {
            $('#ap2-1-mob').slideDown(300);
            $('.ic2-1').addClass('me');
            $('#shadow5').css('box-shadow','inset 0px -6px 10px 0px rgba(0,0,0,0.5)');
            $('html, body').animate({
            scrollTop: $("#ic2-1").offset().top
            }, 1000);
        }
        else{
            $('#ap2-1').slideDown(300);
            $('.ic2-1').addClass('me');
            $('#shadow5').css('box-shadow','inset 0px -6px 10px 0px rgba(0,0,0,0.5)');
            $('#ic2-3').addClass('bottom-line');
            $('#ic2-4').addClass('bottom-line');
            $('html, body').animate({
            scrollTop: $("#ic2-1").offset().top
            }, 1000);
        }
    }
    else{
        $('.aprasymas2').slideUp(300);
        $('.ic').removeClass('me');
        $('.iconShadow2').css('box-shadow','none');
        $('.plotis2').removeClass('bottom-line');
    }
});
$('#ic2-2').click(function(){
    if($('#ap2-2').css('display') == 'none' && $('#ap2-2-mob').css('display') == 'none'  ){
        $('.aprasymas2').hide();
        $('.ic').removeClass('me');
        $('.iconShadow2').css('box-shadow','none');
        $('.plotis2').removeClass('bottom-line');
        $('#ic2-1').addClass('bottom-line');
        if ($(window).width() < 960) {
            $('#ap2-2-mob').slideDown(300);
            $('.ic2-2').addClass('me');
            $('#shadow6').css('box-shadow','inset 0px -6px 10px 0px rgba(0,0,0,0.5)');
            $('html, body').animate({
            scrollTop: $("#ic2-2").offset().top
            }, 1000);
        }
        else{
            $('#ap2-2').slideDown(300);
            $('.ic2-2').addClass('me');
            $('#shadow6').css('box-shadow','inset 0px -6px 10px 0px rgba(0,0,0,0.5)');
            $('#ic2-3').addClass('bottom-line');
            $('#ic2-4').addClass('bottom-line');
            $('html, body').animate({
            scrollTop: $("#ic2-2").offset().top
            }, 1000);
        }
    }
    else{
        $('.aprasymas2').slideUp(300);
        $('.ic').removeClass('me');
        $('.iconShadow2').css('box-shadow','none');
        $('.plotis2').removeClass('bottom-line');
    }
});
$('#ic2-3').click(function(){
    if($('#ap2-3').css('display') == 'none'){
        $('.aprasymas2').slideUp(300);
        $('.ic').removeClass('me');
        $('.iconShadow2').css('box-shadow','none');
        $('.plotis2').removeClass('bottom-line');
        $('#ic2-4').addClass('bottom-line');
        $('#ap2-3').slideDown(300);
        $('.ic2-3').addClass('me');
        $('#shadow7').css('box-shadow','inset 0px -6px 10px 0px rgba(0,0,0,0.5)');
        $('html, body').animate({
        scrollTop: $("#ic2-3").offset().top
            }, 1000);
        if ($(window).width() > 960) {
            $('#ic2-1').addClass('bottom-line');
            $('#ic2-2').addClass('bottom-line');
        }
    }
    else{
        $('.aprasymas2').slideUp(300);
        $('.ic2-3').removeClass('me');
        $('.iconShadow2').css('box-shadow','none');
        $('.plotis2').removeClass('bottom-line');
    }
});
$('#ic2-4').click(function(){
    if($('#ap2-4').css('display') == 'none'){
        $('.aprasymas2').slideUp(300);
        $('.ic').removeClass('me');
        $('.iconShadow2').css('box-shadow','none');
        $('.plotis2').removeClass('bottom-line');
        $('#ic2-3').addClass('bottom-line');
        $('#ap2-4').slideDown(300);
        $('.ic2-4').addClass('me');
        $('#shadow8').css('box-shadow','inset 0px -6px 10px 0px rgba(0,0,0,0.5)');
        $('html, body').animate({
        scrollTop: $("#ic2-4").offset().top
            }, 1000);
                if ($(window).width() > 960) {
            $('#ic2-1').addClass('bottom-line');
            $('#ic2-2').addClass('bottom-line');
        }
    }
    else{
        $('.aprasymas2').slideUp(300);
        $('.ic').removeClass('me');
        $('.iconShadow2').css('box-shadow','none');
        $('.plotis2').removeClass('bottom-line');
    }
});
//----------------

function kainosDown(){
    $('html, body').animate({
        scrollTop: $('#kainoslangu').offset().top
    }, 2000);
}

function kontaktaiDown(){
    $('html, body').animate({
        scrollTop: $('#kontaktai').offset().top
    }, 2000);
}

$('.skaityti').click(function(){
    if($('#didelis').css('display') == 'none'){
        $('#mazas').hide();
        $('#didelis').slideDown(500);
        $(".skaityti").html("Paslėpti");
    }
    else{
        $('#didelis').slideUp(500);
        $('#mazas').show();
        $(".skaityti").html("Skaityti plačiau");
    }
});

$('window').one('scroll', function() {  } );

function getData(){
    var pranesimas="Klaida: ";
    var klaida=false;
    if($('#vardas').val().length==0){klaida=true; pranesimas=pranesimas + 'varde ';}
    if($('#telefonas').val().length==0){klaida=true;pranesimas=pranesimas + 'telefone ';}
    if($('#tema').val().length==0){klaida=true;pranesimas=pranesimas + 'temoje ';}
    if($('#pastas').val().length==0){klaida=true;pranesimas=pranesimas + 'paste ';}
    if($('#laiskas').val().length==0){klaida=true;pranesimas=pranesimas + 'laiske ';}
    if(klaida){alert(pranesimas);}
    else{alert('Jūsų laiškas išsiųstas');}
}
//----------------

$(window).resize(function () {
    if ($(window).width() > 959) {
        $('#mobmenu').slideUp(300);
    }
});



