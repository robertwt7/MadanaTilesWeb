$(document).ready(function () {
    $("#openframe").click(function (e) { 
        $("#hidden").show("medium");
        $(".close").click(function (e) { 
            $("#hidden").hide("medium");
        });
    });    
});