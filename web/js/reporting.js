$(document).ready(function() {
    $("#slider2").slider({
        range: "min",
        animate: true,
        value:1,
        min: 1,
        max: 100,
        step: 1,
        slide: function(event, ui) {
            update(2,ui.value); //changed
        }
    });
    //Added, set initial value.
    $("#duration").val(2200);
    $("#duration-label").text(0);
    update();


    $(".type-reporting").click(function() {
        $(".price-box").hide();
        var clickId = $(this).attr('id');
        $("#"+clickId+"-box").show();
    });
});


function update(slider,val) {
    //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
    var $duration = $("#duration").val();

    if (val>=1){
        $duration = '2200';
    }    if (val>2) {
        $duration = '1650';
    }    if (val>5){
        $duration = '1320';
    }    if (val>10){
        $duration = '1100';
    }    if (val>15){
        $duration = '880';
    }    if (val>25){
        $duration = '660';
    }    if (val>50){
        $duration = '550';
    }    if (val===100){
        $duration = '440';
    }

    $("#duration").val($duration);
    $("#duration-label").text($duration);

    if (val === undefined){
        val = 1;
    }
    $('#slider2 span').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+val+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
}

