<!DCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Records</title>
 
    <style>
        /* Add your custom CSS styles here */
        body {
            background-color: black;
            color: #fff;
            text-align: center;
            font-family: Lucida Sans;
        }
        table {
        width: 80%;
        border-collapse: collapse;
        border: 1px solid #fff;
    }

    th, td {
        padding: 10px;
        border: 1px solid #fff;
    }

    th {
        background-color: #007bff;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #333;
    }

    tr:nth-child(odd) {
        background-color: #444;
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
<!--<a href="Create.php?id=<?php echo $r['ID']?>" class="btn btn-sm btn-info" ><button name=create>Add</a></button><br/>-->


                <div >
                    <table class ="table">
                        <thead>
                          <th>Name</th> 
                          <th>Email</th>
                          <th>Address</th>
                           <th>Action</th>
                        </thead>
                        <tbody>
                            <?php
                            include('dbconnection.php');
                             $fetch = mysqli_query($con,"select *from crud2Operation");
                             $row = mysqli_num_rows($fetch);
                             if($row>0){
                                while($r=mysqli_fetch_array($fetch)){
                                  ?> 
                                  <tr>
                            <td><?php echo $r['Name']?></td>
                            <td><?php echo $r['Email']?></td>
                            <td><?php echo $r['Address']?></td>
                            <td><a href="Update.php?id=<?php echo $r['ID']?>" class="btn btn-sm btn-info" ><button name=update>Update</a></button>
                            <a href="Delete.php?delid=<?php echo $r['ID']?>" class="btn btn-sm btn-danger "><button name=delete>Delete</a></button></td>
                           </tr>
                           <?php

                                }
                             }
                           ?>

                        </tbody>

                    </table>
        </div>
</body>
</html>
