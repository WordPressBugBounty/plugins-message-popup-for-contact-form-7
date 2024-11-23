jQuery( document ).ready(function() {
    // console.log( "ready!" );
    var wpcf7Forms = document.querySelectorAll( '.wpcf7' );

    var popup_msg_text = popup_message.popup_text;
    var popup_msg_failure_text = popup_message.popup_failure_text;
    var popup_success_enable = popup_message.popup_success_enable;
    var popup_failure_enable = popup_message.popup_failure_enable;
    var mpfcf7_hide_popup = popup_message.mpfcf7_hide_popup;
    var popup_failure_timer = popup_message.popup_failure_timer;
    var mpfcf7_btn_text = popup_message.mpfcf7_btn_text;
    var mpfcf7_failure_btn_text = popup_message.mpfcf7_failure_btn_text;
    
    wpcf7Forms.forEach(function(form) {
        form.addEventListener( 'wpcf7submit', function( event ) {
            var currentformid = event.detail.contactFormId;
            var custome = event.detail.apiResponse.status;
            var popup_message = event.detail.apiResponse.message;

            if(popup_msg_text == ''){
                popup_text = popup_message;
            }else{
                popup_text = popup_msg_text;
            }

            //swal("Oops" ,  event.detail.apiResponse.message ,  "error");
            // console.log(event);

            if (custome == 'validation_failed' || custome == 'mail_failed') {
                if (popup_failure_enable == 1) {
                    swal("Oops", popup_text, "error", {
                        buttons: mpfcf7_failure_btn_text,
                        timer:popup_failure_timer,
                        className: "custom-failure-popup",
                    });

                    setTimeout(() => {
                        const overlay = document.querySelector('.swal-overlay');
                        if(overlay){
                            overlay.classList.remove('custom-success-overlay');
                            overlay.classList.add('custom-failure-overlay');
                            
                        }
                    }, 100)
                }
            } else {
                if (popup_success_enable == 1) {
                    swal("Success", popup_text, "success", {
                        buttons: mpfcf7_btn_text,
                        timer: mpfcf7_hide_popup,
                        className: "custom-success-popup",
                    });

                    setTimeout(() => {
                        const overlay = document.querySelector('.swal-overlay');
                         if(overlay){
                            overlay.classList.remove('custom-failure-overlay');
                            overlay.classList.add('custom-success-overlay');
                        }
                    }, 100);
                }
            }
            
        });
    });
});