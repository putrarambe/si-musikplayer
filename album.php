<?php
include "koneksi.php";
$sql = "SELECT * FROM 'album'";
$stmt = $koneksi->prepare($sql);
$stmt->execute();
?>
    <h3> Daftar Album </h3>
    <table>
        <tr>
          <th>ID ARTIST</th>
          <th>ID ALBUM</th>
          <th>NAMA ALBUM</th>
        </tr>

        <?php while ($row = $stmt->fetch()) { ?>
        
        <tr>
            <td><?php echo $row['artist_id'] ?></td>
            <td><?php echo $row['album_id'] ?></td>
            <td><?php echo $row['album_name'] ?></td>
            <td>
            <a href="index.php?delete=<?php echo $row['id_album'];?>">delete</a>
            </td>
        </tr>

        <?php } ?>
    </table>