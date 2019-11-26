(function($){
    // console.log('helllooooooooo')

    $('#quote-button').on('click', function(e){
        e.preventDefault();
      


        $.ajax({
            method: 'GET',
            url: wpApiSettings.root + 'wp/v2/posts?filter[orderby]=rand '
        }).done(function(data){

            //return all posts
            //get lenghth of data object, create random number between 0 and total
            //length of the array. make sure to round to a whole number.

            const randomNumber = Math.floor((Math.random() * 10));
            const title = data[randomNumber].title.rendered
            const content = data[randomNumber].content.rendered
            $('#quotes-content').html(`<h2>${title}</h2>${content}`)
        })




    })

    $('#submit-button').on('click', function(e){
       const $title = $('#quote-title').val()
       console.log($title)

       const data = {
           title: $title
       }


       $.ajax({
           method: 'POST',
           url: wpApiSettings.root + 'wp/v2/posts',
           data,
           beforeSend: function(xhr) {
               xhr.setRequestHeader('X-WP-Nonce', wpApiSettings.nonce)
           }
       })
    })



})(jQuery);





