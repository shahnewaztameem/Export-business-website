function changeprice(opt,shipp_element,product_element){var product_price,ship_price,total,ship_typ;frmobj1=eval("document.frmproduct.qty_"+opt),frmobj2=eval("document.frmproduct.shipp"+opt),shipp_name=document.frmproduct.shippname_name.value;var x;if(frmobj1.length>1)for(var i=0;i<frmobj1.length;i++)frmobj1[i].checked&&(product_price=frmobj1[i].value,x=i+1,shipin_price=eval("document.frmproduct.qty_ship"+opt+"_"+x).value,document.frmproduct.cart_product.value=eval("document.frmproduct.product_name"+opt+"_"+x).value,document.frmproduct.tree.value=eval("document.frmproduct.tree"+opt+"_"+x).value,document.frmproduct.prodid.value=eval("document.frmproduct.prodid"+opt+"_"+x).value);else frmobj1.checked&&(product_price=frmobj1.value,x=1,shipin_price=eval("document.frmproduct.qty_ship"+opt+"_"+x).value,document.frmproduct.cart_product.value=eval("document.frmproduct.product_name"+opt+"_"+x).value,document.frmproduct.tree.value=eval("document.frmproduct.tree"+opt+"_"+x).value,document.frmproduct.prodid.value=eval("document.frmproduct.prodid"+opt+"_"+x).value);for(var cnt=0;cnt<frmobj2.length;cnt++)frmobj2[cnt].checked&&(ship_typ=frmobj2[cnt].value);if(shipin_price.indexOf("~")>-1){splt=shipin_price.split("~"),splt_name=shipp_name.split("~"),splt.length>0&&(shipping=parseFloat(splt[0]),parseFloat(shipping)>0?total=parseFloat(product_price)+shipping:(total=product_price,shipping="0.00"));var shipp_name1=splt_name[ship_typ]}else{var shipp_name1=shipp_name;total=product_price,shipping="0.00"}document.frmproduct.cart_shipping.value=shipp_name1,document.frmproduct.cart_shipping_amt.value=shipping,document.frmproduct.cart_price.value=parseFloat(product_price),document.getElementById(shipp_element).innerHTML=adddecimal(shipping),document.getElementById(product_element).innerHTML=adddecimal(total)}function changeprice_weight(opt){var product_price,ship_price,total;frmobj1=eval("document.frmproduct.qty_"+opt);var x;if(frmobj1.length>1)for(var i=0;i<frmobj1.length;i++)frmobj1[i].checked&&(product_price=frmobj1[i].value,x=i+1,shipin_price=eval("document.frmproduct.qty_ship"+opt+"_"+x).value,document.frmproduct.cart_product.value=eval("document.frmproduct.product_name"+opt+"_"+x).value,document.frmproduct.tree.value=eval("document.frmproduct.tree"+opt+"_"+x).value,document.frmproduct.prodid.value=eval("document.frmproduct.prodid"+opt+"_"+x).value,document.frmproduct.product_weight.value=eval("document.frmproduct.weight"+opt+"_"+x).value);else frmobj1.checked&&(product_price=frmobj1.value,x=1,shipin_price=eval("document.frmproduct.qty_ship"+opt+"_"+x).value,document.frmproduct.cart_product.value=eval("document.frmproduct.product_name"+opt+"_"+x).value,document.frmproduct.tree.value=eval("document.frmproduct.tree"+opt+"_"+x).value,document.frmproduct.prodid.value=eval("document.frmproduct.prodid"+opt+"_"+x).value,document.frmproduct.product_weight.value=eval("document.frmproduct.weight"+opt+"_"+x).value);document.frmproduct.cart_price.value=parseFloat(product_price)}function changeprice_new(opt,product_element){var product_price,ship_price,total;frmobj1=eval("document.frmproduct.qty_"+opt);for(var x,i=0;i<frmobj1.length;i++)frmobj1[i].checked&&(product_price=frmobj1[i].value,x=i+1,shipin_price=eval("document.frmproduct.qty_ship"+opt+"_"+x).value,document.frmproduct.cart_product.value=eval("document.frmproduct.product_name"+opt+"_"+x).value,document.frmproduct.tree.value=eval("document.frmproduct.tree"+opt+"_"+x).value,document.frmproduct.prodid.value=eval("document.frmproduct.prodid"+opt+"_"+x).value);document.frmproduct.cart_price.value=parseFloat(product_price),document.getElementById(product_element).innerHTML="$"+adddecimal(product_price)}function adddecimal(a){return string=""+a,string.indexOf(".")==-1?string+".00":(seperation=string.length-string.indexOf("."),seperation>3?string.substring(0,string.length-seperation+3):2==seperation?string+"0":string)}function translator(a){var b=1,c=unescape(document.location.toString()),d="",e="";if(c.indexOf("translate_c?")!=-1){var f=c.indexOf("u=");if(f==-1)d=document.location;else{var g=c.substring(f,c.length),h=g.split("&");d=h[0].substring(2,h[0].length)}}else d=document.location;indexof_p=a.indexOf("|");var i="";if(indexof_p==-1)if(indexof_p1=a.indexOf("><"),indexof_p1==-1)e=a,"en"==a&&(i=1);else{var j=a.split("><");e=j[0]+"|"+j[1],"en"==j[1]&&(i=1)}else{var j=a.split("|");e=j[0]+"|"+j[1],"en"==j[1]&&(i=1)}var k="";k=1==i?d:"http://translate.google.com/translate_c?langpair="+e+"&u="+d,1==b?window.location.href=k:CanAnimate?(msgWindow=window.open("","subwindow","toolbar=yes,location=yes,directories=yes,status=yes,scrollbars=yes,menubar=yes,resizable=yes,left=0,top=0"),msgWindow.focus(),msgWindow.location.href=k):msgWindow=window.open(k,"subwindow","toolbar=yes,location=yes,directories=yes,status=yes,scrollbars=yes,menubar=yes,resizable=yes,left=0,top=0")}function part_obj_inquiry_now(form_submit_link,form_submit_status,form_name,id_val,checkbox_checked_st,checkbox_name){if(form_object=eval("document."+form_name),"Y"==checkbox_checked_st)var formObj=eval("form_object."+checkbox_name+".checked=1");return"Y"!=form_submit_status||(form_object.action=""+form_submit_link,form_object.id.value=""+id_val,"cart"!=id_val&&"basket"!=id_val||(form_object.cart_action.value="add"),form_object.submit(),void 0)}function part_obj_inquiry_now_new(a,b,c,d,e,f,g){var h=document.createElement("form");h.name=c,h.setAttribute("method","post"),h.setAttribute("action",a);var i=document.createElement("input");i.setAttribute("type","hidden"),i.setAttribute("name","cart_action"),h.appendChild(i);var j=document.createElement("input");return j.setAttribute("type","hidden"),j.setAttribute("name",f),j.setAttribute("value",g),h.appendChild(j),"Y"==e&&(formObj=h.name+"."+f+".checked=1"),"Y"!=b||(h.setAttribute("id",d),"cart"!=d&&"basket"!=d||(h.cart_action.value="add"),document.body.appendChild(h),h.submit(),void 0)}function inquiry_now(form_submit_link,form_submit_status,form_name,id_val,price_qty_chk){var pp=1,notprod=0;form_object=eval("document."+form_name),len=form_object.elements.length;var arr_index=0,prod="";for(arr_index=0;arr_index<len;arr_index++)if("checkbox"==form_object.elements[arr_index].type&&1==form_object.elements[arr_index].checked)if("Y"==price_qty_chk){var val1=form_object.elements[arr_index].name;if(splt=val1.split("_"),splt.length>0){var price=eval("document."+form_name+".price_"+splt[1]+".value"),quantity=eval("document."+form_name+".stock_"+splt[1]+".value"),balance_stock=eval("document."+form_name+".balance_stock_"+splt[1]+".value");if("Y"==quantity&&price>0&&balance_stock>1&&0==prod.length)pp=2;else if("Y"!=quantity||price<=0||balance_stock<1){var prod=prod+eval("document."+form_name+".productName_"+splt[1]+".value")+" ,";notprod=1}}}else pp=2;else pp=2;return 1==pp?1==notprod?(alert("Products "+prod+" not for sale or out of stock."),!1):(alert("You have not selected any Product / Item.\n\nPlease select  and  proceed"),!1):(1==notprod&&alert("Products "+prod+" not for sale or out of stock."),"Y"!=form_submit_status||(form_object.action=""+form_submit_link,form_object.id.value=""+id_val,"cart"!=id_val&&"basket"!=id_val||(form_object.cart_action.value="add"),form_object.submit(),void 0))}function chk_unchk(val,form_name){dml=eval("document."+form_name),len=dml.elements.length;var i=0;for(i=0;i<len;i++)"checkbox"==dml.elements[i].type&&(1==val?dml.elements[i].checked=!0:dml.elements[i].checked=!1)}function openwin(a,b,c){var d=window.open(a,"iypWin1","x=0,y=0,toolbar=no,location=no,directories=no,status=no,scrollbars=yes, copyhistory=no,width="+b+",height="+c+",screenX=0,screenY=0,left=20,top=20");d.focus()}function isProhibited(a){var b=a.value;for(invalidstr=new Array("indiamart","india mart","alibaba","ali baba","tradeindia","trade-india"),i=0;i<invalidstr.length;i++)if(chktrim(b).toLowerCase().indexOf(chktrim(invalidstr[i]).toLowerCase())>=0)return alert("Usage of "+invalidstr[i]+" is Prohibited on this site."),a.focus(),!0;return!1}function isValid(a){var b=a.value;for(invalidstr=new Array("hotmail","gmail","indiatimes","rediffmail","yahoo",".com",".net",".org",".co.in",".co.cn",".co.ca",".gov",".co.uk"),i=0;i<invalidstr.length;i++)if(chktrim(b).toLowerCase().indexOf(chktrim(invalidstr[i]).toLowerCase())>=0)return alert("Please don't use "+invalidstr[i]+"."),a.focus(),!1;return!0}function dynamic_form_validation(a){for(total_elements=a.elements.length,element_count=0;element_count<total_elements;element_count++){var b=a.elements[element_count],c=b.id,d=chktrim(b.value),e=b.type,f=c.split("_"),g=f[0].split("-"),h=""+f[1];if("r"==g[0]||"rp"==g[0])if("select-one"==e){if("Select"==b.options[b.selectedIndex].value||""==b.options[b.selectedIndex].value)return alert(h),b.focus(),!1}else if("checkbox"==e){if(0==b.checked)return alert(h),b.focus(),!1}else if(d.length<1)return alert(h),b.focus(),!1;if(("p"==g[0]||"rp"==g[0])&&d.length>0)if("2"==g[1]){var i=/^([a-zA-Z\s])+$/;if(!i.test(d))return alert(h),b.focus(),!1}else if("3"==g[1]){var j=/^([a-zA-Z0-9\s])+$/;if(!j.test(d))return alert(h),b.focus(),!1}else if("4"==g[1]){var k=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;if(!k.test(d))return alert(h),b.focus(),!1}else if("5"==g[1]){var l=/^[0-9+\-\,]+$/;if(d.length<5)return alert(h),b.focus(),!1;if(!l.test(d))return alert(h),b.focus(),!1}else if("6"==g[1]){var m=/^(http|ftp):\/\/(www\.)?.+\.(com|net|org)$/;if(!m.test(d))return alert(h),b.focus(),!1}else if("7"==g[1]){var n=/^([0-9]){2}(\/|-){1}([0-9]){2}(\/|-)([0-9]){4}$/;if(!n.test(d))return alert(h),b.focus(),!1}else if("8"==g[1]){var o=/^([0-9])+$/;if(!o.test(d))return alert(h),b.focus(),!1}else if("9"==g[1]){var p=/^([0-9\.])+$/;if(!p.test(d))return alert(h),b.focus(),!1}}a.submit.disabled=!0}function form_validation(a){total_elements=a.elements.length;var b=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;for(element_count=0;element_count<total_elements;element_count++){var c=a.elements[element_count],d=c.id,e=chktrim(c.value),f=c.type,g=d.split("_");if(g[0].indexOf("req")!=-1)if("select-one"==f){if(""==c.options[c.selectedIndex].value)return alert("Please Select "+g[2]),c.focus(),!1}else if("checkbox"==f){if(0==c.checked)return alert("Please check the  "+g[2]),c.focus(),!1}else{if(e.length<1)return alert("Please enter "+g[2]),c.focus(),!1;if(d.indexOf("_Email-id")!=-1){if(!b.test(e))return alert("Please enter valid "+g[2]),c.focus(),!1}else if(d.indexOf("_int_")!=-1){if(!parseInt(e))return alert("Please enter valid "+g[2]),c.focus(),!1}else if(g[0].indexOf("prohb")!=-1){if((g[0].indexOf("prohb")!=-1||g[0].indexOf("prohb1")!=-1)&&isProhibited(c))return!1;if((g[0].indexOf("prohb")!=-1||g[0].indexOf("prohb2")!=-1)&&!isValid(c))return!1}}else if(g[0].indexOf("prohb")!=-1&&e.length>0)if(d.indexOf("_int_")!=-1){if(!parseInt(e))return alert("Please enter valid "+g[2]),c.focus(),!1}else{if((g[0].indexOf("prohb")!=-1||g[0].indexOf("prohb1")!=-1)&&isProhibited(c))return!1;if((g[0].indexOf("prohb")!=-1||g[0].indexOf("prohb2")!=-1)&&!isValid(c))return!1}}}function chktrim(a){if("string"!=typeof a)return a;for(var b=a,c=b.substring(0,1);" "==c;)b=b.substring(1,b.length),c=b.substring(0,1);for(c=b.substring(b.length-1,b.length);" "==c;)b=b.substring(0,b.length-1),c=b.substring(b.length-1,b.length);for(;b.indexOf("  ")!=-1;)b=b.substring(0,b.indexOf("  "))+b.substring(b.indexOf("  ")+1,b.length);return b}function showme(a){"C"==a?document.getElementById("show").style.display="block":"Y"==a&&(document.getElementById("show").style.display="none")}function openWindow(a){window.open(a,"mywindow","menubar=0,resizable=1,width=550,height=500")}function chk_mail_to_friend(a){return 0==a.frdemailid.value?(alert("Please Enter Your Freind E-MailID"),a.frdemailid.focus(),!1):a.frdemailid.value.indexOf("@")==-1?(alert("Error in e-mail address"),a.frdemailid.focus(),!1):a.frdemailid.value.indexOf(".")==-1?(alert("Error in e-mail address"),a.frdemailid.focus(),!1):a.frdemailid.value.indexOf("@")!=a.frdemailid.value.lastIndexOf("@")?(alert("Please Specify One E-mail address only"),a.frdemailid.focus(),!1):0==a.name.value?(alert("Please Enter Your Name"),a.name.focus(),!1):0==a.emailid.value?(alert("Please Enter Your E-MailID"),a.emailid.focus(),!1):a.emailid.value.indexOf("@")==-1?(alert("Error in e-mail address"),a.emailid.focus(),!1):a.emailid.value.indexOf(".")==-1?(alert("Error in e-mail address"),a.emailid.focus(),!1):void 0}function event_send_enquiry(a){return 0==chktrim(a.your_name.value).length?(alert("Please Enter Your Name "),a.your_name.focus(),!1):0==chktrim(a.emailid.value).length?(alert("Email-Id can't be left blank"),a.emailid.focus(),!1):chktrim(a.emailid.value).indexOf("@")==-1?(alert("Error in Email-Id"),a.emailid.focus(),!1):chktrim(a.emailid.value).indexOf(".")==-1?(alert("Error in Email-Id"),a.emailid.focus(),!1):chktrim(a.emailid.value).indexOf("@")!=chktrim(a.emailid.value).lastIndexOf("@")?(alert("Please Specify One Email-Id only"),a.emailid.focus(),!1):0==chktrim(a.address.value).length?(alert("Please Enter Address "),a.address.focus(),!1):chktrim(a.country.value).length<1?(alert("Please Select Country"),a.country.focus(),!1):chktrim(a.ph_ccode.value).length<1?(alert("Please Enter Phone No.(ISD code)"),a.ph_ccode.focus(),!1):isNaN(chktrim(a.ph_ccode.value))?(alert("Please Enter Correct ISD Code For Phone No.(ISD code)"),a.ph_ccode.focus(),!1):chktrim(a.ph_acode.value).length<1?(alert("Please Enter Phone No.(STD code)"),a.ph_acode.focus(),!1):isNaN(chktrim(a.ph_acode.value))?(alert("Please Enter Correct STD Code For Phone No.(STD code)"),a.ph_acode.focus(),!1):chktrim(a.ph_number.value).length<1?(alert("Please Enter Phone No.(Number)"),a.ph_number.focus(),!1):isNaN(chktrim(a.ph_number.value))?(alert("Please Enter Correct Number For Phone No.(Number)"),a.ph_number.focus(),!1):"VR"!=a.enq_type.value&&0==chktrim(a.business_type.value).length?(alert("Please Select Business Type"),a.business_type.focus(),!1):void 0}function chk_hotel_inq_form(a){return 0==chktrim(a.arrival_dd.value).length?(alert("Please Enter Your Arrival Day "),a.arrival_dd.focus(),!1):0==chktrim(a.arrival_mm.value).length?(alert("Please Enter Your Arrival Month "),a.arrival_mm.focus(),!1):0==chktrim(a.arrival_yyyy.value).length?(alert("Please Enter Your Arrival Year "),a.arrival_yyyy.focus(),!1):0==chktrim(a.departure_dd.value).length?(alert("Please Enter Your Departure Day "),a.departure_dd.focus(),!1):0==chktrim(a.departure_mm.value).length?(alert("Please Enter Your Departure Month "),a.departure_mm.focus(),!1):0==chktrim(a.departure_yyyy.value).length?(alert("Please Enter Your Departure Year "),a.departure_yyyy.focus(),!1):0==chktrim(a.no_rooms.value).length?(alert("Please Enter No. of Rooms "),a.no_rooms.focus(),!1):0==chktrim(a.other_req.value).length?(alert("Please Enter Other Requirements "),a.other_req.focus(),!1):0==chktrim(a.person_name.value).length?(alert("Please Enter Your Name "),a.person_name.focus(),!1):0==chktrim(a.username.value).length?(alert("Please Enter Your Email ID "),a.username.focus(),!1):0==chktrim(a.username.value).length?(alert("Email-Id can't be left blank"),a.username.focus(),!1):chktrim(a.username.value).indexOf("@")==-1?(alert("Error in Email-Id"),a.username.focus(),!1):chktrim(a.username.value).indexOf(".")==-1?(alert("Error in Email-Id"),a.username.focus(),!1):chktrim(a.username.value).indexOf("@")!=chktrim(a.username.value).lastIndexOf("@")?(alert("Please Specify One Email-Id only"),a.emailid.focus(),!1):0==chktrim(a.mobile.value).length?(alert("Please Enter Your Mobile Number "),a.mobile.focus(),!1):0==chktrim(a.address.value).length?(alert("Please Enter Your Address "),a.address.focus(),!1):0==chktrim(a.country.value).length?(alert("Please Enter Your Country "),a.country.focus(),!1):void 0}function chk_project_inqform(a,b){if(0==chktrim(a.your_name.value).length)return alert("Please Enter Your Name "),a.your_name.focus(),!1;if(0==chktrim(a.email_id.value).length)return alert("Please Enter Your Email ID "),a.email_id.focus(),!1;var c=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;return c.test(a.email_id.value)?0==chktrim(a.mobile.value).length?(alert("Please Enter Your Mobile Number "),a.mobile.focus(),!1):0==chktrim(a.desc.value).length?(alert("Please Enter Your Requirement "),a.desc.focus(),!1):"Y"==b&&0==chktrim(a.code.value).length?(alert("Please Enter Verification Code "),a.code.focus(),!1):void 0:(alert("Plaese enter a valid Emaail ID."),a.email_id.focus(),!1)}function requirement_form(a){return 0==chktrim(a.inq_subject.value).length?(alert("Please Enter Subject "),a.inq_subject.focus(),!1):0==chktrim(a.inq_desc.value).length?(alert("Please Enter Your Inquiry Description. "),a.inq_desc.focus(),!1):0==chktrim(a.your_name.value).length?(alert("Please Enter Your Name. "),a.your_name.focus(),!1):0==chktrim(a.email_id.value).length?(alert("Please Enter Your Email ID "),a.email_id.focus(),!1):0==chktrim(a.email_id.value).length?(alert("Email-Id can't be left blank"),a.email_id.focus(),!1):chktrim(a.email_id.value).indexOf("@")==-1?(alert("Error in Email-Id"),a.email_id.focus(),!1):chktrim(a.email_id.value).indexOf(".")==-1?(alert("Error in Email-Id"),a.email_id.focus(),!1):chktrim(a.email_id.value).indexOf("@")!=chktrim(a.email_id.value).lastIndexOf("@")?(alert("Please Specify One Email-Id only"),a.emailid.focus(),!1):0==chktrim(a.contact_no.value).length?(alert("Please Enter Your Contact No. "),a.contact_no.focus(),!1):0==chktrim(a.address.value).length?(alert("Please Enter Your Full Address "),a.address.focus(),!1):void 0}function select_item_cart(){for(var a=0,b=0;b<document.frmproduct.qty_1.length;b++)document.frmproduct.qty_1[b].checked&&(a=1);if(0==a)return alert("Please Select Your Item Products "),document.frmproduct.qty_1[0].focus(),!1}function select_item_cart_new(){if(""==document.frmproduct.prodid.value)return alert("Please Select Your Item Products "),!1}function inquiry_checkbox_select(a){for(var b=!1,c=!1,d=0;d<a.length;d++)"chk_"==a.elements[d].name.substr(0,4)&&("checkbox"==a.elements[d].type&&1==a.elements[d].checked&&(b=!0),c=!0);return 1==b||1!=c||(alert("Please check at least one checkbox."),!1)}function newsletter_validation(){var a=document.newsletter.news_letter_email.value;if(""==a||"Enter Email"==a)return alert("Please Enter Email"),document.newsletter.news_letter_email.focus(),!1;if(""!=a){var b=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;if(!b.test(a))return alert("Please Enter Valid Email"),document.newsletter.news_letter_email.value="",document.newsletter.news_letter_email.focus(),!1}return!0}