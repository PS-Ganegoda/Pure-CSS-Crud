<?php

include('dbconnection.php');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];

   /* $query = mysqli_query($con,"insert into crudeoperation(Name,Email,Address) values('$name','$email','$address')");

}
 if($query){
    echo"<script>alert('sucessfully')</script>";

 }
 else{
    echo"<script>alert('no add')</script>";
 }
*/
echo "Form submitted. ";
$query = mysqli_query($con, "insert into  crud2Operation (Name, Email, Address) values ('$name', '$email', '$address')");
}
if ($query) {
    echo "<script>alert('Successfully')</script>";
} else {
    echo "Error: " . mysqli_error($con); // Display the MySQL error
}


if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query=mysqli_query($con,"SELECT * FROM crud2Operation WHERE ID= '$id'");
    $row =mysqli_fetch_array($query);
}

?>


<!DCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Create user</title>
 
    <style>
        /* Add your custom CSS styles here */
        body {
            background-color: black;
            color: #fff;
            text-align: center;
            font-family: Lucida Sans;
        }

        form {
            margin-top: 7px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 1rem;
        }
    </style>
</head>

<body>
    <h3>please fill the form</h3>
    
            <form method="POST">
                <div >
                    <input type="text" name="name" placeholder="enter the name"/>

                </div>

                <div >
                    <input type="text" name="email" placeholder="enter the email"/>

                </div>

                <div >
                    <input type="text"name="address" placeholder="enter the address"/>

                </div>
                 <button  name= "submit" >Creat</button>

            </form>
        </div>
</body>
</html>
