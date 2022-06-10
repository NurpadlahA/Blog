<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
<body>
<h4 style="text-align: center;" >Dosen</h4>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $nomor = 1;
            foreach ($dosen as $dsn){
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $dsn->nama?></td>
                <td><?php echo $dsn->gender?></td>
                <td><?php echo $dsn->tmp_lahir?></td>
                <td><?php echo $dsn->tgl_lahir?></td>
                <td><?php echo $dsn->nidn?></td>
                <td><?php echo $dsn->pendidikan ?></td>
            </tr>

            <?php 
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>