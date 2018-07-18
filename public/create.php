<?php include "templates/header.php"; ?>

<form nethod="post">
    <label for="firstname">First Name</label>
    <!-- Both the name and id attributes are necessary. The id attribute is neccessary to associate the input to the label, the name attribute is how PHP identifies and utilizes the data of the input -->
    <input type="text" name="firstname" id="firstname">
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname">
    <label for="email">Email Address</label>
    <input type="text" name="email" id="email">
    <label for="age">Age</label>
    <input type="text" name="age" id="age">
    <label for="location">Location</label>
    <input type="text" name="location" id="location">
    <input type="submit" name="submit" value="Submit">
</form>
  
<?php include "templates/footer.php"; ?>