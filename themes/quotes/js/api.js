(function($){
    

    $('#quote-button').on('click', function(e){
        e.preventDefault();
      


        $.ajax({
            method: 'GET',
            url: qod_data.root_url + '/wp-json/quotes/v1/post'
        }).done(function(data){
            //return all posts
            //get lenghth of data object, create random number between 0 and total
            //length of the array. make sure to round to a whole number.
            const randomNumber = Math.floor((Math.random() * 10));
            const title = data[randomNumber].title
            const content = data[randomNumber].content
            const source = data[randomNumber].quotesURL
            const url = data[randomNumber].quotesSource
            $('#quotes-content').html(
            `<i class="fas fa-quote-left"></i>
                <span class="merged">
                    <div class="content">
                        ${content}
                    </div>
                    <div class="title">
                        <h2>
                        <span>-</span>${title}<a class="source" href="${url}">${source}</a>
                        </h2>
                        
                        
                        
                        
                    </div>
                </span>
            <i class="fas fa-quote-right"></i>
            `)
        })
    })

    $('#submit-button').on('click', function(e){
       const $title = $('#quote-title').val()
       const $content = $('#quote-content').val()
       const $url = $('#quote-url').val()
       const $source = $('#quote-source').val()
       const data = {
           title: $title,
           content: $content,
           _qod_quote_source_url: $url,
           _qod_quote_source: $source
           
       }


       $.ajax({
           method: 'POST',
           url: qod_data.root_url + '/wp-json/wp/v2/posts',
           data,
           beforeSend: function(xhr) {
               xhr.setRequestHeader('X-WP-Nonce', qod_data.nonce)
           }
       })
    })

})(jQuery);