<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation - PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <h1 class="text-center">PHP Form Validation Example</h1>
    <form class="align-middle col-12 mt-5" method="POST" action="form_validation.php">
        <div class="form-group row">
            <label for="name" class="col-4 col-form-label text-end">Name</label> 
            <div class="col-4">
                <input id="name" name="name" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label text-end">E-mail</label> 
            <div class="col-4">
                <input id="email" name="email" type="email" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="website" class="col-4 col-form-label text-end">Website</label> 
            <div class="col-4">
                <input id="website" name="website" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="textarea" class="col-4 col-form-label text-end">Comment</label> 
            <div class="col-4">
                <textarea id="textarea" name="textarea" cols="40" rows="5" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4 text-end">Gender</label> 
            <div class="col-4">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Female" required="required"> 
                    <label for="gender_0" class="custom-control-label">Female</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Male" required="required"> 
                    <label for="gender_1" class="custom-control-label">Male</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_4" type="radio" class="custom-control-input" value="Other" required="required"> 
                    <label for="gender_4" class="custom-control-label">Other</label>
                </div>
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-4">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
<?php
// define variables and set to empty values
// $name = $email = $gender = $comment = $website = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = test_input($_POST["name"]);
//     $email = test_input($_POST["email"]);
//     $website = test_input($_POST["website"]);
//     $comment = test_input($_POST["comment"]);
//     $gender = test_input($_POST["gender"]);
// }

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email= $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["website"])) {
        $nwebsiteErr = "";
    } else {
        $website = test_input($_POST["website"]);
    }

    if (empty($_POST["comment"])) {
        $commentErr = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["name"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}
?>
</body>
</html>