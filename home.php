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
            <label for="fullName">Full Name:</label><br>
            <input type="text" id="fullName" name="fullname" required><br><br>

            <label for="email">Email Address:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="phone">Phone Number:</label><br>
            <input type="tel" id="phone" name="phone" required><br><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>

            <!-- Added Date of Birth -->
            <label for="dob">Date of Birth:</label><br>
            <input type="date" id="dob" name="dob" required><br><br>

            <!-- Added Gender -->
            <label>Gender:</label><br>
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br><br>
        </fieldset>

        <!-- 2. Professional Details -->
        <fieldset>
            <legend>Professional Details</legend>
            <label for="orgName">Organization Name:</label><br>
            <input type="text" id="orgName" name="orgName" required><br><br>

            <!-- Added Organization Type -->
            <label for="orgType">Organization Type:</label><br>
            <select id="orgType" name="orgType" required>
                <option value="">Select</option>
                <option value="company">Company</option>
                <option value="nonProfit">Non-Profit</option>
                <option value="educational">Educational Institution</option>
                <option value="government">Government</option>
                <option value="other">Other</option>
            </select><br><br>

            <label for="jobTitle">Job Title/Role:</label><br>
            <input type="text" id="jobTitle" name="jobTitle" required><br><br>

            <label for="orgWebsite">Organization Website (optional):</label><br>
            <input type="url" id="orgWebsite" name="orgWebsite"><br><br>
        </fieldset>

        <!-- 3. Contact Info -->
        <fieldset>
            <legend>Contact Information</legend>
            <label for="address">Address:</label><br>
            <input type="text" id="address" name="address" required><br><br>
            <label for="country">Country/Region:</label><br>
            <input type="text" id="country" name="country" required><br><br>
        </fieldset>

        <!-- 4. Payment & Billing -->
        <fieldset>
            <legend>Payment & Billing</legend>
            <label for="paymentMethod">Preferred Payment Method:</label><br>
            <select id="paymentMethod" name="paymentMethod" required>
                <option value="bankTransfer">Bank Transfer</option>
                <option value="paypal">PayPal</option>
                <option value="creditCard">Credit Card</option>
            </select><br><br>

            <label for="bankDetails">Bank Account Details (if applicable):</label><br>
            <input type="text" id="bankDetails" name="bankDetails"><br><br>

            <label for="taxID">Tax ID (if applicable):</label><br>
            <input type="text" id="taxID" name="taxID"><br><br>
        </fieldset>

        <!-- 5. Agreements -->
        <fieldset>
            <legend>Agreements</legend>
            <input type="checkbox" id="terms" name="terms"  value="ok" required>
            <label for="terms">I agree to the Terms & Conditions</label><br><br>

            <input type="checkbox" id="privacy" name="privacy" value="ok" required>
            <label for="privacy">I agree to the Privacy Policy</label><br><br>
        </fieldset>

        <!-- Submit Button -->
        <input type="submit" value="Register">
    </form>
</body>
</html>