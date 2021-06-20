<!DOCTYPE html>
<html lang="en">
<head>
    <title>BY MUSICLY</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main>
    <header>
        <img src="assets/image/bymusicly.jpg" alt="IMG" id="gam">
        <h1 class="jumbotron">  </h1>
    </header>
    <nav>
        <ul>
            <li>
                <a href="index_admin2.php?page=artist">ARTIST</a> 
            </li>
            <li>
                <a href="index_admin2.php?page=album">ALBUM</a>
            </li>
            
            <li>
                <a href="index_admin2.php?page=played">PLAYED</a>
            </li>
            
            <li>
                <a href="index_admin2.php?page=track">TRACK</a>
            </li>
            
            <li>
                <a href="index_admin2.php?page=kembali">KEMBALI</a>
            </li>
            
            <li>
                <a href="index_admin2.php?page=logout">LOG OUT</a>
            </li>
            <li>
                <a href="index_admin2.php?page=edit.php"></a>
            </li>     
        </ul>
    </nav>
    <section>
    <?php  
    if (isset($_GET['page'])) {
            include $_GET['page'] . ".php";
        } else {
            include "main.php ";
        }
        ?>
    </section>
    <footer>
        Copyright &copy; Nikmat Syahputra Rambe (0702183169) 2021
    </footer>
    </main>
</body>
</html>