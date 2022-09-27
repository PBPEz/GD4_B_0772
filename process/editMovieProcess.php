<?php
    session_start();
    if(isset($_POST['editMovie'])){
        include('../db.php');
        
        $id = $_POST['id'];
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $realese = $_POST['realese'];
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];

        $query = mysqli_query($con,
        "UPDATE movies SET name = '$name', 
        genre ='$genre', 
        realese ='$realese',
        episode = '$episode',
        season = '$season',
        synopsis = '$synopsis' WHERE id = '$id'") or die(mysqli_eror($con));

        if($query){
            $changeMovie = mysqli_query($con, "SELECT * FROM movies WHERE id = '$id'") or
            die(mysqli_error($con));

            $movieUpdate = mysqli_fetch_assoc($changeMovie);
            $_SESSION['movie'] = $movieUpdate;

            echo
                '<script>
                alert("Update Success"); window.location = "../page/updateMoviePage.php"
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