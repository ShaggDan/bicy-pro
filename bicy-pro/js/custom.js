$(document).ready(function() {

    // var userFeed = new Instafeed({
    //     get: 'user',
    //     userId: '5894679359',
    //     limit: 4,
    //     resolution: 'standard_resolution',
    //     accessToken: '5894679359.1677ed0.f3a74a4fdebb45999d2751a97fd43799',
    //     sortBy: 'most-recent',
    //     template: '<div class="col-lg-3 instaimg"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid col-md-12"/></a></div>',
        
    // });


    // userFeed.run();
    // var btnInstafeedLoad = document.getElementById("btn btn-primary btn-instafeed-load");
    //     btnInstafeedLoad.addEventListener("click", function() {
    //   galleryFeed.next()
    // });

    
    // // This will create a single gallery from all elements that have class "gallery-item"
    // $('.gallery').magnificPopup({
    //     type: 'image',
    //     delegate: 'a',
    //     gallery: {
    //         enabled: true
    //     }
    // });

    // How to get an access token:
    // http://jelled.com/instagram/access-token

    // TODO:
    // - improve UI
    // - make it easy to copy and paste image url

    // {{model.user.username}}, {{likes}} likes

    var galleryFeed = new Instafeed({
      get: "user",
      userId: '5894679359',
      accessToken: '5894679359.1677ed0.f3a74a4fdebb45999d2751a97fd43799',
      resolution: "standard_resolution",
      useHttp: "true",
      limit: 8,
      template: '<div class="col-lg-3 instaimg"><a href="{{image}}"><div class="img-featured-container"><div class="img-backdrop"></div><div class="description-container"><p class="caption">{{caption}}</p><span class="likes"><i class="glyphicon glyphicon-heart"></i> {{likes}}</span><span class="comments"><i class="glyphicon glyphicon-comment"></i> {{comments}}</span></div><img src="{{image}}" class="img-fluid col-md-12"></div></a></div>',
      target: "instafeed-gallery-feed",
      after: function() {
        // disable button if no more results to load
        if (!this.hasNext()) {
          btnInstafeedLoad.setAttribute('disabled', 'disabled');
        }
      },
    });
    galleryFeed.run();

     $('.gallery').magnificPopup({
         type: 'image',
         delegate: 'a',
         gallery: {
             enabled: true
         }
     });

    var btnInstafeedLoad = document.getElementById("btn-instafeed-load");
    btnInstafeedLoad.addEventListener("click", function() {
      galleryFeed.next()
    });


});


