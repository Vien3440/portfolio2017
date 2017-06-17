
/*****Dimention header******/
$(document).ready(function () {
    $("#header").css("height", window.innerHeight);
    /*****MiniNav bottom******/
    $miniNavWidth = $("#miniNav").offsetWidth;
    $("#miniNav").css("position", "absolute");
    $("#miniNav").css("top", window.innerHeight - $("#miniNav").innerHeight() + "px");
    $("#miniNav").css("left", ($("#header").width() / 2) - ($("#miniNav").width() / 2) + "px");
});

