!function(a){a.fn.PagingPhotoGallery=function(b){var c={AParentClasses:"paging ac pt5px",AOnClasses:"dib bdr w15px on b cd",AOffClasses:"dib bdr w15px"};return this.each(function(){var e,b=a.extend({},c,b),d=a(this),f=a("> p",d).length;if(f>1){for(e='<p class="'+b.AParentClasses+'">',i=0;i<f;i++)e+='<a href="javascript:void(0);" class="'+b.AOffClasses+'">'+(i+1)+"</a> ";e+="</p>",d.append(e),a(".paging a:eq(0)",d).removeClass(b.AOffClasses).addClass(b.AOnClasses),a(".paging a",d).each(function(c){a(this).click(function(){for(i=0;i<f;i++)a("p:eq("+i+")",d).hide(),a(".paging a:eq("+i+")",d).removeClass(b.AOnClasses).addClass(b.AOffClasses);a("p:eq("+c+")",d).fadeIn("slow"),a(".paging a:eq("+c+")",d).addClass(b.AOnClasses)})})}})}}(jQuery);