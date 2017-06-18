$(document).ready(function () {
    //// Init Skillbar ///
    $('.skill').simpleSkillbar();  
    
     //// Init section ///
        sectionAbout();
        sectionProject();
});

 $(window).resize(function () {
    $('.skill').simpleSkillbar();   
        sectionAbout();
        sectionProject();    
    });
    
$(window).change(function () {
    $('.skill').simpleSkillbar();   
        sectionAbout();
        sectionProject();
    });

    function sectionAbout() {

        var blockFixAbout = $(".headerAbout");
        var blockTextAbout = $('.bodyAbout');
        var scrollitAbout = "scrollitR";
        var multipleWAbout = window.innerHeight;
        var titelSectionBlockAbout = ".titelCenterAbout";
        var widthBloc = blockTextAbout.innerHeight();

        section(blockFixAbout, blockTextAbout, scrollitAbout, multipleWAbout, titelSectionBlockAbout, widthBloc);
    }

    function sectionProject() {

        var blockFixProjet = $(".headerProjet");
        var blockTextProjet = $('.bodyProjet');
        var scrollitProjet = "scrollitR";
        var multipleWProjet = window.innerHeight + $('.bodyAbout').innerHeight();
        var titelSectionBlockProjet = ".titelCenterProjet";

        section(blockFixProjet, blockTextProjet, scrollitProjet, multipleWProjet, titelSectionBlockProjet);
    }


    function section($blockFix, $blockText, $scrollit, $multipleW, $titelSectionBlock, $widthBloc) {

// whidth block header
        $($blockFix).css("height", window.innerHeight);

//     horizontal center titel
        $($titelSectionBlock).css({
            position: 'absolute',
            top: ($(window).height() / 2 - $($titelSectionBlock).innerHeight())
        });
//     vertical center titel
        $($titelSectionBlock).css("left", ($($blockFix).width() / 2) - ($($titelSectionBlock).width() / 2) + "px");

  if ($('header').width() >= 1200) {
      



//    block titel bottom 
        $(window).scroll(function () {

            if ($(window).scrollTop() > $multipleW) {
                $($blockFix).addClass('fixed');
                $($blockText).addClass($scrollit);
//    unblock titel top         
            }
            if ($(window).scrollTop() < $multipleW - 1) {
                $($blockFix).removeClass('fixed');
                $($blockText).removeClass($scrollit);
                $($titelSectionBlock).css({

                    top: ($(window).height() / 2 - $($titelSectionBlock).innerHeight())
                });
            }
            if ($(window).scrollTop() > $multipleW) {
                $($blockFix).addClass('fixed');
                $($blockText).addClass($scrollit);


//    unblock titel top   

                if ($(window).scrollTop() > $widthBloc) {
                    $($blockFix).removeClass('fixed');
                    $($blockText).removeClass($scrollit);
                    $($blockFix).css({
                        top: $widthBloc - window.innerHeight
                    });
//    unblock titel top   
                } else {
                    $($blockFix).addClass('fixed');
                    $($blockText).addClass($scrollit);
                    $($blockFix).css({
                        top: 0
                    });
                }
            }
        });
    }; 
    }; 

//
//function skill (){
//    
//    $('#skill').simpleSkillbar({
//
//  // or data-height='30'
//  height: 30,
//
//  // or data-text-color='#fff'
//  text-color: '#fff',
//
//  // or data-text-background='#337ab7'
//  text-background: '#337ab7',
//
//});
//
//}