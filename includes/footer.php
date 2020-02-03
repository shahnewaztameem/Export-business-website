 <!-- ========================  FOOTER BEGIN  ========================== -->
 ﻿<footer class="wrap" id="footerFormat1">
     <div class="bdrT dashed">
         <table class="w100 formTable bdr0">
             <tr>
                 <td id="copyright" class="p10px small w50">
                     <div>
                         <p class="copyright">Mass Export World &copy; <?php echo date('Y');?> </p>
                     </div>
                     <div>
                         <p class="memberOf">Developed By
                             <a href="https://www.facebook.com/OfficialShahnewaz/" target="_blank">Shahnewaz Tameem</a> </p>
                     </div>
                 </td>
                 <td id="fgl" class="p10px small b ar">
                     <p class="ma5px b bgl">
                         <a href="<?= BASE_URL;?>" title="Home">Home
                         </a> |
                         <a href="<?= BASE_URL;?>/company-profile" title="Company Profile">Company Profile
                         </a> |
                         <a href="<?= BASE_URL;?>/products" title="Products">Products</a> |
                         <a href="<?= BASE_URL;?>/quality-control" title="Quality Control">Quality Control</a> |
                         <a href="<?= BASE_URL;?>/enquiry" title="Enquiry">Enquiry
                         </a> |
                         <a href="<?= BASE_URL;?>/contact" title="Contact Us" style="margin-right:0">Contact Us
                         </a><br>
                         <p>Follow Us</p>

                         <a href="https://plus.google.com/+ShahnewazTameem" target="_blank"><img src="<?= BASE_URL;?>/img/gplus.jpg" alt="Google+" width="40" height="40"></a> <a href="https://www.facebook.com/officialShahnewaz" target="_blank"><img src="<?= BASE_URL;?>/img/facebook.jpg" alt="facebook" width="30" height="23"></a> <a href="https://twitter.com/ShahnewazTameem" target="_blank"><img src="<?= BASE_URL;?>/img/twi.jpg" alt="twitter" width="40" height="40"></a>
                 </td>
             </tr>
         </table>
     </div>

 </footer>
 <!-- Created By - Shahnewaz Tameem -->
 <script type="text/javascript">
     //prevent default event behaviour
     var prevent_default = function(event) {
         event = (event) ? event : window.event;
         if (event.preventDefault) {
             event.preventDefault();
         } else {
             event.returnValue = false;
         }
     };
     //add event handler
     var add_event = function(element, type, listener) {
         if (element.addEventListener) {
             element.addEventListener(type, listener, false);
         } else {
             element.attachEvent('on' + type, listener);
         }
     };

     //disable right click
     var disable_click = function() {
         //check if right mouse button was pressed
         var check_button = function(e) {
             var rightclick = false;
             if (!e) var e = window.event;
             if (e.which) rightclick = (e.which == 3);
             else if (e.button) rightclick = (e.button == 2);
             return rightclick;
         };
         //disable right button
         var disable = function(e) {
             if (check_button(e)) {
                 prevent_default(e);
             }
         };
         //add it to events
         add_event(document, "mouseup", function(e) {
             disable(e);
             return false;
         });
         add_event(document, "mousedown", function(e) {
             disable(e);
             return false;
         });
         add_event(document, "contextmenu", function(e) {
             disable(e);
             return false;
         });
     };
     //disable text selection
     var disable_select = function() {
         //for IE
         add_event(document, "selectstart", function(e) {
             prevent_default(e);
             return false;
         });
         //for Opera
         if (window.opera) {
             //set unselectable = "on" to every tag on page
             document.body.unselectable = "on";
             var tags = document.body.getElementsByTagName("*"); {
                 tags[i].unselectable = "on";
             }
         }
         //Others browsers
         document.body.style.MozUserSelect = "none";
         document.body.style.KhtmlUserSelect = "none";
         document.body.style.WebkitUserSelect = "none";
         document.body.style.userSelect = "none";
     };
     //disable page printing
     var disable_print = function() {
         var head = document.getElementsByTagName('head')[0];
         //create style for print media and hide body
         var newStyle = document.createElement('style');
         newStyle.setAttribute('type', 'text/css');
         newStyle.setAttribute('media', 'print');
         newStyle.appendChild(document.createTextNode('body {display: none;}'));
         head.appendChild(newStyle);
     }
     disable_click();
     disable_select();
     disable_print();
     
 </script>
<script type="text/javascript">var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<img src="https://i1155.photobucket.com/albums/p559/scrolltotop/arrow20.png" />',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();</script>




 </body>

 </html>