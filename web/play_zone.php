<!doctype html>
<?php
session_start();
?>

<!-- <!DOCTYPE html> -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="play_zone_pic/casino-chips.png">
    <link rel="stylesheet" href="./css/play_zone.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body>
    <header class="tob-bar">
        <section class="div-logo">
            <img class="logo-img" src="play_zone_pic/casino-chip.png" alt="" width="64" height="64" loading="lazy">
        </section>
        <section class="top-center-bar">
            <p id="name-username">Your username:
                <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>
            </p>
            <span id="balance-user">Balance: </span>
        </section>
        <section class="top-purple purple-group">
            <img class="purple-triangle" src="./play_zone_pic/Rectangle.svg" alt="" loading="lazy">
            <img class="purple-card" src="./play_zone_pic/playing-cards.png" alt="" loading="lazy">
        </section>
    </header>
    <main class="main">
        <aside class="left-side-bar">
            <nav class="button-group">
                <button class="all-games-btn">All Games</button>
                <button class="slots-btn">Slots</button>
                <button class="cards-btn" id="cards-btn" onclick="loadContentC()"><a href="games/blackJack.html" target="_blank">Cards</a></button>

                <button class="die-btn"><a href="diceRoll/diceRoll.html" target="_blank">Die</a></button>
                <button class="wallet-btn">Wallet</button>
                <button class="profile-btn">Profile</button>
            </nav>
            <section class="bottom-purple purple-group">
                <img class="purple-triangle" src="./play_zone_pic/Rectangle.svg" alt="" loading="lazy">
                <img class="purple-card" src="./play_zone_pic/playing-cards.png" alt="" loading="lazy">
            </section>
        </aside>
        <section class="center-bar">

            <div class="blackJack" id="blackJack"></div>
            <div class="diceRoll" id="diceRoll"></div>

            <div class="tabs-group">
                <p class="general-tab tabs">General</p>
                <p class="security-tab tabs">Security</p>
            </div>

            <div class="tabs-groupW">
                <p class="general-tab tabs deposit" att="dep">Deposit</p>
                <p class="security-tab tabs withdraw" att="widr">Withdraw</p>
            </div>

            <div class="main-wallet-container">
                <div class="wallet-container">
                    <p class="balance">Balance:</p>
                    <div class="banks-cards-container">
                        <div class="bankCard bank-card1" num="1">
                            <img class="imgBankCards" src="./play_zone_pic/visa.png" alt="" width="105" height="24">
                            <p class="underImgBankCardText">10 &#163;</p>
                        </div>
                        <div class="bankCard bank-card2" num="2">
                            <img class="imgBankCards" src="./play_zone_pic/maestro.png" alt="">
                            <p class="underImgBankCardText">10 &#163;</p>
                        </div>
                        <div class="bankCard bank-card3" num="1">
                            <img class="imgBankCards" src="./play_zone_pic/mastercard.png" alt="">
                            <p class="underImgBankCardText">10 &#163;</p>
                        </div>
                    </div>
                </div>
                <div class="select-amount">
                    <div class="select-amount-number san1" data-price="10">10</div>
                    <div class="select-amount-number san2" data-price="20">20</div>
                    <div class="select-amount-number san3" data-price="50">50</div>
                    <div class="select-amount-number san4" data-price="100">100</div>
                    <div class="select-amount-number san5" data-price="200">200</div>
                </div>
                <input class="select-amount-manually">
                <button class="deposit-btn">Deposit</button>
            </div>

            <div class="with-wallet-container">
                <div class="wallet-container">
                    <p class="balance">Balance:</p>
                    <div class="banks-cards-container">
                        <div class="bankCard bank-card1" num="1">
                            <img class="imgBankCards" src="./play_zone_pic/visa.png" alt="" width="105" height="24">
                            <p class="underImgBankCardText">10 &#163;</p>
                        </div>
                        <div class="bankCard bank-card2" num="2">
                            <img class="imgBankCards" src="./play_zone_pic/maestro.png" alt="">
                            <p class="underImgBankCardText">10 &#163;</p>
                        </div>
                        <div class="bankCard bank-card3" num="1">
                            <img class="imgBankCards" src="./play_zone_pic/mastercard.png" alt="">
                            <p class="underImgBankCardText">10 &#163;</p>
                        </div>
                    </div>
                </div>
                <div class="select-amount">
                    <div class="select-amount-number san1" data-price="10">10</div>
                    <div class="select-amount-number san2" data-price="20">20</div>
                    <div class="select-amount-number san3" data-price="50">50</div>
                    <div class="select-amount-number san4" data-price="100">100</div>
                    <div class="select-amount-number san5" data-price="200">200</div>
                </div>
                <input class="select-amount-manually-with">
                <button class="with-btn">Withdraw</button>
            </div>


            <div class="wrapper">
                <div class="credit-card" id="card">
                    <div class="card-front">
                        <div class="branding">
                            <img src="./play_zone_pic/chip.png" class="chip-img" />
                            <img src="./play_zone_pic/visa.png" class="visa-logo" />
                        </div>
                        <div class="card-number">
                            <div>
                                <span class="card-number-display">_</span>
                                <span class="card-number-display">_</span>
                                <span class="card-number-display">_</span>
                                <span class="card-number-display">_</span>
                            </div>
                            <div>
                                <span class="card-number-display">_</span>
                                <span class="card-number-display">_</span>
                                <span class="card-number-display">_</span>
                                <span class="card-number-display">_</span>
                            </div>
                            <div>
                                <span class="card-number-display">_</span>
                                <span class="card-number-display">_</span>
                                <span class="card-number-display">_</span>
                                <span class="card-number-display">_</span>
                            </div>
                            <div>
                                <span class="card-number-display">_</span>
                                <span class="card-number-display">_</span>
                                <span class="card-number-display">_</span>
                                <span class="card-number-display">_</span>
                            </div>
                        </div>
                        <div class="details">
                            <div>
                                <span>Card Holder</span>
                                <span id="card-holder-name">Your Name Here</span>
                            </div>
                            <div>
                                <span>Expires</span>
                                <span id="validity">06/28</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-back">
                        <div class="black-strip"></div>
                        <div class="white-strip">
                            <span>CVV</span>
                            <div id="cvv-display"></div>
                        </div>
                        <img src="./play_zone_pic/visa.png" class="visa-logo" />
                    </div>
                </div>
                <form class="credit-card-form">
                    <label class="labelInput clabel" for="card-number">Card Number</label>
                    <input class="labelInput cinput" type="number" id="card-number" placeholder="1234123412341234" />
                    <label class="labelInput clabel" for="card-holder">Card Holder:</label>
                    <input class="labelInput cinput" type="text" id="card-name-input" placeholder="Your Name" />
                    <div class="date-cvv">
                        <div>
                            <label class="labelInput clabel" for="validity">Expires On:</label>
                            <input class="labelInput cinput" type="date" id="validity-input" />
                        </div>
                        <div>
                            <label class="labelInput clabel" for="cvv">CVV:</label>
                            <input class="labelInput cinput" type="number" id="cvv" placeholder="***" />
                        </div>
                    </div>
                </form>
            </div>





            <form class="form-general" method="post" action="userID.php">

                <div class="test">
                    <label class="label" for="firstName">First Name</label>
                    <input class="input name" type="text" name="firstName" id="firstName" placeholder="First Name">
                </div>


                <div class="test">
                    <label class="label" for="lastName">Last Name</label>
                    <input class="input surname" type="text" name="lastName" id="lastName" placeholder="Last Name">
                </div>


                <div class="test">
                    <label class="label" for="dateOFbirth">Date of Birth</label>
                    <input class="input dateofbirth" id="dateOFbirth" type="date" name="DOB" placeholder="Date of Birth" lang="en" onkeypress="return false">
                    <!-- <span id="ageError" style="color: red;"></span> -->
                </div>

                <div class="test">
                    <label class="label" for="Country">Country</label>
                    <!-- <input class="input" type="text" name="Country" id="Country"> -->
                    <select id="Country" name="country" class="form-control input">
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Åland Islands">Åland Islands</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Bouvet Island">Bouvet Island</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The
                        </option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Territories">French Southern Territories</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guernsey">Guernsey</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-bissau">Guinea-bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jersey">Jersey</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic
                            of
                        </option>
                        <option value="Korea, Republic of">Korea, Republic of</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macao">Macao</option>
                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav
                            Republic
                            of</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Pitcairn">Pitcairn</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russian Federation">Russian Federation</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Helena">Saint Helena</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South
                            Sandwich
                            Islands</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Timor-leste">Timor-leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands
                        </option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Viet Nam">Viet Nam</option>
                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>


                <div class="test">
                    <label class="label" for="postalCode">Postal Code</label>
                    <input class="input postalCode" type="text" name="postalCode" id="postalCode" placeholder="Postal Code">
                </div>

                <div class="test">
                    <label class="label" for="City">City</label>
                    <input class="input city" type="text" name="city" id="City" placeholder="City/Town">
                </div>


                <div class="test">
                    <label class="label" for="Address">Address</label>
                    <input class="input" type="text" name="address" id="Address" placeholder="Address">
                </div>

                <div class="test">
                    <label class="label" for="email">Email</label>
                    <input class="input email" type="email" name="email" id="email" placeholder="example@gmail.com" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$">
                    <span id="emailError" style="color: red;"></span>
                </div>


                <!-- <div class="test">
                    <label class="label" for="mobilePhone">Mobile Phone</label>
                    <input class="input code" type="text" name="mobilePhone" id="mobilePhone" placeholder="Code">
                    <input class="input number" type="text" name="mobilePhone" id="mobilePhone" placeholder="Number">
                </div> -->

                <button type="submit" class="btn-save">Save</button>
            </form>

            <form class="form-security" method="get" action="">
                <div class="password-change">
                    <p>Password change</p>

                    <div class="old-password">
                        <label class="label" for="old">Old password</label>
                        <input class="input inputPassword" type="password" id="old" placeholder="Old password">
                        <img class="eye" src="./play_zone_pic/eye-slash-solid.svg" alt="" width="25" height="25">
                    </div>

                    <div class="new-password">
                        <label class="label" for="new">New password</label>
                        <input class="input inputPassword" type="password" id="new" placeholder="New password">
                        <img class="eye" src="./play_zone_pic/eye-slash-solid.svg" alt="" width="25" height="25">
                    </div>

                    <div class="password-confirm">
                        <label class="label" for="confirm">Password confirm</label>
                        <input class="input inputPassword" type="password" id="confirm" placeholder="Password confirm">
                        <img class="eye" src="./play_zone_pic/eye-slash-solid.svg" alt="" width="25" height="25">
                    </div>

                    <button class="btn-save" type="submit">Save</button>
                </div>
            </form>

        </section>
    </main>
    <script src="./js/play_zone_form.js"></script>
</body>

</html>