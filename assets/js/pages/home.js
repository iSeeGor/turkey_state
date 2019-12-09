// Custom Scrollbar
$(function () {
   
    // $('.testimonialSlider__message-inner').each(function() {
    //     new SimpleBar(
    //         this,
    //         {
    //             autoHide: false
    //         }
    //     );
    // })

    let list = document.querySelectorAll('.testimonialSlider__message-inner');

    list.forEach(function (item) {
        new SimpleBar(item,
            {
                autoHide: false
            });    
    });
     
});
