<!DOCTYPE html>
<html lang="en">
<head>
    <title>MUSIK PLAYER</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main>
    <header>
        <img src="assets/image/musikplayer1.png" alt="img" id="gam">
        <h1 class="jumbotron">  </h1>
    </header>
    <nav>
        <ul>
            <li>
                <a href="index_admin.php"class="active">INPUT</a> 
            </li>
            
            <li>
                <a href="index_admin.php?page=input_artist">ARTIST</a> 
            </li>
            <li>
                <a href="index_admin.php?page=input_album">ALBUM</a>
            </li>
            
            <li>
                <a href="index_admin.php?page=input_played">PLAYED</a>
            </li>
            
            <li>
                <a href="index_admin.php?page=input_track">TRACK</a>
            </li>
            
            <li>
                <a href="index_admin.php?page=data">CEK DATA</a>
            </li>
            <li>
                <a href="index_admin.php?page=edit.php"></a>
            </li>     
        </ul>
    </nav>
    <section>
    <?php  
    if (isset($_GET['page'])) {
            include $_GET['page'] . ".php";
        } else {
            include "main1.php ";
        }
        ?>
    </section>
    <footer>
        Copyright &copy; Nikmat Syahputra Rambe (0702183169) 2021
    </footer>
    </main>
</body>
</html>