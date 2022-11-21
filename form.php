<?php
session_start();
$name = $email = $password = $image = "";
$name_error = $email_error = $password_error = $image_error = "";

//cleaning up the value of the inputs.
function cleanup(string $data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// upload file
function uplaodFile($file, $allowed_types = [], &$error_message = '')
{
    $target_dir = 'uploads/';
    $target_file = $target_dir . rand() . basename($file['name']);
    $file_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (count($allowed_types) < 1 || in_array($file_extension, $allowed_types)) {
        move_uploaded_file($file['tmp_name'], $target_file);
    } else {
        $error_message = "we only allow" . implode(',', $allowed_types);
    }


}


//checking if data is empty
function checkEmpty($data, &$error_str)
{
    if (empty($data)) {
        $error_str = "This input is reqiured";
    }
}



function displayError($error)
{
    echo "<br><span style='color: red; font-size: 12px'>$error</span>";
}

//Assign post data to variable after cleanup
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = cleanup($_POST['name']);
    $email = cleanup($_POST['email']);
    $password = cleanup($_POST['password']);



    //Check if name is empty
    checkEmpty($name, $name_error);
    //Check if email is empty
    checkEmpty($email, $email_error);
    //Check if password is empty
    checkEmpty($password, $password_error);

    // validating if its an email
    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Enter a";
    }
    //to check the length of the password
    if (!empty($password) && strlen($password) < 6) {
        $password_error = "Password cannot be less 6 characters";
    }

    // validating the file uploaded 
    if (isset($_FILES['image']['name'])) {
        uplaodFile($_FILES['image'], [' png',' jpg',' gif',' jpeg'], $image_error);
    } else {
        $image_error = "The image is required";
    }


    //checking if all errors are cleared and redirecting
    if (empty($password_error) && empty($email_error) && empty($name_error) && empty($image_error)) {

        


        //store the valid data in a session
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        //redirect to success.php
        header('location: success.php');
    }
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
        <label for="name">Name</label>
        <br>

        <input type="text" name="name" id="name" value=" <?php echo $name ?>">
        <?php echo isset($name_error) && !empty($name_error) ? displayError($name_error) : ''; ?>
        <br>
        <br>
        <label for="email">Email</label>
        <br>

        <input type="email" name="email" id="email" value=" <?php echo $email ?>">
        <?php echo isset($email_error) && !empty($email_error) ? displayError($email_error) : ''; ?>
        <br>
        <br>
        <label for="password">Password</label>
        <br>

        <input type="password" name="password" id="password">
        <?php echo isset($password_error) && !empty($password_error) ? displayError($password_error) : ''; ?>
        <br>
        <br>
        <label for="image">Uplaod Profile Pic</label>
        <br>
        <input type="file" name="image" id="image">
        <?php echo isset($image) && !empty($image_error) ? displayError($image_error) : ''; ?>
        <br>
        <br>
        <input type="submit" value="Register">
    </form>
</body>

</html>