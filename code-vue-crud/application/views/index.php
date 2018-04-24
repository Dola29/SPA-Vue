<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Codeigniter & Vue </title>
        <link rel="stylesheet"   href="<?= base_url(); ?>/assets/css/bootstrap.css">
		<link rel="stylesheet"   href="<?= base_url(); ?>/assets/css/toastr.css">
       

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" 
        rel="stylesheet" type="text/css">

       
       
    </head>

	<body>

		<div class="container">

			<div id="crud" class="row">

				<div class="col-xs-12">
					<h1 class="page-header">CRUD Codeigniter y VueJs</h1>
			    </div>

				<div class="col-sm-12">
					<a href="#" class="btn btn-primary pull-right" data-toggle="modal" 
						data-target="#create">Nueva Tarea</a>

					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Tarea</th>
								<th colspan="2">
									&nbsp;
								</th>
							</tr>
						</thead>
						<tbody>
							<tr v-for="keep in keeps"> 
								<td width="10px">{{keep.id}}</td>
								<td>{{keep.keep}}</td>
								<td width="10px">
									<a href="#" class="btn btn-warning btn-sm"v-on:click.prevent="editKeep(keep)">Editar</a>
								</td>
								<td width="10px">
									<a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="deleteKeep(keep)">Eliminar</a>
								</td>
							</tr>
						</tbody>
					</table>

					<?php include('create.php');?>
					<?php include('edit.php');?>
				</div>

			</div>
		</div>



		<script src="<?= base_url(); ?>/assets/js/jquery.js"></script>
		<script src="<?= base_url(); ?>/assets/js/vue.js"></script>
		<script src="<?= base_url(); ?>/assets/js/vue-resource.js"></script>
		<script src="<?= base_url(); ?>/assets/js/bootstrap.js"></script>
		<script src="<?= base_url(); ?>/assets/js/toastr.js"></script>
		<script src="<?= base_url(); ?>/assets/js/axios.js"></script>
		<script src="<?= base_url(); ?>/assets/js/app.js"></script>
	</body>
</html>
