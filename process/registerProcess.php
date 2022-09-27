<?php
    if(isset($_POST['email'])){
        
        //koneksi dengan database
        include('../db.php');

        //tampung nilai dari form ke variabel
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $phonenum = $_POST['phonenum'];
        $membership = $_POST['membership'];

        $phoneCek = mysqli_query($con, "SELECT * FROM users WHERE phonenum = '$phonenum'") or
        die(mysqli_error($con));

        $emailCek = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'") or
        die(mysqli_error($con));

        if(mysqli_num_rows($phoneCek)==0 && mysqli_num_rows($emailCek)==0){
            $query = mysqli_query($con,
            "INSERT INTO users(email, password, name, phonenum, membership)
                VALUES
                ('$email', '$password', '$name', '$phonenum', '$membership')")
                    or die(mysqli_error($con));
            
            echo
                '<script>
                alert("Register Success"); window.location = "../page/loginPage.php"
                </script>';
        }else{
            if(mysqli_num_rows($phoneCek)!=0){
                echo
                    '<script>
                    alert("Phone number already taken"); window.location = "../page/registerPage.php"
                    </script>';
            }else if(mysqli_num_rows($emailCek)!=0){
                echo
                    '<script>
                    alert("Email already taken"); window.location = "../page/registerPage.php"
                    </script>';
            }
            
        } 
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
    