<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <link href="../favicon.ico" rel="shortcut icon" />
        <link href="../Layout.css" rel="stylesheet" type="text/css" />

        <title>Contact Us - Shiloh Home of Hope for Women - Emporia, Kansas</title>
        <?php include "../Scripts/TrackingCookie.php"; ?>
        <script src="../Scripts/Misc.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="MainContainer">
            <div id="Header">
                <a href="http://www.shilohhomeofhope.org/" title="Shiloh Home of Hope for Women"><img src="../Layout/Header.png" width="1000" height="184" id="HeaderImage" alt="Shiloh Header" title="Shiloh: Home of Hope for Women" class="NoMarginImage" /></a>
            </div>

            <div id="LeftMenuContainer">
                <div class="MenuBox"><?php include "../Menu.php"; ?></div>
                <img src="../Layout/MenuBottom.png" width="155" height="38" alt="Menu Bottom" class="NoMarginImage" style="margin: 0 0 0.5em 0;" />
                <img src="../Layout/MenuTop.png" width="155" height="38" class="NoMarginImage" alt="Menu Top" />
                <div class="MenuBox"><?php include "../Latest.php"; ?></div>
                <img src="../Layout/MenuBottom.png" width="155" height="38" class="NoMarginImage" alt="Menu Bottom" style="margin: 0 0 0.5em 0;" />
                <a href="https://www.facebook.com/shiloh.emporia" target="_TOP" title="Shiloh Emporia"><img src="https://badge.facebook.com/badge/100001074885188.235.1922747363.png" style="border: 0px;" /></a>
            </div>

            <div id="ContentContainer">

                <div id="Contact" class="InlineBox"> 
                    <h1>Contact Us</h1>
                    <hr />
                    <h2>Phone:</h2>
                    <ul>
                        <li>(620) 342-2244</li>
                    </ul>
                    <hr />
                    <h2>Visit:</h2>
                    <p>615 Congress Street <small>(Enter from the parking lot)</small></p>
                    <p>1:00-5:00 PM, Tuesdays &amp; Thursdays</p>
                    <hr />
                    <h2>Postal Mail:</h2>
                    <p class="TextBold">PO Box 748</p>
                    <p class="TextBold">Emporia, KS 66801</p>
                    <hr />
                    <h2>Email:</h2>
                    <form action="../Scripts/Sendmail.php" method="post">
                        <fieldset>
                            <?php
                            if (session_is_registered('ErrorMSG')) {
                                echo "<div class=\"PHPMessage\">";
                                echo $_SESSION['ErrorMSG'];
                                echo "</div>";
                            }
                            ?>
                            <div class="FloC" style="width: 65%;">
                                <div class="FloL" style="width: 35%;">
                                    <label for="eName">Name: </label><br />
                                    <label for="eMail">Email Address: </label><br />
                                    <label for="eRegarding">Regarding: </label>
                                </div>
                                <div class="FloR" style="width: 65%;">
                                    <input type="text" name="eName" id="eName" maxlength="100" value="Your Name" onfocus="ClearText('eName');" />
                                    <input type="text" name="eMail" id="eMail" maxlength="100" value="Your Email" onfocus="ClearText('eMail');" />
                                    <select name="eRegarding" id="eRegarding">
                                        <option value="GeneralInformation" >General Information</option>
                                        <option value="ShilohHouseDirector" >Shiloh House Director</option>
                                        <option value="ProgramServicesDirector" >Program Services Director</option>
                                    </select>
                                </div>
                                <div class="ClearBoth"></div>
                            </div>

                            <textarea rows="10" cols="10" name="eMessage" id="eMessage" class="FloC" style="width: 30em; height: 10em;"></textarea>
                            <br />
                            <input type="submit" class="FloC" />
                        </fieldset>
                    </form>
                    <hr />
                    <iframe width="375" height="238" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" class="Border2 FloC" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Family+Life+Services,+605+Congress+Emporia,+Kansas&amp;sll=38.40537,-96.183937&amp;sspn=0.001402,0.00284&amp;ie=UTF8&amp;hq=Family+Life+Services,&amp;hnear=605+Congress+St,+Emporia,+Lyon,+Kansas+66801&amp;ll=38.405141,-96.183958&amp;spn=0.011148,0.022724&amp;z=14&amp;iwloc=A&amp;cid=9126629614543883220&amp;output=embed" style="width: 375px;"></iframe>
                    <p class="TextCenter"><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Family+Life+Services,+605+Congress+Emporia,+Kansas&amp;sll=38.40537,-96.183937&amp;sspn=0.001402,0.00284&amp;ie=UTF8&amp;hq=Family+Life+Services,&amp;hnear=605+Congress+St,+Emporia,+Lyon,+Kansas+66801&amp;ll=38.405141,-96.183958&amp;spn=0.011148,0.022724&amp;z=14&amp;iwloc=A&amp;cid=9126629614543883220"><small>View Larger Map</small></a></p>
                </div>

                <div class="ClearBoth"></div>
            </div>
            <div id="Footer"><?php include "../Footer.php"; ?></div>
        </div>
    </body>
</html>
<?php
$_SESSION['ErrorMSG'] = "";
session_destroy();
?>