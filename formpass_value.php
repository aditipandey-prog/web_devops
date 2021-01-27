<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
    <p>Please fill this form.</p>
    <form action="form_display_value.php" method="post">
        <p>
            <label for="iname">Name*:</label>
            <input type="text" name="name" id="iname" required="">
        </p>
        <p>
            <label for="iemail">Email*:</label>
            <input type="text" name="email" id="iemail" required="">
        </p>
        <p>
            <label for="icontact">Contact*:</label>
            <input type="text" name="contact" id="icontact" required="">
        </p>
        <p>
            <label for="icity">City*:<sup>*</sup></label>
            <input type="text" name="city" id="icity" required="">
        </p>
        <p>
        <label for="icourse">Course*:</label>
            <input type="text" name="course" id="icourse" required="">
        </p>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
    
</body>
</html>