<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Akun Read</h2>
        <table class="table">
	    <tr><td>Id Pegawai</td><td><?php echo $id_pegawai; ?></td></tr>
	    <tr><td>Password</td><td><?php echo $password; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('akun') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>