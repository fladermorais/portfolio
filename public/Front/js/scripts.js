/*
| ----------------------------------------------------------------------------------
| TABLE OF CONTENT
| ----------------------------------------------------------------------------------
|	
|	01.Lazy Background non Mobile         
|	02.Disable Mobile Animated   
|	03.Home slider And Sticky Header   
|	04.HOME SLIDER   
|	05.PARALAX SECTION            
|	06.SCROLL TOP          
|	07.HOVER TABS         
|	08.SLY   SCROLL            
|	09.POST SLIDER              
|	10.CATEGORY SLIDER  
|	11.Advanced Search              
|	12.SLIDER PRODUCTS         
|	13.ISOTOPE FILTER           
|	14.Qty product
|	15.Zoom Images                 
|	16.PRICE RANGE           
|	17.SELECT BOX              
|	18.SWITCHER GRID          
|	19.Animate anchor         
|	20.Flickr Feed          
|	21.STAR RATING   
*/
jQuery(function($) {


    "use strict";


    var windowHeight = $(window).height();
    var windowWidth = $(window).width();


    /////////////////////////////////////
    //  Lazy Background non Mobile
    /////////////////////////////////////



    var bLazy = new Blazy();

    $("*").live("click", function() {
        var bLazy = new Blazy();
    });


    $(window).scroll(function(e) {
        var bLazy = new Blazy();
    });




    /////////////////////////////////////
    //  Disable Mobile Animated
    /////////////////////////////////////


    if (windowWidth < 850) {

        $("body").removeClass("animated-all");



    }



    $('.animated-all .animated:not(.animation-done)').waypoint(function() {



        var animation = $(this).data('animation');

        $(this).addClass('animation-done').addClass(animation);

    }, {
        triggerOnce: true,
        offset: '90%'
    });




    /////////////////////////////////////
    //  Home slider And Sticky Header
    /////////////////////////////////////

    function sliderAutoHeight() {


      
	    if (windowWidth > 850) {
			
			
			  if ($('body').length) {
            $(window).on('scroll', function() {
                var winH = $(window).scrollTop();
                var $pageHeader = $('.yamm');
                if (winH > windowHeight - 120) {
                    $pageHeader.addClass('navbar-fixed-top');
                } else {
                    $pageHeader.removeClass('navbar-fixed-top');
                }
            });
        }

}

      /*  var slider = $("#iview");




        if (windowHeight > 450) {

            slider.css("max-height", windowHeight - 45);




        };*/




    };


    sliderAutoHeight();


    $(window).resize(function() {
        sliderAutoHeight();
    });


    ////////////////////////////////////////////  
    // HOME SLIDER
    ///////////////////////////////////////////  

    if ($('#iview').length > 0) {


        $('#iview').iView({
            pauseTime: 6000,
            pauseOnHover: false,
            directionNavHoverOpacity: 0,
            timer: "Bar",
            timerDiameter: "50%",
            timerPadding: 0,
            timerStroke: 7,
            timerBarStroke: 0,
            timerColor: "#FFF",
            timerPosition: "bottom-right",
            nextLabel: "",
            previousLabel: "",
        });


    }



    ////////////////////////////////////////////  
    // PARALAX SECTION
    ///////////////////////////////////////////  




    $(window).scroll(function(e) {
        parallax();
    });



    function parallax() {
        var scrolled = $(window).scrollTop();
        $('.animated-all .parallax-bg').css('top', -(scrolled * 0.9) + 'px' - 40);
    }





/*  var x = 0;
	        var y = 0;
			//cache a reference to the banner
	        var banner = $(".parallax-bg");

			// set initial banner background position
	        banner.css('backgroundPosition', x + 'px' + ' ' + y + 'px');

	 		// scroll up background position every 90 milliseconds
	        window.setInterval(function() {
	        	banner.css("backgroundPosition", x + 'px' + ' ' + y + 'px');
	            y--;
	            //x--;

	            //if you need to scroll image horizontally -
	            // uncomment x and comment y

	        }, 90);
			*/
			

    ////////////////////////////////////////////  
    // SCROLL TOP
    ///////////////////////////////////////////



    $('.scroll-top').click(function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: 0
        }, 300);
    });



    ////////////////////////////////////////////  
    // HOVER TABS
    ///////////////////////////////////////////  



    $('.about-tabs a').hover(function(e) {
        e.preventDefault()
        $(this).tab('show')
    });




    ////////////////////////////////////////////  
    // SLY SCROLL
    ///////////////////////////////////////////  



    $('.xcarousel-1 .x-frame').sly(

        {
            horizontal: 1,
            itemNav: 'basic',
            smart: 1,
            activateOn: 'click',
            mouseDragging: 1,
            touchDragging: 1,
            releaseSwing: 1,

            activatePageOn: 'click',
            speed: 300,
            elasticBounds: 1,
            easing: 'easeOutExpo',
            dragHandle: 1,
            dynamicHandle: 1,
            clickBar: 1,

            // Buttons
            prevPage: '.xcarousel-1 .prev-page',
            nextPage: '.xcarousel-1 .next-page'
        }

    );

    $('.xcarousel-2 .x-frame').sly(

        {
            horizontal: 1,
            itemNav: 'basic',
            smart: 1,
            activateOn: 'click',
            mouseDragging: 1,
            touchDragging: 1,
            releaseSwing: 1,

            activatePageOn: 'click',
            speed: 300,
            elasticBounds: 1,
            easing: 'easeOutExpo',
            dragHandle: 1,
            dynamicHandle: 1,
            clickBar: 1,

            // Buttons
            prevPage: '.xcarousel-2 .prev-page',
            nextPage: '.xcarousel-2 .next-page'
        }

    );


    $('.xcarousel-3  .x-frame').sly(

        {
            horizontal: 1,
            itemNav: 'basic',
            smart: 1,
            activateOn: 'click',
            mouseDragging: 1,
            touchDragging: 1,
            releaseSwing: 1,

            activatePageOn: 'click',
            speed: 300,
            elasticBounds: 1,
            easing: 'easeOutExpo',
            dragHandle: 1,
            dynamicHandle: 1,
            clickBar: 1,

            // Buttons
            prevPage: '.xcarousel-3 .prev-page',
            nextPage: '.xcarousel-3 .next-page'
        }

    );




    $('.xcarousel-4  .x-frame').sly(

        {
            horizontal: 1,
            itemNav: 'basic',
            smart: 1,
            activateOn: 'click',
            mouseDragging: 1,
            touchDragging: 1,
            releaseSwing: 1,

            activatePageOn: 'click',
            speed: 300,
            elasticBounds: 1,
            easing: 'easeOutExpo',
            dragHandle: 1,
            dynamicHandle: 1,
            clickBar: 1,

            // Buttons
            prevPage: '.xcarousel-4 .prev-page',
            nextPage: '.xcarousel-4 .next-page'
        }

    );




    $('.xcarousel-5  .x-frame').sly(

        {
            horizontal: 1,
            itemNav: 'basic',
            smart: 1,
            activateOn: 'click',
            mouseDragging: 1,
            touchDragging: 1,
            releaseSwing: 1,

            activatePageOn: 'click',
            speed: 300,
            elasticBounds: 1,
            easing: 'easeOutExpo',
            dragHandle: 1,
            dynamicHandle: 1,
            clickBar: 1,

            // Buttons
            prevPage: '.xcarousel-5 .prev-page',
            nextPage: '.xcarousel-5 .next-page'
        }

    );


    /////////////////////////////////////
    // POST SLIDER
    /////////////////////////////////////


    $('.carousel-post').bxSlider({
        minSlides: 1, // item 5
        maxSlides: 1, // item 4
        slideWidth: 870,
        infiniteLoop: true,
        auto: true,
        nextText: '',
        prevText: '',
        pagerSelector: '1'
    });




    /////////////////////////////////////
    // CATEGORY SLIDER
    /////////////////////////////////////


    $('.category-slider').bxSlider({
        minSlides: 1, // item 5
        maxSlides: 1, // item 4
        slideWidth: 1250,
        infiniteLoop: true,
        auto: false,
        nextText: '',
        prevText: ''

    });

    $('.verticale-carousel').bxSlider({
        minSlides: 3, // item 5
        maxSlides: 3, // item 4
        slideWidth: 350,
        infiniteLoop: true,
        slideMargin: 5,
        auto: true,
        mode: 'vertical',
        nextText: '',
        prevText: '',
        pagerSelector: '1'
    });




    $('.bx-next').html(' <i class="icomoon-arrow-right"></i>');
    $('.bx-prev').html(' <i class="icomoon-arrow-left"></i>');

    $('.flex-next').html(' <i class="icomoon-arrow-right"></i>');
    $('.flex-prev').html(' <i class="icomoon-arrow-left"></i>');




    ////////////////////////////////////////////  
    // Advanced Search
    ///////////////////////////////////////////  



    $('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#", "");
        var concept = $(this).text();
        $('.search-panel span#search_concept').text(concept);
        $('.input-group #search_param').val(param);
    });




    ////////////////////////////////////////////  
    // SLIDER PRODUCTS
    ///////////////////////////////////////////  



    if ($('#slider-product').length > 0) {


        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 105,
            itemMargin: 4,
            asNavFor: '#slider-product'
        });

        $('#slider-product').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel"
        });


    }



    ////////////////////////////////////////////  
    // ISOTOPE FILTER
    ///////////////////////////////////////////	 
	
	

    $('.isotope-filter').isotope({
        itemSelector: '.isotope-item'
    });

    $('#filter a').click(function() {

        $('#filter a').removeClass('current');
        $(this).addClass('current');
        var selector = $(this).attr('data-filter');

        $('.isotope-filter').isotope({
            filter: selector,
            animationOptions: {
                duration: 1000,
                easing: 'easeOutQuart',
                queue: false
            }
        });
        return false;

    });




    var options = {
        horizontal: 1,
        itemNav: 'basic',
        smart: 1,
        mouseDragging: 1,
        touchDragging: 1,
        releaseSwing: 1,
        scrollBar: '.sly_scrollbar_isotope',
        speed: 300,
        elasticBounds: 1,
        easing: 'easeOutExpo',
        dragHandle: 1,
        dynamicHandle: 1,
        clickBar: 1,
    };

    //$('.isotope-frame').sly(options);




    /////////////////////////////////////
    // Qty
    /////////////////////////////////////



    jQuery(".minus_btn").click(function() {
        var inputEl = jQuery(this).parent().children().next();
        var qty = inputEl.val();
        if (jQuery(this).parent().hasClass("minus_btn"))
            qty++;
        else
            qty--;
        if (qty < 0)
            qty = 0;
        inputEl.val(qty);
    })


    jQuery(".plus_btn").click(function() {
        var inputEl = jQuery(this).parent().children().next();
        var qty = inputEl.val();
        if (jQuery(this).hasClass("plus_btn"))
            qty++;
        else
            qty--;
        if (qty < 0)
            qty = 0;
        inputEl.val(qty);
    })



    /////////////////////////////////////
    //  Zoom Images
    /////////////////////////////////////

    $("a.magnific").magnificPopup({
        type: 'image'
    });


    $("#slider-product .slides > li a").magnificPopup({
        type: 'image'
    });



    $(".video-popab").prettyPhoto({
        theme: 'dark_square'
    });




    $(".product-grid li").hover(
        function() {
            $(this).addClass('x-hovered-active');
        },
        function() {
            $(this).removeClass('x-hovered-active');
        }
    );

    $("#cd-team li").hover(
        function() {
            $(this).addClass('x-hovered-active');
        },
        function() {
            $(this).removeClass('x-hovered-active');
        }
    );




    /////////////////////////////////////////////////////////////////
    //PRICE RANGE
    /////////////////////////////////////////////////////////////////


    if ($('#slider-start').length > 0) {


        $("#slider-start").noUiSlider({
            start: [20, 80],
            range: {
                'min': [0],
                'max': [100]
            }
        });

    }


    if ($('#slider-start2').length > 0) {



        $("#slider-start2").noUiSlider({
            start: [20, 80],
            range: {
                'min': [0],
                'max': [100]
            }
        });

    }




    /////////////////////////////////////
    // SELECT BOX
    /////////////////////////////////////


    if ($('#find-car').length > 0) {

        $("#find-car select").selectbox();

    }

    if ($('.widget-filter').length > 0) {

        $(".widget-filter select").selectbox();

    }

    if ($('.form-group select').length > 0) {

        $(".form-group select").selectbox();


    }

    /////////////////////////////////////
    // SWITCHER GRID
    /////////////////////////////////////



    $('.filter-panel #list').click(function(event) {
        event.preventDefault();
        $('.catalog-grid .product-grid').removeClass('grid-view');
        $('.catalog-grid .product-grid').addClass('list-view');
    });
    $('.filter-panel #grid').click(function(event) {
        event.preventDefault();
        $('.catalog-grid .product-grid').removeClass('list-view');
        $('.catalog-grid .product-grid').addClass('grid-view');
    });

    $('.filter-panel #list').click(function() {
        $('#grid').removeClass("active-btn");
        $(this).addClass("active-btn");
    });
    $('.filter-panel #grid').click(function() {
        $('#list').removeClass("active-btn");
        $(this).addClass("active-btn");
    });


    $('.toggle_sidebar').click(



        function() {

            $(this).toggleClass("active-btn");


            $(".col-resize").toggleClass("col-resize-full-width");

            $(".sidebar-resize").toggle();

        }



    )



    ////////////////////////////////////////////  
    // Animate anchor
    ///////////////////////////////////////////  



    $(function() {
        $('.toggle_sidebar[href^="#"]').click(function() {
            var target = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 1400);
            return false;
        });
    });

    $(function() {
        $('.add-rev-link[href^="#"]').click(function() {
            var target = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 1400);
            return false;
        });
    });


    $(function() {
        $('.iview-caption .btn[href^="#"]').click(function() {
            var target = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 1400);
            return false;
        });
    });




    /////////////////////////////////////
    // Flickr Feed
    /////////////////////////////////////



    // Get your flickr ID from: http://idgettr.com/



    var flickr_id = '120066133@N02';

    var $flcr_feed

    $flcr_feed = $('#flickr-feed');
    if ($flcr_feed.length) {
        $('#flickr-feed').jflickrfeed({
            limit: 9,
            qstrings: {
                id: '120066133@N02'
            },
            itemTemplate: '<li><a href="{{image_b}}" rel="prettyPhoto[flickr]"><img src="{{image_s}}" alt="{{title}}" /><span><i class="icomoon-search"></i></span></a></li>',
            itemCallback: function() {
                $("a[rel='prettyPhoto[flickr]']").prettyPhoto({
                    changepicturecallback: function() {
                        $('.pp_pic_holder').show();
                    }
                });
            }
        });
    }



    var flickr_id = '120066133@N02';

    var $flcr_feed

    $flcr_feed = $('#flickr-feed2');
    if ($flcr_feed.length) {
        $('#flickr-feed2').jflickrfeed({
            limit: 9,
            qstrings: {
                id: '120066133@N02'
            },
            itemTemplate: '<li><a href="{{image_b}}" rel="prettyPhoto[flickr]"><img src="{{image_s}}" alt="{{title}}" /><span><i class="icomoon-search"></i></span></a></li>',
            itemCallback: function() {
                $("a[rel='prettyPhoto[flickr]']").prettyPhoto({
                    changepicturecallback: function() {
                        $('.pp_pic_holder').show();
                    }
                });
            }
        });
    }

    /////////////////////////////////////
    // STAR RATING
    /////////////////////////////////////


    var __slice = [].slice;

    (function($, window) {
        var Starrr;

        Starrr = (function() {
            Starrr.prototype.defaults = {
                rating: void 0,
                numStars: 5,
                change: function(e, value) {}
            };

            function Starrr($el, options) {
                var i, _, _ref,
                    _this = this;

                this.options = $.extend({}, this.defaults, options);
                this.$el = $el;
                _ref = this.defaults;
                for (i in _ref) {
                    _ = _ref[i];
                    if (this.$el.data(i) != null) {
                        this.options[i] = this.$el.data(i);
                    }
                }
                this.createStars();
                this.syncRating();
                this.$el.on('mouseover.starrr', 'i', function(e) {
                    return _this.syncRating(_this.$el.find('i').index(e.currentTarget) + 1);
                });
                this.$el.on('mouseout.starrr', function() {
                    return _this.syncRating();
                });
                this.$el.on('click.starrr', 'i', function(e) {
                    return _this.setRating(_this.$el.find('i').index(e.currentTarget) + 1);
                });
                this.$el.on('starrr:change', this.options.change);
            }

            Starrr.prototype.createStars = function() {
                var _i, _ref, _results;

                _results = [];
                for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
                    _results.push(this.$el.append("<i class='fa fa-star-o'></i>"));
                }
                return _results;
            };

            Starrr.prototype.setRating = function(rating) {
                if (this.options.rating === rating) {
                    rating = void 0;
                }
                this.options.rating = rating;
                this.syncRating();
                return this.$el.trigger('starrr:change', rating);
            };

            Starrr.prototype.syncRating = function(rating) {
                var i, _i, _j, _ref;

                rating || (rating = this.options.rating);
                if (rating) {
                    for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
                        this.$el.find('i').eq(i).removeClass('fa-star-o').addClass('fa-star');
                    }
                }
                if (rating && rating < 5) {
                    for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
                        this.$el.find('i').eq(i).removeClass('fa-star').addClass('fa-star-o');
                    }
                }
                if (!rating) {
                    return this.$el.find('i').removeClass('fa-star').addClass('fa-star-o');
                }
            };

            return Starrr;

        })();
        return $.fn.extend({
            starrr: function() {
                var args, option;

                option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
                return this.each(function() {
                    var data;

                    data = $(this).data('star-rating');
                    if (!data) {
                        $(this).data('star-rating', (data = new Starrr($(this), option)));
                    }
                    if (typeof option === 'string') {
                        return data[option].apply(data, args);
                    }
                });
            }
        });
    })(window.jQuery, window);

    $(function() {
        return $(".starrr").starrr();
    });

    $(document).ready(function() {

        $('#stars').on('starrr:change', function(e, value) {
            $('#count').html(value);
        });

        $('#stars-existing').on('starrr:change', function(e, value) {
            $('#count-existing').html(value);
        });
    });


});