function fddcw(){var a=$(".dynamic-data-container");if(a.css("width","auto"),a&&a.length){a.children().hide();var b=a.css("width");a.children().show(),a.css({width:b,"overflow-x":"auto"})}}function imgDisplay(a,b){for(document.getElementById("imgZoomThumb").src=a,document.getElementById("imgZoom").href=a,as=document.getElementById("imgCounter").getElementsByTagName("a"),i=0;i<as.length;i++)i==b?as[i].className="on":as[i].className=""}!function(a){a(document).ready(function(){function e(){a("#projectMoreLinksDiv").slideUp("slow")}var b=a('[data-plugin~="childrenscroller"]');for(i=0,j=b.length;i<j;i++)a(b[i]).childrenscroller();if(fddcw(),a(".formatView").length){var c=a(".formatView"),d=c.children("a");if($classifieds=a("#classifieds"),$bxslider=$classifieds.find(".bxslider"),$li=$bxslider.children("li"),liHeight=0,!d.length)return;$li.length&&$li.each(function(){liHeight=Math.max(a(this).height(),liHeight)}),c.children("a").each(function(){a(this).click(function(){a(this).hasClass("on")||(a(this).addClass("on").siblings("a").removeClass("on"),$classifieds.length&&($classifieds.toggleClass("classified3Images classified_detailview"),$classifieds.hasClass("classified_detailview")?$li.css({height:"auto"}):$li.css({height:liHeight})))})})}a("#projectMoreLinksA").mouseover(function(){a("#projectMoreLinksDiv").slideDown("slow",function(){})}),a("#projectMoreLinksA, #projectMoreLinksDiv").mouseleave(function(){t=setTimeout(e,1e3)}),a("#projectMoreLinksA, #projectMoreLinksDiv").mouseover(function(){clearTimeout(t)})}),jQuery(window).load(function(b){var c=a('[class *= "bxslider"]');c.length&&c.each(function(){a(this).children("li").css({height:"auto"}),a(this).children("li").EqualHeight()})}),jQuery(window).resize(function(){var b=a('[class *= "bxslider"]');b.length&&b.each(function(){a(this).children("li").css({height:"auto"}),a(this).children("li").EqualHeight()}),fddcw()}),a.fn.childrenscroller=function(){if(this.length){var b=a(this),c={delay:1e3,pause:1e3,speed:500},d=a.extend({},c,a(this).data("childrenscroller-settings")),e=null,f=!1;return height=a(this).height(),tags=a(this).children(),this.each(function(){var a=function(){var a=b.children().eq(0).outerHeight(!0);b.height()-b.scrollTop()>=a&&(e=setInterval(c,d.pause))},c=function(){if(!f){clearInterval(e);var c=b.children().eq(0).outerHeight(!0);b.animate({scrollTop:c},d.speed,function(){b.append(b.children().eq(0)),b.scrollTop(0),setTimeout(a,d.pause)})}};b.on("mouseover",function(){f=!0}),b.on("mouseout",function(){f=!1}),setTimeout(a,d.delay)})}},a.fn.EqualHeight=function(){var b=a(this),c=0;this.each(function(){c=Math.max(c,a(this).height())}),b.css("height",c)}}(jQuery);