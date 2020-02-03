<!--header-->
<?php include "includes/db.php";?>
<?php include "includes/header.php";?>
<br class="lh2em" />
<div id="middle">
    <div id="bodyFormat1" class="wrap ls">
        <div class="row1 dt columns23">
            <div class="col-2" style="padding-left:0;">
                <!-- header ends -->
                <div class="h1">
                    <h1>Enquiry
                    </h1>
                </div>
                <p class="breadcrumb ar uu small">
                    <a href="<?= BASE_URL;?>/" title="Home">Home
                    </a>
                    <b class="ffv p2px">&rsaquo;
                    </b> <?php $page = pathinfo(__FILE__, PATHINFO_FILENAME); echo ucfirst($page);?>
                </p>
                <br />
                <script type="text/javascript" language="javascript">
                    $(document).ready(function() {
                        var url = document.location.toString(),
                            hash = url.indexOf('#');
                        if (hash && hash != '-1') {
                            var hashlink = url.substr(++hash, url.length),
                                a = $('a[name="' + hashlink + '"]'),
                                y = a.offset().top;
                            $('html').animate({
                                scrollTop: y
                            })
                        }
                    })();
                </script>
                <form name="static_form" method="post" action="http://massexportworld.com/process_enquiry.php" onsubmit="return static_inq_form_validate(10001);" enctype="multipart/form-data" class="inputs-p7px inputs-br5px inputs-bs10px">
                    <div class="mb20px">
                        Please fill in the enquiry form below and we will get back to you as soon as possible.
                        <br />
                        <br />
                        <span class="b">Note:
                        </span> Ensure that the fields with asteriks are filled.
                    </div>
                    <table class="w100 bdrAll">
                        <tr>
                            <td colspan="2" class="headVr b p10px">
                                Enquiry Details
                            </td>
                        </tr>
                        <tr>
                            <td class="w33 ar p7px">
                                <b class="star">*
                                </b> Subject
                                <b class="pl5px">:
                                </b>
                            </td>
                            <td class="p7px">
                                <input type="text" name="dynFrm_subject" value="" class="input w65" />
                            </td>
                        </tr>
                        <tr>
                            <td class="ar p7px">
                                <b class="star">*
                                </b> Details
                                <b class="pl5px">:
                                </b>
                            </td>
                            <td class="p7px">
                                <textarea name="dynFrm_details_2" id="dynFrm_details_2" maxlength="1000" cols="40" rows="5" class="w65">
                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="headVr b p10px">Contact Information
                            </td>
                        </tr>
                        <tr>
                            <td class="ar p7px">
                                <b class="star">*
                                </b> Your Name
                                <b class="pl5px">:
                                </b>
                            </td>
                            <td class="p7px">
                                <input type="text" name="dynFrm_contact_person" value="" class="input w65" />
                            </td>
                        </tr>
                        <tr>
                            <td class="ar p7px">
                                <b class="star" id="company-name-star">*
                                </b> Your Company Name
                                <b class="pl5px">:
                                </b>
                            </td>
                            <td class="p7px">
                                <input type="text" name="dynFrm_company_name" id="dynFrm_company_name" value="" class="input w65" /> &nbsp;
                                <input type="checkbox" name="comp_name_valid" value="Y" class="mr3px" onClick="if(this.checked == true) {document.getElementById('dynFrm_company_name').setAttribute('disabled', true); document.getElementById('company-name-star').className = 'star dn';document.getElementById('company-name-star').style.display='none';} else { document.getElementById('dynFrm_company_name').removeAttribute('disabled'); document.getElementById('company-name-star').className = 'star';document.getElementById('company-name-star').style.display='';}" /> Not Applicable
                            </td>
                        </tr>
                        <tr>
                            <td class="ar p7px">
                                <b class="star">*
                                </b> Select Country
                                <b class="pl5px">:
                                </b>
                            </td>
                            <td class="p7px">
                                <select class="w65" name="dynFrm_country" class="w80" onChange="if(this.value=='IN^91'){document.getElementById('indian_state').style.display='';}else{document.getElementById('indian_state').style.display='none';} document.getElementById('phone_isd').value=this.value.substr(3, 3);">
                                    <option value="">Select Country
                                    </option>
                                    <option value="AF^93">Afghanistan
                                    </option>
                                    <option value="AL^335">Albania
                                    </option>
                                    <option value="DZ^213">Algeria
                                    </option>
                                    <option value="AS^684">American Samoa
                                    </option>
                                    <option value="AD^376">Andorra
                                    </option>
                                    <option value="AO^244">Angola
                                    </option>
                                    <option value="AI^264">Anguilla
                                    </option>
                                    <option value="AQ^672">Antarctica
                                    </option>
                                    <option value="AG^268">Antigua and Barbuda
                                    </option>
                                    <option value="AR^54">Argentina
                                    </option>
                                    <option value="AM^374">Armenia
                                    </option>
                                    <option value="AW^297">Aruba
                                    </option>
                                    <option value="AU^61">Australia
                                    </option>
                                    <option value="AT^43">Austria
                                    </option>
                                    <option value="AZ^994">Azerbaijan
                                    </option>
                                    <option value="BS^242">Bahamas
                                    </option>
                                    <option value="BH^973">Bahrain
                                    </option>
                                    <option value="BD^880">Bangladesh
                                    </option>
                                    <option value="BB^246">Barbados
                                    </option>
                                    <option value="BY^375">Belarus
                                    </option>
                                    <option value="BE^32">Belgium
                                    </option>
                                    <option value="BZ^501">Belize
                                    </option>
                                    <option value="BJ^229">Benin
                                    </option>
                                    <option value="BM^441">Bermuda
                                    </option>
                                    <option value="BT^975">Bhutan
                                    </option>
                                    <option value="BO^591">Bolivia
                                    </option>
                                    <option value="BA^387">Bosnia and Herzegowina
                                    </option>
                                    <option value="BW^267">Botswana
                                    </option>
                                    <option value="BV^47">Bouvet Island
                                    </option>
                                    <option value="BR^55">Brazil
                                    </option>
                                    <option value="IO^246">British Indian Ocean Territory
                                    </option>
                                    <option value="BN^673">Brunei Darussalam
                                    </option>
                                    <option value="BG^359">Bulgaria
                                    </option>
                                    <option value="BF^226">Burkina Faso
                                    </option>
                                    <option value="BI^257">Burundi
                                    </option>
                                    <option value="KH^855">Cambodia
                                    </option>
                                    <option value="CM^237">Cameroon
                                    </option>
                                    <option value="CA^1">Canada
                                    </option>
                                    <option value="CV^238">Cape Verde
                                    </option>
                                    <option value="KY^345">Cayman Islands
                                    </option>
                                    <option value="CF^236">Central African Republic
                                    </option>
                                    <option value="TD^235">Chad
                                    </option>
                                    <option value="CL^56">Chile
                                    </option>
                                    <option value="CN^86">China
                                    </option>
                                    <option value="CX^61">Christmas Island
                                    </option>
                                    <option value="CC^61">Cocos (Keeling) Islands
                                    </option>
                                    <option value="CO^57">Colombia
                                    </option>
                                    <option value="KM^269">Comoros
                                    </option>
                                    <option value="CG^242">Congo
                                    </option>
                                    <option value="CK^682">Cook Islands
                                    </option>
                                    <option value="CR^506">Costa Rica
                                    </option>
                                    <option value="CI^225">Cote D'Ivoire
                                    </option>
                                    <option value="HR^385">Croatia
                                    </option>
                                    <option value="CU^53">Cuba
                                    </option>
                                    <option value="CY^357">Cyprus
                                    </option>
                                    <option value="CZ^420">Czech Republic
                                    </option>
                                    <option value="DK^45">Denmark
                                    </option>
                                    <option value="DJ^253">Djibouti
                                    </option>
                                    <option value="DM^767">Dominica
                                    </option>
                                    <option value="DO^809">Dominican Republic
                                    </option>
                                    <option value="TP^670">East Timor
                                    </option>
                                    <option value="EC^593">Ecuador
                                    </option>
                                    <option value="EG^20">Egypt
                                    </option>
                                    <option value="SV^503">El Salvador
                                    </option>
                                    <option value="GQ^240">Equatorial Guinea
                                    </option>
                                    <option value="ER^291">Eritrea
                                    </option>
                                    <option value="EE^372">Estonia
                                    </option>
                                    <option value="ET^251">Ethiopia
                                    </option>
                                    <option value="FK^500">Falkland Islands (Malvinas)
                                    </option>
                                    <option value="FO^298">Faroe Islands
                                    </option>
                                    <option value="FJ^679">Fiji
                                    </option>
                                    <option value="FI^358">Finland
                                    </option>
                                    <option value="FR^33">France
                                    </option>
                                    <option value="FX^590">France, Metropolitan
                                    </option>
                                    <option value="GF^594">French Guiana
                                    </option>
                                    <option value="PF^689">French Polynesia
                                    </option>
                                    <option value="TF^590">French Southern Territories
                                    </option>
                                    <option value="GA^241">Gabon
                                    </option>
                                    <option value="GM^220">Gambia
                                    </option>
                                    <option value="GE^995">Georgia
                                    </option>
                                    <option value="DE^49">Germany
                                    </option>
                                    <option value="GH^233">Ghana
                                    </option>
                                    <option value="GI^350">Gibraltar
                                    </option>
                                    <option value="GR^30">Greece
                                    </option>
                                    <option value="GL^299">Greenland
                                    </option>
                                    <option value="GD^809">Grenada
                                    </option>
                                    <option value="GP^590">Guadeloupe
                                    </option>
                                    <option value="GU^1">Guam
                                    </option>
                                    <option value="GT^502">Guatemala
                                    </option>
                                    <option value="GN^224">Guinea
                                    </option>
                                    <option value="GW^245">Guinea-bissau
                                    </option>
                                    <option value="GY^592">Guyana
                                    </option>
                                    <option value="HT^509">Haiti
                                    </option>
                                    <option value="HM^61">Heard and Mc Donald Islands
                                    </option>
                                    <option value="HN^504">Honduras
                                    </option>
                                    <option value="HK^852">Hong Kong
                                    </option>
                                    <option value="HU^36">Hungary
                                    </option>
                                    <option value="IS^354">Iceland
                                    </option>
                                    <option value="IN^91">India
                                    </option>
                                    <option value="ID^62">Indonesia
                                    </option>
                                    <option value="IR^98">Iran (Islamic Republic of)
                                    </option>
                                    <option value="IQ^964">Iraq
                                    </option>
                                    <option value="IE^353">Ireland
                                    </option>
                                    <option value="IL^972">Israel
                                    </option>
                                    <option value="IT^39">Italy
                                    </option>
                                    <option value="JM^876">Jamaica
                                    </option>
                                    <option value="JP^81">Japan
                                    </option>
                                    <option value="JO^962">Jordan
                                    </option>
                                    <option value="KZ^7">Kazakhstan
                                    </option>
                                    <option value="KE^254">Kenya
                                    </option>
                                    <option value="KI^686">Kiribati
                                    </option>
                                    <option value="KP^850">Korea, Democratic People's Republic of
                                    </option>
                                    <option value="KR^82">Korea, Republic of
                                    </option>
                                    <option value="KW^965">Kuwait
                                    </option>
                                    <option value="KG^7">Kyrgyzstan
                                    </option>
                                    <option value="LA^856">Lao People's Democratic Republic
                                    </option>
                                    <option value="LV^371">Latvia
                                    </option>
                                    <option value="LB^961">Lebanon
                                    </option>
                                    <option value="LS^266">Lesotho
                                    </option>
                                    <option value="LR^231">Liberia
                                    </option>
                                    <option value="LY^218">Libya
                                    </option>
                                    <option value="LI^423">Liechtenstein
                                    </option>
                                    <option value="LT^370">Lithuania
                                    </option>
                                    <option value="LU^352">Luxembourg
                                    </option>
                                    <option value="MO^853">Macau
                                    </option>
                                    <option value="MK^389">Macedonia, The Former Yugoslav Republic of
                                    </option>
                                    <option value="MG^261">Madagascar
                                    </option>
                                    <option value="MW^265">Malawi
                                    </option>
                                    <option value="MY^60">Malaysia
                                    </option>
                                    <option value="MV^960">Maldives
                                    </option>
                                    <option value="ML^223">Mali
                                    </option>
                                    <option value="MT^356">Malta
                                    </option>
                                    <option value="MH^692">Marshall Islands
                                    </option>
                                    <option value="MQ^596">Martinique
                                    </option>
                                    <option value="MR^222">Mauritania
                                    </option>
                                    <option value="MU^230">Mauritius
                                    </option>
                                    <option value="YT^269">Mayotte
                                    </option>
                                    <option value="MX^52">Mexico
                                    </option>
                                    <option value="FM^691">Micronesia, Federated States of
                                    </option>
                                    <option value="MD^373">Moldova, Republic of
                                    </option>
                                    <option value="MC^377">Monaco
                                    </option>
                                    <option value="MN^976">Mongolia
                                    </option>
                                    <option value="ME^382">Montenegro
                                    </option>
                                    <option value="MS^664">Montserrat
                                    </option>
                                    <option value="MA^212">Morocco
                                    </option>
                                    <option value="MZ^258">Mozambique
                                    </option>
                                    <option value="MM^95">Myanmar
                                    </option>
                                    <option value="NA^264">Namibia
                                    </option>
                                    <option value="NR^674">Nauru
                                    </option>
                                    <option value="NP^977">Nepal
                                    </option>
                                    <option value="NL^31">Netherlands
                                    </option>
                                    <option value="AN^599">Netherlands Antilles
                                    </option>
                                    <option value="NC^687">New Caledonia
                                    </option>
                                    <option value="NZ^64">New Zealand
                                    </option>
                                    <option value="NI^505">Nicaragua
                                    </option>
                                    <option value="NE^227">Niger
                                    </option>
                                    <option value="NG^234">Nigeria
                                    </option>
                                    <option value="NU^683">Niue
                                    </option>
                                    <option value="NF^672">Norfolk Island
                                    </option>
                                    <option value="MP^670">Northern Mariana Islands
                                    </option>
                                    <option value="NO^47">Norway
                                    </option>
                                    <option value="OM^968">Oman
                                    </option>
                                    <option value="PK^92">Pakistan
                                    </option>
                                    <option value="PW^680">Palau
                                    </option>
                                    <option value="PA^507">Panama
                                    </option>
                                    <option value="PG^675">Papua New Guinea
                                    </option>
                                    <option value="PY^595">Paraguay
                                    </option>
                                    <option value="PE^51">Peru
                                    </option>
                                    <option value="PH^63">Philippines
                                    </option>
                                    <option value="PN^872">Pitcairn
                                    </option>
                                    <option value="PL^48">Poland
                                    </option>
                                    <option value="PT^351">Portugal
                                    </option>
                                    <option value="PR^787">Puerto Rico
                                    </option>
                                    <option value="QA^974">Qatar
                                    </option>
                                    <option value="RE^262">Reunion
                                    </option>
                                    <option value="RO^40">Romania
                                    </option>
                                    <option value="RU^7">Russian Federation
                                    </option>
                                    <option value="RW^250">Rwanda
                                    </option>
                                    <option value="KN^869">Saint Kitts and Nevis
                                    </option>
                                    <option value="LC^758">Saint Lucia
                                    </option>
                                    <option value="VC^784">Saint Vincent and the Grenadines
                                    </option>
                                    <option value="WS^685">Samoa
                                    </option>
                                    <option value="SM^378">San Marino
                                    </option>
                                    <option value="ST^239">Sao Tome and Principe
                                    </option>
                                    <option value="SA^966">Saudi Arabia
                                    </option>
                                    <option value="SN^221">Senegal
                                    </option>
                                    <option value="RS^381">Serbia
                                    </option>
                                    <option value="SC^248">Seychelles
                                    </option>
                                    <option value="SL^232">Sierra Leone
                                    </option>
                                    <option value="SG^65">Singapore
                                    </option>
                                    <option value="SK^421">Slovakia (Slovak Republic)
                                    </option>
                                    <option value="SI^386">Slovenia
                                    </option>
                                    <option value="SB^677">Solomon Islands
                                    </option>
                                    <option value="SO^252">Somalia
                                    </option>
                                    <option value="ZA^27">South Africa
                                    </option>
                                    <option value="GS^44">South Georgia and the South Sandwich Islands
                                    </option>
                                    <option value="SS^211">South Sudan
                                    </option>
                                    <option value="ES^34">Spain
                                    </option>
                                    <option value="LK^94">Sri Lanka
                                    </option>
                                    <option value="SH^290">St. Helena
                                    </option>
                                    <option value="PM^508">St. Pierre and Miquelon
                                    </option>
                                    <option value="SD^249">Sudan
                                    </option>
                                    <option value="SR^597">Suriname
                                    </option>
                                    <option value="SJ^47">Svalbard and Jan Mayen Islands
                                    </option>
                                    <option value="SZ^268">Swaziland
                                    </option>
                                    <option value="SE^46">Sweden
                                    </option>
                                    <option value="CH^41">Switzerland
                                    </option>
                                    <option value="SY^963">Syrian Arab Republic
                                    </option>
                                    <option value="TW^886">Taiwan
                                    </option>
                                    <option value="TJ^992">Tajikistan
                                    </option>
                                    <option value="TZ^255">Tanzania, United Republic of
                                    </option>
                                    <option value="TH^66">Thailand
                                    </option>
                                    <option value="TG^228">Togo
                                    </option>
                                    <option value="TK^64">Tokelau
                                    </option>
                                    <option value="TO^676">Tonga
                                    </option>
                                    <option value="TT^868">Trinidad and Tobago
                                    </option>
                                    <option value="TN^216">Tunisia
                                    </option>
                                    <option value="TR^90">Turkey
                                    </option>
                                    <option value="TM^993">Turkmenistan
                                    </option>
                                    <option value="TC^649">Turks and Caicos Islands
                                    </option>
                                    <option value="TV^688">Tuvalu
                                    </option>
                                    <option value="UG^256">Uganda
                                    </option>
                                    <option value="UA^380">Ukraine
                                    </option>
                                    <option value="AE^971">United Arab Emirates
                                    </option>
                                    <option value="UK^44">United Kingdom
                                    </option>
                                    <option value="US^1">United States
                                    </option>
                                    <option value="UM^1">United States Minor Outlying Islands
                                    </option>
                                    <option value="UY^598">Uruguay
                                    </option>
                                    <option value="UZ^998">Uzbekistan
                                    </option>
                                    <option value="VU^678">Vanuatu
                                    </option>
                                    <option value="VA^39">Vatican City State (Holy See)
                                    </option>
                                    <option value="VE^58">Venezuela
                                    </option>
                                    <option value="VN^84">Viet Nam
                                    </option>
                                    <option value="VG^1">Virgin Islands (British)
                                    </option>
                                    <option value="VI^1">Virgin Islands (U.S.)
                                    </option>
                                    <option value="WF^681">Wallis and Futuna Islands
                                    </option>
                                    <option value="EH^212">Western Sahara
                                    </option>
                                    <option value="YE^967">Yemen
                                    </option>
                                    <option value="YU^381">Yugoslavia
                                    </option>
                                    <option value="ZR^243">Zaire
                                    </option>
                                    <option value="ZM^260">Zambia
                                    </option>
                                    <option value="ZW^263">Zimbabwe
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr id="indian_state" style="display: none;">
                            <td class="ar p7px">
                                <b class="star">*
                                </b> Select State
                                <b class="pl5px">:
                                </b>
                            </td>
                            <td class="p7px">
                                <select name="dynFrm_state" class="input w65">
                                    <option value="">Select State
                                    </option>
                                    <option value="Andaman & Nicobar Islands">Andaman & Nicobar Islands
                                    </option>
                                    <option value="Andhra Pradesh">Andhra Pradesh
                                    </option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh
                                    </option>
                                    <option value="Assam">Assam
                                    </option>
                                    <option value="Bihar">Bihar
                                    </option>
                                    <option value="Chandigarh">Chandigarh
                                    </option>
                                    <option value="Chhattisgarh">Chhattisgarh
                                    </option>
                                    <option value="Dadra & Nagar Haveli">Dadra & Nagar Haveli
                                    </option>
                                    <option value="Delhi">Delhi
                                    </option>
                                    <option value="Daman & Diu">Daman & Diu
                                    </option>
                                    <option value="Goa">Goa
                                    </option>
                                    <option value="Gujarat">Gujarat
                                    </option>
                                    <option value="Haryana">Haryana
                                    </option>
                                    <option value="Himachal Pradesh">Himachal Pradesh
                                    </option>
                                    <option value="Jammu & Kashmir">Jammu & Kashmir
                                    </option>
                                    <option value="Jharkhand">Jharkhand
                                    </option>
                                    <option value="Karnataka">Karnataka
                                    </option>
                                    <option value="Kerala">Kerala
                                    </option>
                                    <option value="Madhya Pradesh">Madhya Pradesh
                                    </option>
                                    <option value="Maharashtra">Maharashtra
                                    </option>
                                    <option value="Manipur">Manipur
                                    </option>
                                    <option value="Meghalaya">Meghalaya
                                    </option>
                                    <option value="Mizoram">Mizoram
                                    </option>
                                    <option value="Nagaland">Nagaland
                                    </option>
                                    <option value="Odisha">Odisha
                                    </option>
                                    <option value="Pondicherry">Pondicherry
                                    </option>
                                    <option value="Punjab">Punjab
                                    </option>
                                    <option value="Rajasthan">Rajasthan
                                    </option>
                                    <option value="Sikkim">Sikkim
                                    </option>
                                    <option value="Tamil Nadu">Tamil Nadu
                                    </option>
                                    <option value="Telangana">Telangana
                                    </option>
                                    <option value="Tripura">Tripura
                                    </option>
                                    <option value="Uttar Pradesh">Uttar Pradesh
                                    </option>
                                    <option value="Uttarakhand">Uttarakhand
                                    </option>
                                    <option value="West Bengal">West Bengal
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="ar p7px">
                                <b class="star" id="email-star">*
                                </b> E-mail
                                <b class="pl5px">:
                                </b>
                            </td>
                            <td class="p7px">
                                <input type="text" name="dynFrm_email_id" id="dynFrm_email_id" value="" class="input w65" />
                                &nbsp;
                                <input type="hidden" name="email_valid" value="N">
                            </td>
                        </tr>
                        <tr>
                            <td class="ar p7px">
                                <b class="star">*
                                </b> Mobile No.
                                <b class="pl5px">:
                                </b>
                            </td>
                            <td class="p7px">
                                <input type="text" name="phone_isd" id="phone_isd" value="" readonly="readonly" class="input w10">
                                <input type="text" name="dynFrm_phone" maxlength="35" value="" class="input w50" />
                            </td>
                        </tr>
                        <tr>
                            <td class="ar p7px b">&nbsp;
                            </td>
                            <td class="p7px">
                                <input type="submit" name="submit" value="Submit" class="buttonBig p10px pl15px pr15px b" />&nbsp;&nbsp;&nbsp;
                                <input type="reset" name="cancel" value="Cancel" class="buttonBig p10px pl15px pr15px b" />
                            </td>
                        </tr>
                    </table>
                </form>
                <!-- footer -->
            </div>
            
            <!--            sidebar-->
            <?php include "includes/sidebar.php";?>
            
        </div>
    </div>
</div>
<br />
<?php include "includes/footer.php";?>