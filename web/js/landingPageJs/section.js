$(document).ready(function () {
//// Col md bootstrap
    if ($('header').width() >= 768) {
        sectionAbout();
        sectionProject();
    };
    
    $(window).resize(function () {
//// Col md bootstrap
        if ($('header').width() >= 768) {
            sectionAbout();
            sectionProject();
        };
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
        var scrollitProjet = "scrollitL";
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
});
