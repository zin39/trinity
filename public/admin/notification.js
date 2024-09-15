
$(document).ready(function(){
    $('.list_notifications').on('change', 'input.delete_notification_id', function() {
        var notif_ids = $(".delete_notification_id:checked").map(function(){
            return $(this).val();
        }).get();

        if(notif_ids.length == 0) {
            $('#selected-notif-count').html('');
        } else {
            $('#selected-notif-count').html( `(${notif_ids.length})`);
        }
    });

    $('#clear-all').click(function(){
        // Loop through each element with the class 'notice-id'
        var noticeIds = $(".delete_notification_id:checked").map(function(){
            return $(this).val();
        }).get();

        $.ajax({
            type: 'POST',
            url: clearnotificationurl,
            data: {
                noticeIds,
                _token
            },
            success: function(response) {
                var remainingNotifications = response.remainingNotifications;
                var count_notification = response.count_notification;
                var output = '';
                $('.media-list').html('');
                $('#selected-notif-count').html('');

                if(remainingNotifications.length > 0){
                    remainingNotifications.forEach(function(notice) {
                        // Action to perform for each element
                        var icon = (notice.is_read =='0') ? "icon-bell3" :"icon-bell-check";
                        var icon_color = (notice.is_read =='0') ? "text-danger" :"text-success";
                        output += '<li class="media '+(notice.is_read =='0' ? 'bg_light' : '')+'">';
                        output  +=  '<div class="media-body d-flex align-items-center">';
                        output  +=      '<div class="custom-control custom-control-sm custom-checkbox d-flex align-items-center">';
                        output  +=          '<input type="checkbox" class="custom-control-input delete_notification_id" id="notification_'+notice.id+'" value="'+notice.id+'" name="notification_id[]">';
                        output  +=          '<label class="custom-control-label custom-control-label-sm" for="notification_'+notice.id+'"></label>';
                        output  +=       '</div>';
                        output  +=      '<div class="media-title d-flex justify-content-between w-100">';
                        output  +=            '<a class="custom-link-style d-flex align-items-center w-100" href="'+location.origin+'/admin/Notification/checkLink?notification_id='+notice.id+'">';
                        output  +=                '<i class="'+icon+' '+icon_color+' mr-1"></i>';
                        output  +=                '<div class="flex-grow-1">';
                        output  +=                  '<span class="text-dark">'+notice.message+' </span>';
                        output  +=                  '<span class="text-muted font-size-sm  d-block">'+notice.created_at_diff+'</span>';
                        output  +=                '</div>';
                        output  +=           '</a>';
                        output  +=        '</div>';
                        output  +=        '<div class="delete-button text-danger cursor-pointer text-end ml-1">';
                        output  +=         '<i class="fas fa-times notice-id" data-notice-id="'+notice.id+'"></i>';
                        output  +=        '</div>';
                        output  +=    '</div>';
                        output  +=    '<hr class="mt-2 mb-0">';
                        output  +='</li>';
                    });
                    $('.media-list').html(output);
                }else{
                    $('.media-list').html('<li><span>No Notification</span></li>');
                }
                $('.badge-pill').text(count_notification);
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.error(error);
            }
        });
    });

    $('.media-list').on('click', '.notice-id', function() {
        var noticeid = $(this).data('notice-id');
        $.ajax({
            type: 'POST',
            url: deletenotificationurl,
            data: {
                noticeid,
                _token
            },
            success: function(response) {
                var remainingNotifications = response.remainingNotifications;
                var count_notification = response.count_notification;
                var output = '';
                $('.media-list').html('');
                $('#selected-notif-count').html('');

                if(remainingNotifications.length > 0){
                    remainingNotifications.forEach(function(notice) {
                        // Action to perform for each element
                        var icon = (notice.is_read =='0') ? "icon-bell3" :"icon-bell-check";
                        var icon_color = (notice.is_read =='0') ? "text-danger" :"text-success";

                        output += '<li class="media '+(notice.is_read =='0' ? 'bg_light' : '')+'">';
                        output  +=  '<div class="media-body d-flex align-items-center">';
                        output  +=      '<div class="custom-control custom-control-sm custom-checkbox d-flex align-items-center">';
                        output  +=          '<input type="checkbox" class="custom-control-input delete_notification_id" id="notification_'+notice.id+'" value="'+notice.id+'" name="notification_id[]">';
                        output  +=          '<label class="custom-control-label custom-control-label-sm" for="notification_'+notice.id+'"></label>';
                        output  +=       '</div>';
                        output  +=      '<div class="media-title d-flex justify-content-between w-100">';
                        output  +=            '<a class="custom-link-style d-flex align-items-center w-100" href="'+location.origin+'/admin/Notification/checkLink?notification_id='+notice.id+'">';
                        output  +=                '<i class="'+icon+' '+icon_color+' mr-1"></i>';
                        output  +=                '<div class="flex-grow-1">';
                        output  +=                  '<span class="text-dark">'+notice.message+' </span>';
                        output  +=                  '<span class="text-muted font-size-sm  d-block">'+notice.created_at_diff+'</span>';
                        output  +=                '</div>';
                        output  +=           '</a>';
                        output  +=        '</div>';
                        output  +=        '<div class="delete-button text-danger cursor-pointer text-end ml-1">';
                        output  +=         '<i class="fas fa-times notice-id" data-notice-id="'+notice.id+'"></i>';
                        output  +=        '</div>';
                        output  +=    '</div>';
                        output  +=    '<hr class="mt-2 mb-0">';
                        output  +='</li>';
                    });
                    $('.media-list').html(output);
                }else{
                    $('.media-list').html('<li><span>No Notification</span></li>');
                }
                $('.badge-pill').text(count_notification);
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.error(error);
            }
        });
    });
});