$(document).ready(function () {
    $(".projetThumb").css({
        'height': window.innerHeight
    });
    $(".detail").css({
        'min-height': window.innerHeight
    });
    
});

$(".projetThumb").click(function () {
////view on projet "ON"/////

$(this).removeClass('scrollitR');
$(".sectionProjet").addClass('projetOn');
$(this).addClass('selectProjetOn');


$(".detail").addClass('detailOff');
$(".detail").removeClass('detailOn');
$(this).siblings("div").addClass("detailOn");
$(this).siblings("div").removeClass("detailOff");
});


////view on projet "Off"/////
$(".headerProjet").click(function () {
$("projetThumb").addClass('scrollitR');
$(".sectionProjet").removeClass('projetOn');
$(".projetThumb").removeClass('selectProjetOn');


$(".detail").addClass('detailOff');
$(".detail").removeClass('detailOn');

});


//function projetDetailOn ($element){
//    $element.addClass('detailOn');
//   $element.removeClass('detailOn');
//}
//
//function projetDetailOff ($element){
//     $element.removeClass('detailOn');
//}