$(document).ready(function () {


    $(".projetThumb").css({
        'height': window.innerHeight
    });



});

$(".projetThumb").click(function () {
//                animate({scrollTop: $(this).offset().top}, 'slow'      );
////On/////

$(this).removeClass('scrollitR');
$(".sectionProjet").addClass('projetOn');
$(this).addClass('selectProjetOn');


});

////Off/////
  $(".headerProjet").click(function () {
$("projetThumb").addClass('scrollitR');
$(".sectionProjet").removeClass('projetOn');
$(".projetThumb").removeClass('selectProjetOn');

  });