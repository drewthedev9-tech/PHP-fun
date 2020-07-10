<?php

// isset checks if the variable has data in in it this case teh submit button.
// if(isset($_GET['submit'])){
//   // getting the value from globals $_GET[] of what the user inputs based on the name of the
//   // input elements.
//   echo $_GET['email'];
//   echo $_GET['title'];
//   echo $_GET['ingredients'];

// }

if(isset($_POST['submit'])){
  echo htmlspecialchars($_POST['title']);
  echo htmlspecialchars($_POST['ingredients']);
  // form validation////
  // check email
  if(empty($_POST['email'])){
    echo " am email is required </br>";
  } else{

   // getting the value from globals $POST[] of what the user inputs based on the name of the
  // input elements.
  // htmlspecial chars prtect against xss injections.
  echo htmlspecialchars($_POST['email']);
  }
//  check title
  if(empty($_POST['title'])){
    echo " a title is required </br>";
  } else{ // check title
    echo htmlspecialchars($_POST['title']);
  }
 
 // check ingredient
  if(empty($_POST['ingredients'])){
    echo " at east one ingredient is required </br>";
  } else{
  echo htmlspecialchars($_POST['ingredients']);
  }


}

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header/header.php') ?>

<section class="container grey-text">
    <h4 class="center">
    Add pizza
    </h4>
    <form action="" class="white" action="add.php" method="POST">
    <label>your email:</label>
    <input type="text" name="email">
    <label>Pizza Title:</label>
    <input type="text" name="title">
    <label>Ingredients: (comma seperated)</label>
    <input type="text" name="ingredients">
    <div class="center">
      <input type="submit" name="submit" value="submit" class="btn brand" z-depth=0> 
    </div>
    </form>
</section>

<?php include('templates/header/footer.php') ?>
    
</body>
</html>