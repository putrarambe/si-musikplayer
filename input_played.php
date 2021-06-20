<!DOCTYPE html>
<html>
    <head>
        <title>INPUT PLAYED</title>
    </head>
    <body>
        <form method="post" action="index_admin.php">
            <table>
                <tr>
                    <td>ID ARTIST</td>
                    <td><input type="text" name="artist_id"></td>
                </tr>
                
                <tr>
                    <td>ID ALBUM</td>
                    <td><input type="date" name="album_id"></td>
                </tr>
                
                <tr>
                    <td>ID TRACK</td>
                    <td><input type="text" name="track_id"></td>
                </tr>
                
                <tr>
                    <td>PLAYED</td>
                    <td><input type="text" name="played"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>