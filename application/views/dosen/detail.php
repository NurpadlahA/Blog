<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dosen</title>
</head>
<body>
    <div class="col-md-12">
    <h3>Detail Dosen</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dnn->id ?></td>
                <td><?php echo $dnn->nama ?></td>
                <td><?php echo $dnn->gender?></td>
                <td><?php echo $dnn->tmp_lahir?></td>
                <td><?php echo $dnn->tgl_lahir?></td>
                <td><?php echo $dnn->nidn ?></td>
                <td><?php echo $dnn->pendidikan ?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md-5 mb-3" >
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?=base_url()?>uploads/photos/<?=$dnn->id?>.jpg" alt="ini foto" width="300" />
                    <div class="mt-4">
                        <h4><?=$dnn->nama?></h4>
                        <p>Foto Dosen</p> 
                        <br/>
                        <a href="https://www.instagram.com/n_padlah/" target="_blank">
                            <button class="btn btn-outline-info">Instagram</button>
                        </a>
                        <?php echo form_open_multipart('dosen/upload');?>
                        <input type="file" name="foto" size="300"/>
                        <input type="hidden" name="iddosen" value="<?=$dnn->id?>"/>
                        <br/><br/>
                        <input type="submit" value="upload Foto" class="btn btn-primary" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>