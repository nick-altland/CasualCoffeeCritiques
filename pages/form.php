<?php
include "../top.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Sanatize function from the text
function getData($field) {
    if (!isset($_POST[$field])) {
        $data = "";
    }else {
        $data = trim($_POST[$field]);
        $data = htmlspecialchars($data);
    }
    return $data;
}

//function to check for text and numbers
function verifyAlphaNum($testString) {
    return(preg_match ("/^([[:alnum:]]|-|\.| |!| |\'|&|;|#)+$/", $testString));
}


//Intialize all 
$dataIsGood = false;
$favoriteList = array('Kestrel', 'Kru', 'PerkyPlanet');
$orderList = array('black', 'withcreamsugar', 'latte', 'cappuccino', 'matcha', 'other');

$favorite = '';
$order = '';
$name = '';
$emailAddress = '';
$phoneNumber = '';
$feedback = '';
$info = 0;
$update = 0;
$allPosts = 0;

?>
        <main class="form">

            <article>
                <section class="first form">
                    <h3><em>Please fill out this short survey, and enter your contact information for regular updates</em></h3>
                    <?php 
                    //Process form when it is submitted
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        //Server side sanitization
                        $dataIsGood = true;
                        $favorite = getData("radFavorite");
                        $order = getData("lstOrder");
                        $name = getData("txtName");
                        $emailAddress = getData('txtEmailAddress');
                        $emailAddress = filter_var($emailAddress, FILTER_SANITIZE_EMAIL);
                        $phoneNumber = getData("telPhoneNumber");
                        $feedback = getData("txtFeedback");
                        $info = (int) getData("chxInfo");
                        $update = (int) getData("chxUpdate");
                        $allPosts = (int) getData("chxAllPosts");
                    
                        //Validate Data
                        //Radio Button
                        if(!in_array($favorite, $favoriteList)) {
                            print '<p class="mistake">Error: Select a favorite</p>';
                            $dataIsGood = false;
                        }

                        //List
                        if(!in_array($order, $orderList)) {
                            print '<p class="mistake">Error: Select a coffee order</p>';
                            $dataIsGood = false;
                        }
                        //Text boxes:
                        //Name
                        if($name ==''){
                            print '<p class="mistake">Error: Name is empty </p>';
                            $dataIsGood = false;
                        } elseif (!verifyAlphaNum($name)) {
                            print '<p class = "mistake"> Enter a valid name, that does not include extra characters </p>';
                            $dataIsGood = false;
                        }

                        //Email Address
                        if($emailAddress ==''){
                            print '<p class="mistake"> Error: Missing email address</p>';
                            $dataIsGood = false;
                        } elseif (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
                            print '<p class="mistake"> Error: Enter a valid email address</p>';
                            $dataIsGood = false;
                        }
                        
                        //Phone Number
                        if($phoneNumber ==''){
                            print '<p class="mistake">Error: phone number empty </p>';
                            $dataIsGood = false;
                        } elseif (!is_numeric($phoneNumber)) {
                            print '<p class="mistake"> Error: Enter a valid phone number </p>';
                            $dataIsGood = false;
                        }

                        //Text Area
                        if($feedback ==''){
                            print '<p class="mistake">Error: Feedback empty </p>';
                            $dataIsGood = false;
                        } elseif (!verifyAlphaNum($feedback)) {
                            print '<p class="mistake"> Error: The previous feedback entry had illegal characters. Please remove and try again </p>';
                            $dataIsGood = false;
                        }

                        //Check Boxes
                        $totalChecked = $info + $update + $allPosts;
                        if ($totalChecked < 1) {
                            print '<p class="mistake"> Error: Make sure to check at least one box </p>';
                            $dataIsGood = false;
                        }

                        // Save the Data
                        if ($dataIsGood) {
                            try {
                                $sql = 'INSERT INTO tblCCCForm (fldFavorite, fldOrder, fldName, fldEmailAddress, fldPhoneNumber, fldFeedback, fldInfo, fldUpdate, fldAllPosts) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
                                $statement = $pdo->prepare($sql);
                                $params = array($favorite, $order, $name, $emailAddress, $phoneNumber, $feedback, $info, $update, $allPosts);
                                
                                if ($statement->execute($params)) {

                                    if ($favorite == 'Kestrel'){
                                        $messagefavorite = 'Kestrel Coffee Roasters';
                                    }elseif ($favorite == 'Kru'){
                                        $messagefavorite = 'Kru Coffee Collective';
                                    }elseif ($favorite == 'PerkyPlanet'){
                                        $messagefavorite = 'Perky Planet Coffee';
                                    }

                                    if ($order == 'black'){
                                        $messageOrder = 'Black (No Cream, Sugar)';
                                    }elseif ($order == 'withcreamsugar'){
                                        $messageOrder = 'With Cream, Sugar';
                                    }elseif ($order == 'latte'){
                                        $messageOrder = 'Latte';
                                    }elseif ($order == 'cappuccino'){
                                        $messageOrder = 'Cappuccino';
                                    }elseif ($order == 'matcha'){
                                        $messageOrder = 'Matcha Green Tea';
                                    }elseif ($order == 'other'){
                                        $messageOrder = 'Other';
                                    }

                                    $to = $emailAddress;
                                    $from = 'Casual Cafe Critiques <naltland@uvm.edu>';
                                    $subject = 'CCC Blog Update!';

                                    $mailMessage = '<html><body>';
                                    $mailMessage .= '<caption><strong style="font-size: 2em;">CCC Survey Information</strong></caption>';
                                    $mailMessage .= '<table style="text-align: left;border-collapse: collapse;margin: 1em;border: solid black;border: solid black;border: solid black;">';
                                    $mailMessage .= '<tr style="border-bottom: solid black;"><th style="padding: 1em;border-right: solid black;width: 30%;">Name</th><td colspan="3">' . $name . '</td></tr>';
                                    $mailMessage .= '<tr style="border-bottom: solid black;"><th style="padding: 1em;border-right: solid black;width: 30%;">Phone Number</th><td colspan="3">' . $phoneNumber . '</td></tr>';
                                    $mailMessage .= '<tr style="border-bottom: solid black;"><th style="padding: 1em;border-right: solid black;width: 30%;">Email Address</th><td colspan="3">' . $emailAddress . '</td></tr>';
                                    $mailMessage .= '<tr style="border-bottom: solid black;"><th style="padding: 1em;border-right: solid black;width: 30%;">Cafe Most Likely to Visit</th><td colspan="3">' . $messagefavorite . '</td></tr>';
                                    $mailMessage .= '<tr style="border-bottom: solid black;"><th style="padding: 1em;border-right: solid black;width: 30%;">Coffee Order</th><td colspan="3">' . $messageOrder . '</td></tr>';
                                    $mailMessage .= '<tr><th style="padding: 1em;border-right: solid black;width: 30%;">Feedback</th><td colspan="3">' . $feedback . '</td></tr>';

                                    $mailMessage .= '</table>';
                                    $mailMessage .= '</body></html>';

                                    $headers = "MIM-Version: 1.0\r\n";
                                    $headers .= "Content-type: text/html; charset=utf-8\r\n";
                                    $headers .= "From: " . $from . "\r\n";

                                    $mailSent = mail($to, $subject, $mailMessage, $headers);

                                    if($mailSent) {
                                        print"<p>A copy of your survey has been sent to your email</p>";
                                        print $mailMessage;
                                    }

                        
                                } else {
                                    print '<p>Survey was NOT successfully sent, error connecting with server</p>';
                                    foreach ($params as $param) {
                                        // look for ? replace with value
                                        $pos = strpos($sql, '?');
                                        if ($pos !== false) {
                                            $sql = substr_replace($sql, '"' . $param . '"', $pos, strlen('?'));
                                        }
                                    }
                                    print '<p>' . $sql . '</p>';
                                }

                            } catch (PDOException $e) {
                                print '<p>Could not send the survey, please contant support </p>';
                            }//end try
                        }//ends data is good
                    }//ends form was submitted
                ?>

<!-- Contact information form -->
                    <form action="#" method="POST">
                        <fieldset class="radioButtons">
<!-- One, Radio: What shop are they most likely to visit? -->
                            <h3>What Cafe are you most likely to visit, based on these blogs?</h3>  
                                <p>
                                    <input type="radio" name="radFavorite" id="radKestrel" value="Kestrel" <?php if ($favorite == 'Kestrel') print 'checked'; ?>>
                                    <label for="radKestrel">Kestrel Coffee Roasters</label>
                                </p> 
                                <p> 
                                    <input type="radio" name="radFavorite" id="radKru" value="Kru" <?php if ($favorite == 'Kru') print 'checked'; ?>>
                                    <label for="radKru">Kru Coffee Collective</label>
                                </p>
                                <p>
                                    <input type="radio" name="radFavorite" id="radPerkyPlanet" value="PerkyPlanet" <?php if ($favorite == 'PerkyPlanet') print 'checked'; ?>>
                                    <label for="radPerkyPlanet">Perky Planet Coffee</label>
                                </p>
                        </fieldset> 
<!-- Two, List: List of the different types of coffee drinks -->
                        <fieldset class="orderList">
                            <h3>What is your go to coffee order?</h3>
                            <p>
                                <select name="lstOrder" size="1" multiple>
                                    <option value="black"<?php if ($order == 'black') print 'selected'; ?>>Black (No Cream/Sugar)</option>
                                    <option value="withcreamsugar"<?php if ($order == 'withcreamsugar') print 'selected'; ?>>With Cream/Sugar</option>
                                    <option value="latte"<?php if ($order  == 'latte') print 'selected'; ?>>Latte</option>
                                    <option value="cappuccino"<?php if ($order == 'cappuccino') print 'selected'; ?>>Cappuccino</option>
                                    <option value="matcha"<?php if ($order == 'matcha') print 'selected'; ?>>Matcha Green Tea</option>
                                    <option value="other"<?php if ($order == 'other') print 'selected'; ?>>Other</option>
                                </select>
                            </p>
                        </fieldset>
<!-- Three, Text input: name, email and phone number --> 
                        <fieldset class="textBoxes">
                            <h3>Feel free to enter your contact information below to be kept up to date future posts</h3>
                            <p>
                                <input type="text" id="txtName" name="txtName" placeholder="John Smith" value ="<?php print $name; ?>">
                                <label for="txtName">Name</label>
                            </p>
                            <p>
                                <input type="email" id="txtEmailAddress" name="txtEmailAddress" maxlength="40" placeholder="JohnSmith@gmail.com" value ="<?php print $emailAddress; ?>">
                                <label for="txtEmailAddress">Email</label>
                            </p>
                            <p>
                                <input type="tel" id="telPhoneNumber" name="telPhoneNumber" placeholder="(123)456-789" value ="<?php print $phoneNumber; ?>">
                                <label for="telPhoneNumber">Phone Number</label>
                            </p>
                        </fieldset>
<!-- Four, Comments, feedback -->
                        <fieldset class="textFeedback">
                            <h3>Please enter any thoughts on the site, suggestions for future posts, or other feedback</h3>
                            <p>
                                <label for="txtFeedback">Feedback:</label>
                                <textarea name="txtFeedback" id="txtFeedback" placeholder="Enter your feedback here"><?php print $feedback; ?></textarea>
                            </p>
                        </fieldset>
<!-- Five, Checkbox: Information list, update emails, and daily puppy pictures --> 
                        <fieldset class="checkboxes">
                            <h3>Check the boxes below to sign up for my mailing list</h3>
                            <p>
                                <input type="checkbox" name="chxInfo" id="chxInfo" value ="1" <?php if($info) print 'checked'; ?>>
                                <label for="chxInfo">More Info</label>
                            </p>
                            <p>   
                                <input type="checkbox" name="chxUpdate" id="chxUpdate" value ="1" <?php if($update) print 'checked'; ?>>   
                                <label for="chxUpdate">Just Blog Updates</label>
                            </p>
                            <p>
                                <input type="checkbox" name="chxAllPosts" id="chxAllPosts" value ="1" <?php if($allPosts) print 'checked'; ?>>
                                <label for="chxAllPosts">All Posts</label>
                            </p>
                        </fieldset>
<!-- Six, Submit: Submit button --> 
                        <fieldset class="button-field">
                            <p>
                                <input class="button" type="submit" value="SUBMIT" />
                            </p>
                        </fieldset>

                    </form>

                </section>

            </article>

        </main>

    <?php
    include '../footer.php';
    ?>

    </body>

</html>