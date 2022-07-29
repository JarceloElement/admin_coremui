
<script src="js/jquery-3.1.1.min.js"></script>

<script language="javascript">

// $(document).ready(function(){
// 	// NOTIFICACION
// 	// if ('<!?php echo $_GET['swal']; ?>' != ""){
// 		Swal.fire({
// 		// position: 'top-center',
// 		icon: 'success',
// 		title: 'Hola',
// 		showConfirmButton: true,
// 		// timer: 2500
// 		})
// 	// };
// });

</script>


<!-- <ol class="breadcrumb">
    <li class="breadcrumb-item">Usuarios</li> -->

    <!-- boton -->
    <!-- <div class="col-md-2">
        <a href="./?view=newuser" class="mui-btn mui-btn--raised mui-btn--primary">Agregar</a><br><br>
    </div> -->
<!-- </ol> -->





<section class="container-fluid">
    <?php
    $data["posts"]=UserData::getAll();
    ?>

<br>


    <div class="row">
        
        <div class="col-md-12">
        <!-- <div class="mui-container-fluid"> -->

        
            <!-- <div class="col-md-12">
            
                <a href="./?view=newuser" class="mui-btn mui-btn--raised mui-btn--primary">Agregar</a><br><br>
            </div> -->

            <div class="card">
            <br>

            <div class="col-md-12">
                <a href="./?view=newuser" class="mui-btn mui-btn--raised mui-btn--primary">Agregar usuario</a>
            </div>

            
            <div class="card-body">
            <!-- <legend>Usuarios</legend> -->

                <div class="card-content table-responsive">

                    <table class="table datatable table-bordered table-hover table-striped">
                    <!-- <table class="table table-bordered table-hover"> -->

                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Nombre de usuario</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data["posts"] as $post):?>
                                <tr>
                                    <td><?=$post->name;?></td>
                                    <td><?=$post->username;?></td>
                                    <td><?=$post->email;?></td>
                                    <td style="width:170px;">
                                    <a href="./?view=edituser&id=<?=$post->id;?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                                    <a href="./?action=deluser&id=<?=$post->id;?>" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



<!-- /.row -->
</section>