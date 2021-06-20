<?php
include "koneksi.php";
$sql = "SELECT * FROM track";
$stmt = $koneksi->prepare($sql);
$stmt->execute();
?>
  <h3> DAFTAR TRACK </h3>
  <table>
      <tr>
          <th>ID TRACK</th>
          <th>NAMA TRACK</th>
          <th>ID ARTIST</th>
          <th>ID ALBUM</th>
          <th>TIME</th>
        </tr>

        <?php while ($row = $stmt->fetch()) { ?>
        
        <tr>
            <td><?php echo $row['artist_id'] ?></td>
            <td><?php echo $row['track_name'] ?></td>
            <td><?php echo $row['artist_id'] ?></td>
            <td><?php echo $row['album_id'] ?></td>
            <td><?php echo $row['time'] ?></td>
            <td>
            <a href="index.php?delete=<?php echo $row['artist_id'];?>">delete</a>
            </td>
        </tr>

        <?php } ?>
     </table>