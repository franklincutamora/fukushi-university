$(document).ready(function(){

    $('.modal_btn').click(function () { 
        $('.modal_wrp').addClass('view-modal');
    });
    $('.modal_btn2').click(function () { 
        $(this).next('.modal_wrp').addClass('view-modal');
    });
    $('.close_modal').click(function () { 
        $('.modal_wrp').removeClass('view-modal');
    });
    
    $(document).on('click', '.dd_btn', function(e){
        e.preventDefault();
        $(this).next('div').stop().slideToggle();
        $(this).toggleClass('active');
    })

    $('.event_img').click(function () { 
        $(this).next('.event_modal_wrp').addClass('view-modal');
    });
    $('.close_modal').click(function () { 
        $('.event_modal_wrp').removeClass('view-modal');
    });


  


    $('.slide_bot').click(function(event) {
    var id = $(this).attr("href");
    var offset = 0;
    var target = $(id).offset().top - offset;
    $('html, body').animate({scrollTop:target}, 1000);
    event.preventDefault();
    });

    if(navigator.userAgent.indexOf("Mac") > 0){
        $("body").addClass("safari");
    }

    function getOS() {
        var userAgent = window.navigator.userAgent,
            platform = window.navigator.platform,
            macosPlatforms = ['Macintosh', 'MacIntel', 'MacPPC', 'Mac68K'],
            windowsPlatforms = ['Win32', 'Win64', 'Windows', 'WinCE'],
            iosPlatforms = ['iPhone', 'iPad', 'iPod'],
            os = null;
      
        if (macosPlatforms.indexOf(platform) !== -1) {
          os = 'MacOS';
        } else if (iosPlatforms.indexOf(platform) !== -1) {
          os = 'iOS';
        } else if (windowsPlatforms.indexOf(platform) !== -1) {
          os = 'Windows';
        } else if (/Android/.test(userAgent)) {
          os = 'Android';
        } else if (!os && /Linux/.test(platform)) {
          os = 'Linux';
        }
      
        return os;
      }
      
      $('body').addClass(getOS());

   

});


(function ($) {
    $.extend({
       browser: function(){
           var ua= navigator.userAgent, tem, 
           M= ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
           if(/trident/i.test(M[1])){
               tem=  /\brv[ :]+(\d+)/g.exec(ua) || [];
               M[1] = "Internet Explorer";
               M[2] = tem[1];
           }
           if(M[1]=== 'Chrome'){
               tem= ua.match(/\b(OPR|Edge)\/(\d+)/);
               if(tem!= null) M[1] = tem.slice(1).join(' ').replace('OPR', 'Opera'); else M[1] = "Chrome";
               
           }
           M= M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
           if((tem= ua.match(/version\/(\d+)/i))!= null) M.splice(1, 1, tem[1]);
           
           var firefox = /firefox/.test(navigator.userAgent.toLowerCase()) && !/webkit    /.test(navigator.userAgent.toLowerCase());
           var webkit  = /webkit/.test(navigator.userAgent.toLowerCase());
           var opera   = /opera/.test(navigator.userAgent.toLowerCase());
           var msie    = /msie/.test(navigator.userAgent.toLowerCase())||/msie (\d+\.\d+);/.test(navigator.userAgent.toLowerCase())||/trident.*rv[ :]*(\d+\.\d+)/.test(navigator.userAgent.toLowerCase());
           var prefix  = msie?"":(webkit?'-webkit-':(firefox?'-moz-':''));
           
           return {name: M[0], version: M[1], firefox: firefox, opera: opera, msie: msie, chrome: webkit, prefix: prefix};
       }
   });
   jQuery.browser = $.browser();
   $('body').addClass($.browser.name);
})(jQuery);