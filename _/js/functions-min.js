!function($){var e="touchstart";$(document).ready(function(){var s=$("select#service-select"),a=$("select.service-area-select"),n=$("select.child-service-area-select"),o=$("a#start-enquiry-btn");$(".selectpicker").selectpicker({style:"btn-default btn-lg hp-select",mobile:!0,size:5}),$(a).selectpicker("hide"),$(n).selectpicker("hide"),$(s).on("change",function(){var e="#"+$(this).find("option:selected").html().replace(/\s+/g,"-").replace(/&nbsp;/g,"-").toLowerCase()+"-select",s=$(this).val();$(a).selectpicker("hide"),$(".submit-btn").hasClass("hidden")&&$(".submit-btn").removeClass("hidden").addClass("animated fadeIn"),"main-service-area"===$(this).attr("name")&&0!==s&&$(o).attr("href",s),"service"===$(this).attr("name")&&0!==s&&$(o).attr("href",s),$(e).selectpicker("show")}),$(a).on("change",function(){var e="#"+$(this).find("option:selected").html().replace(/\s+/g,"-").replace(/&nbsp;/g,"-").toLowerCase()+"-select",s=$(this).val();$(n).selectpicker("hide"),$(".submit-btn").hasClass("hidden")&&$(".submit-btn").removeClass("hidden").addClass("animated fadeIn"),"main-service-area"===$(this).attr("name")&&0!==s&&$(o).attr("href",s),$(e).selectpicker("show")}),$(n).on("change",function(){var e=$(this).val();$(".submit-btn").hasClass("hidden")&&$(".submit-btn").removeClass("hidden").addClass("animated fadeIn"),"child-service-area"===$(this).attr("name")&&0!==e&&$(o).attr("href",e)}),$("body").on(e,"div.how-it-works-link > a",function(){var e=$(this).attr("href");return $(e).hasClass("hidden")&&($(e).removeClass("hidden").addClass("animated fadeIn"),$(".tlw-wrapper").addClass("how-it-works-on"),$("#jmpress").jmpress("init")),!1}),$("body").on(e,"button#close-how-it-works",function(){var e=$(this).parent();return $(e).hasClass("fadeIn")&&($(e).removeClass("fadeIn").addClass("fadeOut"),$(e).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).removeClass("animated fadeOut").addClass("hidden"),$(".tlw-wrapper").removeClass("how-it-works-on"),$("#jmpress").jmpress("deinit")})),!1}),$("body").on(e,".step > a.step-link",function(){var e=$(this).attr("href"),s=$(e).index();return $("#jmpress").jmpress({stepTo:s}),!1}),$("body").on(e,"#end-slide-link",function(){var e=$("#how-it-works"),s=$("a#sb-form"),a=$("a#banner-form"),n;return 1===s.length&&(n=$(s)),1===a.length&&(n=$(a)),$(e).hasClass("fadeIn")&&($(e).removeClass("fadeIn").addClass("fadeOut"),$(e).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).removeClass("animated fadeOut").addClass("hidden"),$(".tlw-wrapper").removeClass("how-it-works-on"),$("#jmpress").jmpress("deinit"),$("html, body").animate({scrollTop:$(n).offset().top-30},500,function(){$("input[name='input_1']").focus()})})),!1}),$(".carousel").carousel({interval:5e3,pause:"hover"}),$("#business-carousel").on("slide.bs.carousel",function(){$(this).next().find(".banner-item").removeClass("active")}),$("body").on(e,"button#back-2-top",function(){return $("html, body").animate({scrollTop:0},500),!1}),$("body").on(e,"a.scroll-to",function(){var e=$(this).attr("href");return $("html, body").animate({scrollTop:$("a"+e).offset().top},500),!1}),$("body").on(e,"a#call-2-action-radio",function(){return $(".audio-files").hasClass("closed")?($("html, body").animate({scrollTop:$("#radio-player").offset().top-20},500),$(".audio-files").removeClass("closed").addClass("open"),$(this).addClass("active")):($(".audio-files").removeClass("open").addClass("closed"),$("div.mejs-pause").find("button").trigger("click"),$("html, body").animate({scrollTop:0},500),$(this).removeClass("active")),!1}),$("body").on(e,"button#close-audio-files",function(){return $("html, body").animate({scrollTop:0},500),$(".audio-files").hasClass("open")&&($(".audio-files").removeClass("open").addClass("closed"),$("a#call-2-action-radio").removeClass("active"),$("div.mejs-pause").find("button").trigger("click")),!1}),$("body").on(e,"button#user-btn",function(){return $(this).parent().hasClass("closed")?$(this).parent().removeClass("closed").addClass("open"):$(this).parent().removeClass("open").addClass("closed"),!1}),$("body").on(e,"button.sb-menu-btn",function(){return $(this).parent().hasClass("closed")?($(this).parent().removeClass("closed").addClass("open"),$("html, body").animate({scrollTop:$("a#sb-menu-collapse").offset().top-40},500)):($(this).parent().removeClass("open").addClass("closed"),1===$("a#main-content").length?$("html, body").animate({scrollTop:$("a#main-content").offset().top-30},500):$("html, body").animate({scrollTop:$("html, body").offset().top},500)),!1}),$("body").on(e,"li.page_item_has_children > a",function(){var e=$(this).parent();return $("li.page_item_has_children").not(e).removeClass("view-children").addClass("hide-children"),$(this).parent().hasClass("hide-children")?$(this).parent().removeClass("hide-children").addClass("view-children"):$(this).parent().removeClass("view-children").addClass("hide-children"),!1}),$(".contact-form").find('input[name="input_1"]').on("focus",function(){var e=$(this).parents(".contact-form");$(e).hasClass("form-closed")&&$(e).removeClass("form-closed").addClass("form-open")}),$("body").on(e,"button#nav-btn",function(){return $(".tlw-wrapper").hasClass("nav-closed")&&($(".tlw-wrapper").removeClass("nav-closed").addClass("nav-open"),$("#side-nav").removeClass("nav-closed").addClass("nav-open")),!1}),$("body").on(e,"button#close-nav",function(){return $(".tlw-wrapper").hasClass("nav-open")&&($(".tlw-wrapper").removeClass("nav-open").addClass("nav-closed"),$("#side-nav").removeClass("nav-open").addClass("nav-closed"),$("li.with-sub-nav").removeClass("sl-tl-open").addClass("sl-tl-closed")),!1}),$("body").on(e,"div.faq-question",function(){var e=$(this).parent(),s=$(e).siblings();return s.hasClass("item-open")&&s.removeClass("item-open").addClass("item-closed"),e.toggleClass("item-closed item-open"),!1}),$("body").on(e,"div.faq-header",function(){var e=$(this).next();return $("div.faq-header").not(this).hasClass("faqs-open")&&($("div.faq-header").removeClass("faqs-open").addClass("faqs-closed"),$("div.faqs-sub-pgs").removeClass("faqs-sub-open").addClass("faqs-sub-closed")),$(this).toggleClass("faqs-closed faqs-open"),e.toggleClass("faqs-sub-closed faqs-sub-open"),!1}),$("body").on(e,"button#file-download-btn",function(){var e=$(this).next();return $(e).toggleClass("form-open form-closed"),$("html, body").animate({scrollTop:$("button#file-download-btn").offset().top-30},500),!1}),$(document).bind("gform_confirmation_loaded",function(e,s){19===s&&1===$("a#download-booklet-btn").length&&($("a#download-booklet-btn").removeClass("hidden"),$("html, body").animate({scrollTop:$("button#booklet-download-btn").offset().top-20},500)),20===s&&1===$("#hidden-download").length&&($("#hidden-download").removeClass("hidden"),$(".gform_heading").addClass("hidden"),$("html, body").animate({scrollTop:$("#hidden-download").offset().top-20},500))}),$("body").on("click","li.with-sub-nav > a",function(){var e=$(this).parent();return $(e).siblings().removeClass("sl-tl-open").addClass("sl-tl-closed"),$(e).hasClass("top-level")&&$(e).find(".sl-tl-open").removeClass("sl-tl-open").addClass("sl-tl-closed"),$(e).toggleClass("sl-tl-open sl-tl-closed"),!1}),$(".feed-wrap").slimScroll({height:"300px"}),$("body").on(e,"button.access-btn",function(){var e=$(this).attr("data-role");return $(this).siblings().removeClass("active"),$(this).addClass("active"),$("body").removeClass("txt-md txt-lg txt-sm").addClass(e),$.cookie("font_size",e,{path:"/"}),!1}),$("#feedback-carousel").carousel({pause:!1,interval:7e3}),$("#enqiry-start-form")&&$("#enqiry-start-form").show();var t=$("#cookie-law-info-bar").next();$(t).is("i")&&($(t).next().is("i")&&$(t).next().remove(),$("#cookie-law-info-bar").next().remove());var i=function(){1===$("#xmas-popup-wrap").length&&$("#xmas-popup-wrap").hasClass("pop-up-inactive")&&($("#xmas-popup-btn-wrap").removeClass("pop-up-inactive").addClass("pop-up-active"),$("#xmas-popup-wrap").fadeIn("slow",function(){$(".xmas-popup-inner").removeClass("hidden").addClass("animated slideInUp")}))};$(".xmas-popup-inner").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).hasClass("bounceOutDown")&&($("#xmas-popup-wrap").fadeOut("fast").removeClass("pop-up-active").addClass("pop-up-inactive"),$("#xmas-popup-btn-wrap").removeClass("pop-up-active").addClass("pop-up-inactive"),$(this).removeClass("animated bounceOutDown").addClass("hidden"))}),$("body").on(e,"button#xmas-popup-btn-open",function(){return i(),!1}),$("body").on(e,"button#close-xmas-popup",function(){return $(".xmas-popup-inner").removeClass("slideInUp").addClass("bounceOutDown"),!1}),$("body").on(e,"button#close-awards-btn",function(){return $(this).parent().removeClass("open").addClass("closed"),!1})}),$(window).on("resize",function(){}),$(window).load(function(){1===$("a#call-2-action-radio").length&&($("#call-2-action-radio").removeAttr("disabled"),$("i.fa-spinner").hide())}),$(window).scroll(function(){var e=$(window).scrollTop(),s=$(".header").outerHeight(),a=$(window).height();e>Math.ceil(a/2)&&$("button#back-2-top").removeClass("hidden").addClass("visible fadeIn"),s>=e&&$("button#back-2-top").hasClass("visible")&&($("button#back-2-top").removeClass("fadeIn").addClass("fadeOut"),$("button#back-2-top").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).removeClass("visible fadeOut").addClass("hidden")}))})}(window.jQuery);