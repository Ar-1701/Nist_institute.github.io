// Start Jquery 
$(document).ready(function () {
    // NOtice- insert
    $("#notice_submit").on("click", function () {

        var post_title = $("#post_title").val();
        var postdesc = $("#postdesc").val();
        var category = [];
        $(".get_value").each(function () {
            if ($(this).is(":selected")) {
                category.push($(this).val());
            }
        });
        category = category.toString();
        // Post Insert
        $.ajax({
            url: "save-notice.php",
            type: "POST",
            data: { post_title: post_title, postdesc: postdesc, category: category },
            success: function (data) {
                $("#add-form").trigger("reset");
                window.location = "notice.php";
            }
        });
    });  // submit btn CLosed 
    // <<<<<<----------INSERT COURSE--------->>>>>>
    $(document).on("click", "#course-submit", function () {
        var course_name = $("#course_name").val();
        // var course_link = $("#course_link").val();
        var course_eligible = $("#course_eligible").val();
        var course_sly = $("#course_sly").val();
        var course_duration = $("#course_duration").val();
        if (course_name == "" && course_eligible == "" && course_sly == "" && course_duration == "") {
            alert("All Fields Are Required.");
        }
        // Post Insert
        else {
            $.ajax({
                url: "save-course.php",
                type: "POST",
                data: {
                    course_name: course_name, course_eligible: course_eligible, course_sly: course_sly,
                    course_duration: course_duration
                },
                success: function (data) {
                    $("#add-form-course").trigger("reset");
                    window.location = "course-list.php";
                }
            });
        }
    });  // submit btn CLosed 
    // ----------------LOGIN - PAGE-----------------
    // ----------------LOGIN - PAGE - CLOSED-----------------
    // ADMIN DELETE CONFIRMATION BUTTON
    $(document).on("click", ".delete", function () {
        return confirm("Are You Sure To Delete Record. ");
    });
    // ABOUT READMORE PAGE
    $(".readMore").on("click", function () {
        $(this).parent().toggleClass("show");
        var replaceText = $(this).parent().hasClass("show") ? "ReadLess" : "ReadMore";
        $(this).html(replaceText);
    });

});
// last Bracket