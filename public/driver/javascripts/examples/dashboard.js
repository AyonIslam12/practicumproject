
$(function () {

    "use strict";

    //TOASTR NOTIFICATION
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    
    //PIE  & POLAR CHART EXAMPLE
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    var pie = document.getElementById("pie-chart");

    var dataPie = {
        labels: [
            "Data 1",
            "Data 2",
            "Data 3"
        ],
        datasets: [
            {
                data: [300, 50, 100],
                backgroundColor: [
                    "rgba(55, 209, 119, 0.45)",
                    "#FFCE56",
                    "rgba(175, 175, 175, 0.26)"
                ],
                hoverBackgroundColor: [
                    "rgba(55, 209, 119, 0.6)",
                    "#FFCE56",
                    "rgba(175, 175, 175, 0.4)"
                ]
            }]
    };


    var pieChar = new Chart(pie, {
        type: 'pie',
        data: dataPie

    });


    //MAGNIFIC POPUP GALLERY
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $('.gallery-wrap').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1]
        },
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-with-zoom',
        zoom: {
            enabled: true,
            duration: 300
        }
    });

});