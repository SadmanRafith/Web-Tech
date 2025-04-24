<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer Registration Form</title>
    <!-- Link to External CSS -->
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&display=swap" rel="stylesheet">

</head>
<body>
<h1 class="sticky-header">Organizer Registration</h1>
    <form id="registrationForm" action="action.php" method="post" onsubmit="return validateForm()">
        <!-- 1. Basic Info -->
        <fieldset id="basicInfo">
            <legend>Basic Information</legend>
            <table>
                <tr>
                    <td><label for="fullName">Full Name:</label></td>
                    <td>
                        <input type="text" id="fullName" name="fullname">
                        <div id="nameError" class="error-message" ></div>
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Email Address:</label></td>
                    <td>
                        <input type="email" id="email" name="email">
                        <div id="emailError" class="error-message"></div>
                    </td>
                </tr>
                <tr>
                    <td><label for="phone">Phone Number:</label></td>
                    <td>
                        <input type="tel" id="phone" name="phone">
                        <div id="phoneError" class="error-message"></div>
                    </td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password"></td>    
                </tr>
                <tr>
                    <td><label for="dob">Date of Birth:</label></td>
                    <td><input type="date" id="dob" name="dob"></td>
                </tr>
                <tr>
                    <td><label>Gender:</label></td>
                    <td>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label><br>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label><br>
                        <input type="radio" id="other" name="gender" value="other">
                        <label for="other">Other</label>
                        <div id="genderError" class="error-message"></div>

                    </td>

                </tr>
            </table>
        </fieldset>

        <!-- 2. Professional Details -->
        <fieldset id="professionalDetails">
            <legend>Professional Details</legend>
            <table>
                <tr>
                    <td><label for="orgName">Organization Name:</label></td>
                    <td><input type="text" id="orgName" name="orgName"></td>
                </tr>
                <tr>
                    <td><label for="orgType">Organization Type:</label></td>
                    <td>
                        <select id="orgType" name="orgType">
                            <option value="">Select</option>
                            <option value="company">Company</option>
                            <option value="nonProfit">Non-Profit</option>
                            <option value="educational">Educational Institution</option>
                            <option value="government">Government</option>
                            <option value="other">Other</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="jobTitle">Job Title/Role:</label></td>
                    <td><input type="text" id="jobTitle" name="jobTitle"></td>
                </tr>
                <tr>
                    <td><label for="orgWebsite">Organization Website (optional):</label></td>
                    <td><input type="url" id="orgWebsite" name="orgWebsite"></td>
                </tr>
            </table>
        </fieldset>

        <!-- 3. Contact Info -->
        <fieldset id="contactInfo">
            <legend>Contact Information</legend>
            <table>
                <tr>
                    <td><label for="address">Address:</label></td>
                    <td><input type="text" id="address" name="address"></td>
                </tr>
                <tr>
                    <td><label for="country">Country/Region:</label></td>
                    <td><input type="text" id="country" name="country"></td>
                </tr>
            </table>
        </fieldset>

        <!-- 4. Payment & Billing -->
        <fieldset id="paymentBilling">
            <legend>Payment & Billing</legend>
            <table>
                <tr>
                    <td><label for="paymentMethod">Preferred Payment Method:</label></td>
                    <td>
                        <select id="paymentMethod" name="paymentMethod">
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
                <tr>
                    <td><label for="taxID">Tax ID (if applicable):</label></td>
                    <td><input type="text" id="taxID" name="taxID"></td>
                </tr>
            </table>
        </fieldset>

        <!-- 5. Agreements -->
        <fieldset id="agreements">
            <legend>Agreements</legend>
            <table>
                <tr>
                    <td>
                        <input type="checkbox" id="terms" name="terms" value="ok">
                        <label for="terms">I agree to the Terms & Conditions</label>

                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" id="privacy" name="privacy" value="ok">
                        <label for="privacy">I agree to the Privacy Policy</label>
                        <div id="termError" class="error-message"></div>

                    </td>
                </tr>

            </table>
        </fieldset>

        <!-- Submit Button -->
        <input type="submit" value="Register">
    </form>

    <script src="scripts.js"></script>
</body>
</html>
