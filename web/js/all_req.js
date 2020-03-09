$(document).ready(function() {
    $("#send_info_footer").click(function () {
        if ($('#site-contact').length === 0) {
            window.location.replace("index#site-contact");
        }
    });
});