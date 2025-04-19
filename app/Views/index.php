<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Server Side CI4</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
	  <div class="container">
	    <a class="navbar-brand" href="/">Server Side CI4</a>
	  </div>
	</nav>
	<div class="container">
		<div class="row mt-3 justify-content-center">
			<div class="col">
				<table class="table" id="example">
				  <thead>
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Nama Lengkap</th>
				      <th scope="col">Jenis Kelamin</th>
				      <th scope="col">Alamat</th>
				      <th scope="col">Jabatan</th>
				      <th scope="col">Tahun Masuk</th>
				    </tr>
				  </thead>
				</table>	
			</div>
		</div>
	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
	<script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
            let table = $('#example').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?= site_url('/pegawai/data_pegawai') ?>",
                    "type": "POST"
                },
                "columnDefs": [{
                    "targets": [],
                    "orderable": false,
                }]
            });
        });
		
	</script>
</body>
</html>