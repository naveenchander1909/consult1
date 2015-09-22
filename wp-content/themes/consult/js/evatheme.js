/*! Fluidvids v2.2.0 | (c) 2014 @toddmotto | github.com/toddmotto/fluidvids */
!function(a,b){"function"==typeof define&&define.amd?define(b):"object"==typeof exports?module.exports=b:a.fluidvids=b()}(this,function(){"use strict";var a={selector:"iframe",players:["www.youtube.com","player.vimeo.com"]},b=document.head||document.getElementsByTagName("head")[0],c=".fluidvids{width:100%;position:relative;}.fluidvids iframe{position:absolute;top:0px;left:0px;width:100%;height:100%;}",d=function(b){var c=new RegExp("^(https?:)?//(?:"+a.players.join("|")+").*$","i");return c.test(b)},e=function(a){if(!a.getAttribute("data-fluidvids")){var b=document.createElement("div"),c=parseInt(a.height?a.height:a.offsetHeight,10)/parseInt(a.width?a.width:a.offsetWidth,10)*100;a.parentNode.insertBefore(b,a),a.setAttribute("data-fluidvids","loaded"),b.className+="fluidvids",b.style.paddingTop=c+"%",b.appendChild(a)}},f=function(){var a=document.createElement("div");a.innerHTML="<p>x</p><style>"+c+"</style>",b.appendChild(a.childNodes[1])};return a.apply=function(){for(var b=document.querySelectorAll(a.selector),c=0;c<b.length;c++){var f=b[c];d(f.src)&&e(f)}},a.init=function(b){for(var c in b)a[c]=b[c];a.apply(),f()},a});

window.jQuery = window.$ = jQuery;


//Fixed Menu
var fixed_menu = true;

jQuery(window).scroll(function () {
    if (fixed_menu && $(window).width() >= 768) {
		if ($(window).scrollTop() > jQuery('#top_bar').height()) {
			$('header.header_sticky').addClass('menu_fixed');
		} else {
			$('header.header_sticky').removeClass('menu_fixed');
		}

    }
});


jQuery(document).ready(function($) {
    "use strict";
	
	//Mobile Menu
	jQuery('#top_menu i').click(function(){
		jQuery('#top_menu ul#menu').slideToggle(300);
	});
	
	
	//Mega Menu Width
	if ($(window).width() >= 768){
		
		$('#top_menu li.mega-menu-item').each(function(){
			var mega_menu_w = $('#top_menu').width();
			var mega_menu_li_count = $(this).find('ul.sub-nav-group').length;
			var mega_menu_li_w = Math.abs(mega_menu_w / mega_menu_li_count);
			$('.mega-menu-item .sub-nav').css({'left' : '0', 'right' : '0'});
			
			if(mega_menu_li_count == 1) {
				$('.mega-menu-item .sub-nav').css('width', '210px');
				$('.mega-menu-item .sub-nav .sub-nav-group').css('width', '210px');
			} else {
				$(this).find('.sub-nav .sub-nav-group').css('width', mega_menu_li_w);
				$('.mega-menu-item .sub-nav').css('width', '100%');
			}
		});
	}
	
	
	//Top Search Focus
	var $ctsearch = $('#top_search'),
        $ctsearchinput = $ctsearch.find('input.field_search'),
        $top_menu = $('#top_menu'),
        $body = $('html,body'),
        openSearch = function () {
            $ctsearch.data('open', true).addClass('ct-search-open');
            $top_menu.fadeOut(300)
            $ctsearchinput.focus();
            return false;
        },
        closeSearch = function () {
            $ctsearch.data('open', false).removeClass('ct-search-open');
            $top_menu.fadeIn(300);
        };
    $ctsearchinput.on('click', function (e) {
        e.stopPropagation();
        $ctsearch.data('open', true);
    });
    $ctsearch.on('click', function (e) {
        e.stopPropagation();
        if (!$ctsearch.data('open')) {
            openSearch();
            $body.off('click').on('click', function (e) {
                closeSearch();
            });
        }
        else {
            if ($ctsearchinput.val() === '') {
                closeSearch();
                return false;
            }
        }
    });
	
	
	//Full Width Element
	if (jQuery('#main .span3').hasClass('sidebar-container')) {
		
	} else {
		jQuery('.eva-blog.full_width, .eva-portfolio.full_width .isotope-container').each(function(){
			jQuery(this).css('margin-left' , -1*(jQuery('#main').width()-jQuery('.container').width())/2+'px').width(jQuery('#main').width());
		});
	}
	
	
	//Full Width sections
	if(jQuery("#main .span3").hasClass("sidebar-container")){
	}else{
		
		jQuery('.eva-full-width').parent().parent().addClass("full-width-before");
		jQuery(".eva-full-width_end").parent().parent().addClass("full-width-after");
		
		jQuery('.full-width-before').each(function(){
			jQuery(this).first().nextUntil('.full-width-after').wrapAll('<div class="full-width-content">');
			
			jQuery(this).next().css('margin-left' , -1*(jQuery('#main').width()-jQuery('.container').width())/2+'px').width(jQuery('#main').width());
			jQuery(this).next().wrapInner('<div class="container"></div>');
			
			var customClass = jQuery(this).find('.eva-full-width').attr('data-class');
			var margBottom = jQuery(this).find('.eva-full-width').attr('data-marginBottom');
			var padTop = jQuery(this).find('.eva-full-width').attr('data-paddingTop');
			var padBottom = jQuery(this).find('.eva-full-width').attr('data-paddingBottom');
			var backgroundImg = jQuery(this).find('.eva-full-width').attr('data-backgroundImg');
			var backgroundColor = jQuery(this).find('.eva-full-width').attr('data-backgroundColor');
		
			jQuery(this).next().addClass(customClass).css({'margin-bottom': margBottom, 'padding-top': padTop, 'padding-bottom': padBottom, 'background-image': 'url('+backgroundImg+')', 'background-color': backgroundColor});
		});
		
		jQuery('.full-width-before, .full-width-after').remove();
	}
	
	
	/*
	if(jQuery("#main .span3").hasClass("sidebar-container")){
	}else{
		jQuery(".eva-full-width").each(function(){
			jQuery(this).parent().parent().addClass("full-width-before").before('<div class="full-width-wrapper">');
		});
		jQuery(".eva-full-width_end").each(function(){
			jQuery(this).parent().parent().addClass("full-width-after").prev("div").addClass('full-width-content');
		});
		
		jQuery('.full-width-wrapper').each(function(){
			var fullContent = jQuery(this).next().next().html();
			var fullBeforeTitle = jQuery(this).next().find('.eva-title-container').html();
			jQuery(this).find('.full-width-content').show();
			jQuery(this).css('margin-left' , -1*(jQuery('#main').width()-jQuery('.container').width())/2+'px').width(jQuery('#main').width());
			jQuery(this).wrapInner('<div class="full-width-style '+jQuery(this).next().find('.eva-full-width').attr('data-class')+'" style="'+jQuery(this).next().find('.eva-full-width').attr('data-marginBottom')+'; '+jQuery(this).next().find('.eva-full-width').attr('data-paddingTop')+'; '+jQuery(this).next().find('.eva-full-width').attr('data-paddingBottom')+'; '+jQuery(this).next().find('.eva-full-width').attr('data-background')+'"><div class="container"><div class="eva-title-container">'+fullBeforeTitle+'</div><div class="row">'+fullContent+'</div></div></div>');
			jQuery(this).find('.eva-title-container:has(.eva-title)').addClass('hasTitle');
		});
		
		jQuery('.full-width-before, .full-width-content, .full-width-after').remove();
	}
	*/
	
	
	// Add Icons
	jQuery('.widget_categories li, .widget .product-categories li, .widget_archive li, .widget_meta li').prepend('<i class="fa fa-chevron-right"></i>');
	
	
	//fade Effect
	jQuery("#top_menu li a, #menu-page-builder-elements li a").click( function(){
		var menuLinkHref = jQuery(this).attr("href");

		if (menuLinkHref == "javascript:void(0);") {
		} else {
			var href = jQuery(this).attr('href');
			setTimeout(function(){
				window.location.href = href;
			}, 800 );
			jQuery('body').animate({"opacity":'0'}, 800);
			return false;
		}
	});
	
	
	//Last Menu Item
	jQuery('#top_menu li').not('li li').eq(-2).addClass('penult_item');
	jQuery('#top_menu li').not('li li').last().addClass('last_item');
	
	
	//Price Item width
	$('.eva-pricing-wrapper').each(function(i, item){
		$(this).addClass('price_wrap_numb' + i);
		
		var price_wrap_w = $('.price_wrap_numb' + i).width();
		var price_item_count = $('.price_wrap_numb' + i + ' .pricing_table_item').length;
		var price_item_w = Math.abs(price_wrap_w / price_item_count);
		$('.price_wrap_numb' + i + ' .pricing_table_item').css('width', price_item_w - 30);
		
	});
	
	
    // Vide Responsive
    jQuery('#main iframe').each(function(){if(!jQuery(this).closest('.rev_slider').hasClass('rev_slider')){jQuery(this).addClass('makeFluid');}});
    fluidvids.init({
        selector: '#main iframe.makeFluid',
        players: ['www.youtube.com', 'player.vimeo.com']
    });


    // Accordion
    $('.eva-accordion').each(function($index) {
        $(this).attr('id', 'accordion' + $index);
        $(this).find('.accordion-group').each(function($i) {
            $(this).find('.accordion-toggle').attr('data-parent', '#accordion' + $index).attr('href', '#accordion_' + $index + '_' + $i);
            $(this).find('.accordion-body').attr('id', 'accordion_' + $index + '_' + $i);
        });
        /* Bootstrap Accordion adding active class */
        jQuery(this).on('show', function(e) {
            jQuery(e.target).prev('.accordion-heading').find('.accordion-toggle').addClass('active');
        });
        jQuery(this).on('hide', function(e) {
            jQuery(this).find('.accordion-toggle').not(jQuery(e.target)).removeClass('active');
        });
    });

	
    // Toggle
    $('.eva-toggle').each(function($index) {
        $(this).find('.accordion-group').each(function($i) {
            $(this).find('.accordion-toggle').attr('href', '#toggle_' + $index + '_' + $i);
            $(this).find('.accordion-body').attr('id', 'toggle_' + $index + '_' + $i);
        });
        /* Bootstrap Accordion adding active class */
        jQuery(this).on('show', function(e) {
            jQuery(e.target).prev('.accordion-heading').find('.accordion-toggle').addClass('active');
        });
        jQuery(this).on('hide', function(e) {
            jQuery(e.target).prev('.accordion-heading').children('.accordion-toggle').removeClass('active');
        });
    });
	
	
    // Tab
    $('.eva-tab').each(function($index) {
        $(this).find(">li").each(function($i) {
            jQuery(this).appendTo(jQuery(this).closest('.eva-tab').find('ul.nav-tabs'));
            $(this).find(">a").attr('href', '#tabitem_' + $index + '_' + $i);
            if ($i === 0) {
                $(this).addClass('active');
            }
        });
        $(this).find(".tab-pane").each(function($in) {
            jQuery(this).appendTo(jQuery(this).closest('.eva-tab').find('div.tab-content'));
            $(this).attr('id', 'tabitem_' + $index + '_' + $in);
            if ($in === 0) {
                $(this).addClass('active');
            }
        });
		var tabs_l_h = $('.tabs-left .nav-tabs').height();
		$('.tabs-left .tab-content').css('min-height', tabs_l_h + 1);
		var tabs_r_h = $('.tabs-right .nav-tabs').height();
		$('.tabs-right .tab-content').css('min-height', tabs_r_h + 1);
    });
    $('.eva-tab>ul a').click(function(e) {
        e.preventDefault();
        jQuery(this).tab('show');
    });
	
	
	//Portfolio filter Position
	jQuery('.eva-portfolio').each(function() {
		if (jQuery(this).prev().find('.eva-title').hasClass('center')) {
			jQuery(this).find('.eva-filter').addClass('center');
		}
		if (jQuery(this).prev().find('.eva-title').hasClass('left')) {
			jQuery(this).find('.eva-filter').addClass('right');
		}
		if (jQuery(this).prev().find('.eva-title').hasClass('right')) {
			jQuery(this).find('.eva-filter').addClass('left');
		}
	});


    if (jQuery().jPlayer) {
        jQuery('.jp-jplayer-audio').each(function() {
            jQuery(this).jPlayer({
                ready: function() {
                    jQuery(this).jPlayer("setMedia", {
                        mp3: jQuery(this).data('mp3')
                    });
                },
                swfPath: "",
                cssSelectorAncestor: "#jp_interface_" + jQuery(this).data('pid'),
                supplied: "mp3, all"
            });
        });

        jQuery('.jp-jplayer-video').each(function() {
            jQuery(this).jPlayer({
                ready: function() {
                    jQuery(this).jPlayer("setMedia", {
                        m4v: jQuery(this).data('m4v'),
                        poster: jQuery(this).data('thumb')
                    });
                },
                size: {
                    width: '100%',
                    height: 'auto'
                },
                swfPath: "",
                cssSelectorAncestor: "#jp_interface_" + jQuery(this).data('pid'),
                supplied: "m4v, all"
            });
        });
    }


    // PrettyPhoto
    /*jQuery("a[rel^='prettyPhoto']").prettyPhoto({
        deeplinking: false,
        social_tools: ""
    });
	*/
    jQuery(window).resize();
	
	
	//Empty href
	jQuery('#top_menu a[href*="#"]').each(function() {
		jQuery(this).attr("href", "javascript:void(0);");
	});
	
	
	//Scroll Top
	jQuery('#scrollTop').click(function(){
		jQuery('html, body').animate({scrollTop:0}, 'slow');
		return false;
	});
	
	
	//	Iframe
	/*$("iframe").each(function(){
		var ifr_source = $(this).attr('src');
		var wmode = "wmode=transparent";
		if(ifr_source.indexOf('?') != -1) {
		var getQString = ifr_source.split('?');
		var oldString = getQString[1];
		var newString = getQString[0];
		$(this).attr('src',newString+'?'+wmode+'&'+oldString);
		}
		else $(this).attr('src',ifr_source+'?'+wmode);
	});*/
	
	
});


jQuery(window).load(function() {
    "use strict";
	
	//Preloader
	setTimeout("jQuery('#preloader').animate({'opacity' : '0'},300,function(){jQuery('#preloader').hide()})",800);


    // Twitter
    if (jQuery().jtwt) {
        jQuery('.eva-twitter').each(function() {
            var currentTwitter = jQuery(this);
            currentTwitter.find('a').live("click", function() {
                jQuery(this).attr('target', "_blank");
            });
            currentTwitter.jtwt({
                count: currentTwitter.attr('data-count'),
                username: currentTwitter.attr('data-name'),
                image_size: 0
            });
            currentTwitter.children('.twitter-follow').appendTo(currentTwitter);
        });
    }
	

    // Resize
    jQuery(window).resize(function() {
        jQuery('.jp-audio-container, .jp-video-container').each(function() {
            jQuery(this).find('.jp-progress-container').width((jQuery(this).width() - 149 < 0) ? 0 : (jQuery(this).width() - 149));
            jQuery(this).find('.jp-progress').width((jQuery(this).width() - 152 < 0) ? 0 : (jQuery(this).width() - 152));
        });
        jQuery('.eva-testimonials').each(function() {
            jQuery(this).find('>.caroufredsel_wrapper').width(jQuery(this).width());
        });
		
		
		//Min Height Page
		mincontentHeight();
		
    });
    jQuery(window).resize();
	
	
	//Min Height
	mincontentHeight();
	
});


/* Item Top Bottom Height */
/* ------------------------------------------------------------------- */
function pbItemTB($item) {
    "use strict";
	
    $item = jQuery($item);
    var $itemMarginTB = parseInt($item.css('margin-top').replace('px', ''), 10) + parseInt($item.css('margin-bottom').replace('px', ''), 10);
    var $itemPaddingTB = parseInt($item.css('padding-top').replace('px', ''), 10) + parseInt($item.css('padding-bottom').replace('px', ''), 10);
//    var $itemBorderTB  = parseInt($item.css('border-top-width').replace('px',''),10) + parseInt($item.css('border-bottom-width').replace('px',''),10);
    var $itemBorderTB = 0;
    var $itemTB = $itemMarginTB + $itemPaddingTB + $itemBorderTB;
    return $itemTB;
}


//Min Height Page
function mincontentHeight() {
	if ($(window).width() > 1024){
		var body_h = $(window).height();
		
		if (jQuery('body').hasClass('error404')) {
			var pagetitle_h = -40;
		} else {
			var pagetitle_h = $('.page-title').height() +160;
		}
		var footer_h = $('footer').height();
		var maincontent_h = Math.abs(body_h - pagetitle_h - footer_h) -40;
		$('#main').css('min-height', maincontent_h);
	}
	
}


