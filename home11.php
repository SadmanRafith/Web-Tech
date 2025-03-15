<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Registration form</title>
</head>
<body>
    <h2><u>Client Registration</u></h2>
    <form action="action.php" method="POST">
      <fieldset>
        <legend><u>Client Information</u></legend>
        
        <div>
          <fieldset>
          <legend>First name :</legend>
          <input type="text" id="fname" name="fname"placeholder="write your First name" maxlength="15" required >
          </fieldset>
        </div>
      
        <br />
        
        <div><fieldset>
          <legend>Last name : </legend>
          <input type="text" id="lname" name="lname"  placeholder="write your Last name" maxlength="15"  required >
        </fieldset>
        </div>
 
        <br />
        <div>
          <label for="email">Email : </label>
          <input type="email" id="email"name="email" placeholder="Please write your email here" required >
        </div>
        <br />
        <div>
            <label for="address">Address : </label>
          <input type="address" id="address" name="address" placeholder="Please write your address here" required >
        </div><br>
        <div>
            <label for="NID">NID Number :</label>
            <input type="NID" id="NID" name="NID" placeholder="Enter your NID Number"  required >
        </div><br>
        <div>
          <label for="username">Username : </label>
          <input type="username" id="username" name="username" placeholder="write your username here" >
        </div>
        <br />
        <div>
          <label for="password">Password : </label>
          <input type="password" id="password" name="password"placeholder="Enter your password" required >
        </div>
        <br />
        <div>
          <label for="password">Confirm password : </label>
          <input type="password" id="password" name="password" placeholder="rewrite your password" required >
        </div>
        <br />
        <div>
          <label for="phone">Phone :</label>
          <input type="phone" id="phone" name="phone" placeholder="Enter your phone num"  required >

        </div>
        <br />

        <div>
          <label for="birthdate">birthdate </label>
          <input type="date" id="birthdate" name="birthdate" required />
        </div>
        <br />
        <div>
          <label>Gender:</label>
          <input type="radio" id="male" name="gender" value="male" />
          <label for="male">Male</label>

          <input type="radio" id="female" name="gender" value="female" />
          <label for="female">Female</label>

          <input
            type="radio"
            id="prefer-not-to-say"
            name="gender"
            value="prefer-not-to-say"
          />
          <label for="prefer-not-to-say">Prefer not to say</label>
        </div>
        <br />
        <div>
            <label>Do you require parking</label>
            <input type="radio" id="Yes" name="parking" value="Yes" />
            <label for="Yes">Yes</label>
  
            <input type="radio" id="No" name="parking" value="No" />
            <label for="No">No</label>
        </div><br>
       


              <div>
                <label for="food">any dietary restrictions:</label>
                <select id="food" name="food">
                  <option value="None">None</option>
                  <option value="Vegetarian">Vegetarian</option>
                  <option value="Gluten allergy">Gluten allergy</option>
                  <option value="Lactose intolerance
                  ">Lactose intolerance
                </option>
                  <option value="shellfish allergy">shellfish allergy</option>
                </select>
              </div><br>
              <div>
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
        
        </fieldset>
              </div>

       
      
        <div>
            <label for="eventDetails">Any additional details about the event?</label>
            <textarea id="eventDetails" name="eventDetails" rows="3" cols="50" placeholder="Enter any extra information..."></textarea>
        </div><br><br><br>


            <div>
                <input type="checkbox" id="terms" name="terms" required />
          <label for="terms">I agree to the <a href="#">Terms and Conditions</a></label>
              </div>
        

        <br />
        <div><input type="reset" value="reset"></div>
        <br />
        <div><input type="submit" value="submit"  > </div> 
      </fieldset>
    </form>
</body>
</html>