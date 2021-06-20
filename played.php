<?php
include "koneksi.php";
$sql = "SELECT * FROM played";
$stmt = $koneksi->prepare($sql);
$stmt->execute();
?>
  <h3> DAFTAR PLAYED </h3>
  <table>
      <tr>
          <th>ID ARTIST</th>
          <th>ID ALBUM</th>
          <th>ID TRACK </th>
          <th>PLAYED</th>
        </tr>

        <?php while ($row = $stmt->fetch()) { ?>
        
        <tr>
            <td><?php echo $row['artist_id'] ?></td>
            <td><?php echo $row['album_id'] ?></td>
            <td><?php echo $row['track_id'] ?></td>
            <td><?php echo $row['played'] ?></td>
            <td>
            <a href="index.php?delete=<?php echo $row['artist_id'];?>">delete</a>
            </td>
        </tr>

        <?php } ?>
     </table>