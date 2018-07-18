<?php 

if (isset($_POST['submit'])) {
    require "../config.php";

    try {
        $connection = new PDO($dsn, $username, $password, $options);
        // insert new user code will go here

        $new_user = array(
            "firstname"     => $_POST['firstname'],
            "lastname"      => $_POST['lastname'],
            "email"         => $_POST['email'],
            "age"           => $_POST['age'],
            "location"      => $_POST['location']
        );

        // The implode function is used to join elements of an array with a string
        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "users",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user))
        );

        $statement = $connection->prepare($sql);
        $statement->execute($new_user);

    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }


}

?>

<?php include "templates/header.php"; ?>

<!-- If a $_POST was submitted and if a $statement was successful, print a success message that includes the first name of the successfully added user -->
<?php if (isset($_POST['submit']) && $statement) { ?>
<blockquote><?php echo escape($_POST['firstname']); ?> successfully added.</blockquote>
<?php } ?>

<form method="post">
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