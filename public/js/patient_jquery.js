$(document).ready(function () {
    $("#patient_notification_table").dataTable({
        "lengthChange": false,
        searching: false
    });

    $("#patient_appointments_table").dataTable({
        "lengthChange": false,
        searching: false,
    });

    $("#patient_prescription_table").dataTable({
        "lengthChange": false,
        searching: false,
    });

    $("#patient_resource_table").dataTable({
        "lengthChange": false,
        searching: false,
    });

    $(".paginate_button").each(function(){
        $(this).attr("style", "color:white!important;background:#4188c6");
    })

    $(".sorting_asc").click(function(){
        $(".paginate_button").each(function(){
            $(this).attr("style", "color:white!important;background:#4188c6");
        })
    })

    $(".sorting_desc").click(function(){
        $(".paginate_button").each(function(){
            $(this).attr("style", "color:white!important;background:#4188c6");
        })
    })

    $(".sorting").click(function(){
        $(".paginate_button").each(function(){
            $(this).attr("style", "color:white!important;background:#4188c6");
        })
    })

    $("#upload_patient_image_div").click(function(){
        $("#upload_patient_image").click();
    })

    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });




    $("#container").simpleCalendar({
        fixedStartDay: false,
        disableEmptyDetails: true,
        events: [
            // generate new event after tomorrow for one hour
            {
                startDate: new Date(new Date().setHours(new Date().getHours() + 24)).toDateString(),
                endDate: new Date(new Date().setHours(new Date().getHours() + 25)).toISOString(),
                summary: 'Visit of the Eiffel Tower'
            },
            // generate new event for yesterday at noon
            {
                startDate: new Date(new Date().setHours(new Date().getHours() - new Date().getHours() - 12, 0)).toISOString(),
                endDate: new Date(new Date().setHours(new Date().getHours() - new Date().getHours() - 11)).getTime(),
                summary: 'Restaurant'
            },
            // generate new event for the last two days
            {
                startDate: new Date(new Date().setHours(new Date().getHours() - 48)).toISOString(),
                endDate: new Date(new Date().setHours(new Date().getHours() - 24)).getTime(),
                summary: 'Visit of the Louvre'
            }
        ],

    });



})
