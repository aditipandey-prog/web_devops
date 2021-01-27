<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
    <style>
       table,tr,th,td{
            border: 1px dotted black;
             border-collapse: collapse;
        }
        th, td {
              padding: 5px;
               }
          th {
           text-align: center;
          }
    </style>
</head>
<body>
    <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <table>
    <tr>
     <th>Name </th>
     <th>Email</th>
     <th>Contact</th>
     <th>City</th>
     <th>Course</th>
    </tr>
    <tr>
     <td><?php echo $_POST["name"]?></td>
     <td><?php echo $_POST["email"]?></td>
     <td><?php echo $_POST["contact"]?></td>
     <td><?php echo $_POST["city"]?></td>
     <td><?php echo $_POST["course"]?></td>
    </tr>
    </table>
       
</body>
</html>