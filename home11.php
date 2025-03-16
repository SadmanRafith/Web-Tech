<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Registration Form</title>
</head>
<body>
    <h2><u>Client Registration</u></h2>
    <form action="action.php" method="POST">
        <fieldset>
            <legend><u>Client Information</u></legend>
            <table>
                <!-- First Name -->
                <tr>
                    <td><label for="fname">First Name:</label></td>
                    <td><input type="text" id="fname" name="fname" placeholder="Write your First Name" maxlength="15" required></td>
                </tr>

                <!-- Last Name -->
                <tr>
                    <td><label for="lname">Last Name:</label></td>
                    <td><input type="text" id="lname" name="lname" placeholder="Write your Last Name" maxlength="15" required></td>
                </tr>

                <!-- Email -->
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" id="email" name="email" placeholder="Please write your email here" required></td>
                </tr>

                <!-- Address -->
                <tr>
                    <td><label for="address">Address:</label></td>
                    <td><input type="text" id="address" name="address" placeholder="Please write your address here" required></td>
                </tr>

                <!-- NID Number -->
                <tr>
                    <td><label for="NID">NID Number:</label></td>
                    <td><input type="text" id="NID" name="NID" placeholder="Enter your NID Number" required></td>
                </tr>

                <!-- Username -->
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" id="username" name="username" placeholder="Write your username here"></td>
                </tr>

                <!-- Password -->
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password" placeholder="Enter your password" required></td>
                </tr>

                <!-- Confirm Password -->
                <tr>
                    <td><label for="confirmPassword">Confirm Password:</label></td>
                    <td><input type="password" id="confirmPassword" name="confirmPassword" placeholder="Rewrite your password" required></td>
                </tr>

                <!-- Phone -->
                <tr>
                    <td><label for="phone">Phone:</label></td>
                    <td><input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required></td>
                </tr>

                <!-- Birthdate -->
                <tr>
                    <td><label for="birthdate">Birthdate:</label></td>
                    <td> <input type="date" id="birthdate" name="birthdate" required></td>
                </tr>

                <!-- Gender -->
                <tr>
                    <td><label>Gender:</label></td>
                    <td>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label>
                        <input type="radio" id="prefer-not-to-say" name="gender" value="prefer-not-to-say">
                        <label for="prefer-not-to-say">Prefer not to say</label>
                    </td>
                </tr>

                <!-- Parking Requirement -->
                <tr>
                    <td><label>Do you require parking?</label></td>
                    <td>
                        <input type="radio" id="Yes" name="parking" value="Yes">
                        <label for="Yes">Yes</label>
                        <input type="radio" id="No" name="parking" value="No">
                        <label for="No">No</label>
                    </td>
                </tr>

                <!-- Dietary Restrictions -->
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

                <!-- Payment & Billing -->
                <tr>
                    <td colspan="2">
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
                                    <td> <input type="text" id="bankDetails" name="bankDetails"></td>
                                </tr>
                            </table>
                        </fieldset>
                    </td>
                </tr>

                <!-- Additional Event Details -->
                <tr>
                    <td><label for="eventDetails">Any additional details about the event?</label></td>
                    <td><textarea id="eventDetails" name="eventDetails" rows="3" cols="50" placeholder="Enter any extra information..."></textarea></td>
                </tr>

                <!-- Terms and Conditions -->
                <tr>
                    <td colspan="2">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">I agree to the <a href="#">Terms and Conditions</a></label>
                    </td>
                </tr>

                <!-- Reset and Submit Buttons -->
                <tr>
                    <td><input type="reset" value="Reset"></td>
                    <td><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
