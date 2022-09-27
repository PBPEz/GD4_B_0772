<?php
    if(isset($_POST['addMovie'])){
        
        //koneksi dengan database
        include('../db.php');

        //tampung nilai dari form ke variabel
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $realese = $_POST['realese'];
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];

        $query = mysqli_query($con,
            "INSERT INTO movies(name, genre, realese, season, episode, synopsis)
                VALUES
                ('$name', '$genre', '$realese', '$season', '$episode', '$synopsis')")
                    or die(mysqli_error($con));

        if($query){
            echo
                '<script>
                alert("Adding Movie Success"); window.location = "../page/listMoviesPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Adding Movie Failed"); window.location = "../page/listMoviesPage.php"
                </script>';
        } 
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>