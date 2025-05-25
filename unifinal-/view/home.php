<?php 
include '../Control/action.php';
setcookie("user","1",time()+86400);
if(isset($_COOKIE['user'])){
    echo "you have visited the site";
}
else{
    echo "Welcome to site";
}
$_SESSION["user"]="abc";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h2>Client Registration</h2>
        <form action=" " method="POST" onsubmit="return validateForm()">
            <!-- Personal Information Section -->
            <fieldset class="fieldset-green">
                <legend>Client Information</legend>
                <table>
                    <tr>
                        <td><label for="fullName">Full Name:</label></td>
                        <td>
                            <input type="text" id="fullName" name="fullName" placeholder="Write your full name" >
                    <span class="error-message"><?php echo $nameErr; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="email">Email:</label></td>
                        <td>
                            <input type="email" id="email" name="email" placeholder="Please write your email here" >
                    <span class="error-message"><?php echo $emailErr; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="address">Address:</label></td>
                        <td><input type="text" id="address" name="address" placeholder="Please write your address here" ></td>
                    </tr>
                    <tr>
                        <td><label for="NID">NID Number:</label></td>
                        <td><input type="text" id="NID" name="NID" placeholder="Enter your NID Number" ></td>
                    </tr>
                    <tr>
                        <td><label for="username">Username:</label></td>
                        <td><input type="text" id="username" name="username" placeholder="Write your username here"></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password:</label></td>
                        <td>
<input type="password" id="password" name="password" placeholder="Enter your password">
                    <span class="error-message"><?php echo $passwordErr; ?></span>

</td>

                    </tr>
                    <tr>
                        <td><label for="confirmPassword">Confirm Password:</label></td>
                        <td><input type="password" id="confirmPassword" name="confirmPassword" placeholder="Rewrite your password" ></td>
                    </tr>
                    <tr>
                        <td><label for="phone">Phone:</label></td>
                        <td>
                            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" >
                    <span class="error-message"><?php echo $phoneErr; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="birthdate">Birthdate:</label></td>
                        <td>
<input type="date" id="birthdate" name="birthdate" >
                    <span class="error-message"><?php echo $dobErr; ?></span>

</td>
                    </tr>
                </table>
            </fieldset>

            <!-- Preferences Section -->
            <fieldset class="fieldset-blue">
                <legend>Preferences</legend>
                <table>
                    <tr>
                        <td><label>Gender:</label></td>
                        <td>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label>
                            <input type="radio" id="prefer-not-to-say" name="gender" value="prefer-not-to-say">
                            <label for="prefer-not-to-say">Prefer not to say</label>
                    <span class="error-message"><?php echo $genderErr; ?></span>

                        </td>
                    </tr>
                    <tr>
                        <td><label>Do you require parking?</label></td>
                        <td>
                            <input type="radio" id="Yes" name="parking" value="Yes">
                            <label for="Yes">Yes</label>
                            <input type="radio" id="No" name="parking" value="No">
                            <label for="No">No</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="food">Any dietary restrictions:</label></td>
                        <td>
                            <select id="food" name="food">
                                <option value="None">None</option>
                                <option value="Vegetarian">Vegetarian</option>
                                <option value="Gluten allergy">Gluten allergy</option>
                                <option value="Lactose intolerance">Lactose intolerance</option>
                                <option value="shellfish allergy">Shellfish allergy</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </fieldset>

            <!-- Payment & Additional Info Section -->
            <fieldset class="fieldset-orange">
                <legend>Payment & Additional Information</legend>
                <table>
                    <tr>
                        <td colspan="2">
                            <fieldset class="fieldset-purple">
                                <legend>Payment & Billing</legend>
                                <table>
                                    <tr>
                                        <td><label for="paymentMethod">Preferred Payment Method:</label></td>
                                        <td>
                                            <select id="paymentMethod" name="paymentMethod" >
                                                <option value="bankTransfer">Bank Transfer</option>
                                                <option value="paypal">PayPal</option>
                                                <option value="creditCard">Credit Card</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="bankDetails">Bank Account Details (if applicable):</label></td>
                                        <td><input type="text" id="bankDetails" name="bankDetails"></td>
                                    </tr>
                                </table>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="eventDetails">Any additional details about the event?</label></td>
                        <td><textarea id="eventDetails" name="eventDetails" rows="3" cols="50" placeholder="Enter any extra information..."></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="checkbox" id="terms" name="terms" >
                            <label for="terms">I agree to the <a href="#">Terms and Conditions</a></label><br>
                            <input type="checkbox" id="privacy" name="privacy" >
                            <label for="privacy">I agree to the <a href="#">Privacy Policy</a></label>
                        </td>
                    </tr>

                    <!-- Reset and Submit Buttons -->
                    <tr>
                        <td colspan="2" class="button-container">
                            <input type="reset" value="Reset" class="form-button">
                            <input type="submit" value="Submit" class="form-button">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
    <script src="validation.js"></script>
</body>
</html>