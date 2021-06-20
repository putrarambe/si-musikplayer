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
                <a href="index.php"class="active">Home</a> 
            </li>
            <li>
            <a href="index.php?page=login">Login</a> 
            </li> 
            <li>
                <a href="index.php?page=edit.php"></a>
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