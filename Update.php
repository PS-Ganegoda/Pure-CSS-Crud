<?php


include('dbconnection.php');
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];

   

    $query = mysqli_query($con, "UPDATE crud2Operation SET Name = '$name', Email = '$email', Address = '$address' WHERE ID = $id");

}
if ($query) {
    echo "<script>alert('Successfully Updated')</script>";
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
    <title>Update User</title>
 
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
    <h3>Update</h3>
    
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $row['ID'];?>">              
                <div >
                    <input type="text"value="<?php echo $row['Name']?>" name="name" placeholder="enter the name" />

                </div>

                <div >
                    <input type="text" value="<?php echo $row['Email']?>" name="email" placeholder="enter the email" />

                </div>

                <div >
                    <input type="text" value="<?php echo $row['Address']?>" name="address" placeholder="enter the address" />

                </div>
               
                 <button  name= "update" >Update</button>

            </form>
        </div>
</body>
</html>


