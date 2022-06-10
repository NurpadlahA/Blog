<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matakuliah</title>
<body>
<h4 style="text-align: center;" >Matakuliah</h4>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $nomor = 1;
            foreach ($matakuliah as $mk){
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $mk->nama ?></td>
                <td><?php echo $mk->sks?></td>
                <td><?php echo $mk->kode ?></td>
            </tr>

            <?php 
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>