<?php
    session_start();
    if(isset($_POST['editProfile'])){
        include('../db.php');
        
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $job = $_POST['job'];
        $phonenum = $_POST['phonenum'];
    
        $query = mysqli_query($con,
        "UPDATE users SET name = '$name', 
        email ='$email', 
        phonenum ='$phonenum',
        job = '$job' WHERE id = '$id'") or die(mysqli_eror($con));

        if($query){

                $changeData = mysqli_query($con, "SELECT * FROM users WHERE id = '$id'") or
                die(mysqli_error($con));

                $user = mysqli_fetch_assoc($changeData);
                $_SESSION['user'] = $user;

            echo
                '<script>
                alert("Update Success"); window.location = "../page/profilePage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Update Failed"); window.location = "../page/dashboardPage.php"
                </script>';
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>