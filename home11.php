<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer Registration Form</title>
</head>
<body>
    <h1>Organizer Registration</h1>
    <form action="action.php" method="post">
        <!-- 1. Basic Info -->
        <fieldset>
            <legend>Basic Information</legend>
            <table>
                <tr>
                    <td><label for="fullName">Full Name:</label></td>
                    <td><input type="text" id="fullName" name="fullname" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email Address:</label></td>
                    <td><input type="email" id="email" name="email" required></td>
                </tr>
                <tr>
                    <td><label for="phone">Phone Number:</label></td>
                    <td><input type="tel" id="phone" name="phone" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password" required></td>
                </tr>
                <tr>
                    <td><label for="dob">Date of Birth:</label></td>
                    <td><input type="date" id="dob" name="dob" required></td>
                </tr>
                <tr>
                    <td><label>Gender:</label></td>
                    <td>
                        <input type="radio" id="male" name="gender" value="male" required>
                        <label for="male">Male</label><br>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label><br>
                        <input type="radio" id="other" name="gender" value="other">
                        <label for="other">Other</label>
                    </td>
                </tr>
            </table>
        </fieldset>

        <!-- 2. Professional Details -->
        <fieldset>
            <legend>Professional Details</legend>
            <table>
                <tr>
                    <td><label for="orgName">Organization Name:</label></td>
                    <td><input type="text" id="orgName" name="orgName" required></td>
                </tr>
                <tr>
                    <td><label for="orgType">Organization Type:</label></td>
                    <td>
                        <select id="orgType" name="orgType" required>
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
                    <td><input type="text" id="jobTitle" name="jobTitle" required></td>
                </tr>
                <tr>
                    <td><label for="orgWebsite">Organization Website (optional):</label></td>
                    <td><input type="url" id="orgWebsite" name="orgWebsite"></td>
                </tr>
            </table>
        </fieldset>

        <!-- 3. Contact Info -->
        <fieldset>
            <legend>Contact Information</legend>
            <table>
                <tr>
                    <td><label for="address">Address:</label></td>
                    <td><input type="text" id="address" name="address" required></td>
                </tr>
                <tr>
                    <td><label for="country">Country/Region:</label></td>
                    <td><input type="text" id="country" name="country" required></td>
                </tr>
            </table>
        </fieldset>

        <!-- 4. Payment & Billing -->
        <fieldset>
            <legend>Payment & Billing</legend>
            <table>
                <tr>
                    <td><label for="paymentMethod">Preferred Payment Method:</label></td>
                    <td>
                        <select id="paymentMethod" name="paymentMethod" required>
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
        <fieldset>
            <legend>Agreements</legend>
            <table>
                <tr>
                    <td>
                        <input type="checkbox" id="terms" name="terms" value="ok" required>
                        <label for="terms">I agree to the Terms & Conditions</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" id="privacy" name="privacy" value="ok" required>
                        <label for="privacy">I agree to the Privacy Policy</label>
                    </td>
                </tr>
            </table>
        </fieldset>

        <!-- Submit Button -->
        <input type="submit" value="Register">
    </form>
</body>
</html>
