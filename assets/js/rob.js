// Timeline JS
$(document).ready(function(){

    var timelineBoxWidthFirst = $('.rob-timeline-box-first').outerWidth() / 2;
    var timelineBoxHeight = $('.rob-timeline-box-last').outerHeight();
    var timelineBoxWidthLast = $('.rob-timeline-box-last').outerWidth() / 2;
    var windowWidth = $(window).width() + 17;

    var titHeightBox = $('.box-time-first').outerHeight();
    var boxHeight = $('.rob-box-timelinev2a').outerHeight();

    var titBoxHeight = $('.rob-box-timeline-tit1').outerHeight();
    var contBoxHeight = $('.rob-box-timeline-cont1').outerHeight();

    var studImgWidth = $('.rob-senior-stud-list .md-4').outerWidth() + 6;
    
    var colRightHeight = $('.col_right').outerHeight();

    var newBoxHeight = $('.rob-btm3_box1').outerHeight(); 

    var btmParent = $('.rob-btm3_parent').outerHeight();

    if( windowWidth < 769 ){
        $('.tweet_box').css({
            'height': '410px'
        })
        $('.rob-twit-box').css({
            'height': 'auto'
        })
    }else{
        $('.tweet_box').css({
            'height': btmParent
        })
        $('.rob-twit-box').css({
            'height': newBoxHeight
        })
    }
    
    $('.col_left').css({
        'height':  colRightHeight
    })

    if( windowWidth > 1600 ){
        $('.rob-timeline-line').css({
            "left" : timelineBoxWidthFirst + 10,
            "right" : timelineBoxWidthLast + 10
        });
    }else{
        $('.rob-timeline-line').css({
            "left" : timelineBoxWidthFirst + 10,
            "right" : timelineBoxWidthLast + 10
        });
    }

    if( windowWidth < 1025 ){
        $('.rob-timeline-line').css({
            'bottom': timelineBoxHeight - 68
        })
    }

    $('.box-time-second').css({
        'height': titHeightBox
    })

    $('.rob-box-timelinev2b').css({
        'height': boxHeight
    })

    $('.rob-box-timeline-tit2').css({
        'height': titBoxHeight
    })

    $('.rob-box-timeline-cont2').css({
        'height': contBoxHeight
    })

    $('.stud-img-cont').css({
        'width': studImgWidth
    })
        
});

$(window).resize(function(){

    var timelineBoxWidthFirst = $('.rob-timeline-box-first').outerWidth() / 2;
    var timelineBoxHeight = $('.rob-timeline-box-last').outerHeight();
    var timelineBoxWidthLast = $('.rob-timeline-box-last').outerWidth() / 2;
    var windowWidth = $(window).width() + 17;

    var titHeightBox = $('.box-time-first').outerHeight();
    var boxHeight = $('.rob-box-timelinev2a').outerHeight();

    var titBoxHeight = $('.rob-box-timeline-tit1').outerHeight();
    var contBoxHeight = $('.rob-box-timeline-cont1').outerHeight();

    var studImgWidth = $('.rob-senior-stud-list .md-4').outerWidth() + 6;

    var colRightHeight = $('.col_right').outerHeight();

    var newBoxHeight = $('.rob-btm3_box1').outerHeight(); 
    var btmParent = $('.rob-btm3_parent').outerHeight();

    if( windowWidth < 769 ){
        $('.tweet_box').css({
            'height': '410px'
        })
        $('.rob-twit-box').css({
            'height': 'auto'
        })
    }else{
        $('.tweet_box').css({
            'height': btmParent
        })
        $('.rob-twit-box').css({
            'height': newBoxHeight
        })
    }
    
    $('.col_left').css({
        'height':  colRightHeight
    })

    if( windowWidth > 1600 ){
        $('.rob-timeline-line').css({
            "left" : timelineBoxWidthFirst + 10,
            "right" : timelineBoxWidthLast + 10
        });
    }else{
        $('.rob-timeline-line').css({
            "left" : timelineBoxWidthFirst + 10,
            "right" : timelineBoxWidthLast + 10
        });
    }

    if( windowWidth < 1025 ){
        $('.rob-timeline-line').css({
            'bottom': timelineBoxHeight - 68
        })
    }

    $('.box-time-second').css({
        'height': titHeightBox
    })

    $('.rob-box-timelinev2b').css({
        'height': boxHeight
    })

    $('.rob-box-timeline-tit2').css({
        'height': titBoxHeight
    })

    $('.rob-box-timeline-cont2').css({
        'height': contBoxHeight
    })

    $('.stud-img-cont').css({
        'width': studImgWidth
    })

});
// End of Timeline JS

$(document).ready(function(){

        // Accordion Section
        var $ac = $('.rob-accordion-box'),
		$this = "";

		$ac.find('.rob-accordion-body').hide();

        $ac.find('.rob-accordion-header').click(function(e){
            e.preventDefault();

            $this = $(this);

            if($this.hasClass('is-active')) {
                $ac.find('.rob-accordion-header').removeClass('is-active');
                $ac.find('.rob-accordion-header').next().slideUp(500);
            }else{
                $this.addClass('is-active');
                $this.next().slideDown(500);
                $ac.find('.rob-accordion-header').not($this).removeClass('is-active').next().slideUp();
            }
            return false;
        });

        // Sticky Header
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 30) {
                $(".head-cntr").addClass("sticky");
                
                // $('.ob_banner_section').css({
                //     marginTop: 0
                // })
            } else {
                // $('.ob_banner_section').css({
                //     marginTop: $(".head-wrp").innerHeight()+"px"
                // })
                $(".head-cntr").removeClass("sticky");
            }
        });

        // Change the Icons
        $('.rob-nav-menu2').find('.rob-icon-launch a i').text('arrow_launch');
        
        $('#menu-nav-menu5 li').each(function(){
            var classes = $(this).attr('class').split(" ");
            var firstIndex = classes[0]
            $(this).find(".rob-icon-first").text(firstIndex)
        })

        // News Dropdown
        let sel_news = $("#rob_selected_news"),
		news_cat_sel = $("#rob_news_cat_sel"),
		news_drop_item = $(".news_drop_item"),
        news_val = ""

        sel_news.on("click",function(e){
            news_cat_sel.slideToggle()
        })
        news_drop_item.on('click',function(e){
            e.preventDefault()
            news_val = $(this).attr("data-val")
            
            window.location.href = news_val
            
            return false
        })

        // Scroll to div
        $('.scrollToDiv').click(function(event) {
            var id = $(this).attr("href");
            var offset = 100;
            var target = $(id).offset().top - offset;
            $('html, body').animate({scrollTop:target}, 1000);
            event.preventDefault();
        });

        

        


});