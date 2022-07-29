<!-- espacio del alto de appbar -->
<div class="mui--appbar-height"></div>
<!-- <div class="mui--appbar-height"></div> -->

<!-- FORM -->
<div class="container">
    <!-- <div id="content-wrapper"> -->
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">

                    <div class="mui-container-fluid">
                        <br>
                        <form role="mui-form" method="post" action="./?action=adduser" enctype="multipart/form-data">
                            <legend>Nuevo usuario</legend>
                        
                            <!-- <div class="form-group">
                                <label>Imagen (480x480)</label>
                                <input type="file" name="image">
                            </div> -->

                            <div class="mui-textfield mui-textfield--float-label">
                                <input type="text" name="name">
                                <label>Nombre</label>
                            </div>
                            <div class="mui-textfield mui-textfield--float-label">
                                <input type="text" name="lastname">
                                <label>Apellidos</label>
                            </div>
                            <div class="mui-textfield mui-textfield--float-label">
                                <input type="text" name="username" required>
                                <label>Nombre de usuario</label>
                            </div>
                            <div class="mui-textfield mui-textfield--float-label">
                                <input type="text" name="email">
                                <label>Email</label>
                            </div>
                            <div class="mui-textfield mui-textfield--float-label">
                                <input type="password" name="password" required>
                                <label>Password</label>
                            </div>
                            <div class="mui-textfield mui-textfield--float-label">

                            <!-- Ver aviso -->
                            <!-- <p class='alert alert-warning'>File not found <i></i></p> -->
                            
                                <?php
                                    $cats = KindData::getAll();
                                    // View::Error("<p class='alert alert-warning'>File not found <i>".$sb_src."</i></p>");
                                    
                                ?>
                                <?php if(count($cats)>0):?>
                                    <select name="kind_id" class="form-control" required>
                                        <option value="">TIPO</option>
                                        <?php foreach($cats as $cat):?>
                                        <option value="<?=$cat->id;?>"><?=$cat->name;?></option>
                                        <?php endforeach;?>
                                    </select>
                                <?php endif;?>
                                <!-- <label>Tipo</label> -->
                            </div>
                            <button type="submit" class="mui-btn mui-btn--raised mui-btn--primary">Agregar</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->
</div>
<br>
<br>
        
