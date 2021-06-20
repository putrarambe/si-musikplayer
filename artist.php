<?php
include "koneksi.php";
$sql = "SELECT * FROM artist";
$stmt = $koneksi->prepare($sql);
$stmt->execute();
?>
  <h3>DAFTAR ARTIST </h3>
  <table>
      <tr>
          <th>ID ARTIST</th>
          <th>NAMA ARTIST</th>
      </tr>

        <?php while ($row = $stmt->fetch()) { ?>
        
        <tr>
            <td><?php echo $row['artist_id'] ?></td>
            <td><?php echo $row['artist_name'] ?></td>
            <td>
            <a href="index.php?delete=<?php echo $row['artist_id'];?>">delete</a>
            </td>
        </tr>

        <?php } ?>
     </table>