<?php
/* Smarty version 3.1.32, created on 2018-08-13 18:42:04
  from '/var/www/templates/adminPubNew.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b71d0fcbd61e6_87255548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7128c7fb205703a3e66cedc82e8a99f43433803e' => 
    array (
      0 => '/var/www/templates/adminPubNew.tpl',
      1 => 1534110965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5b71d0fcbd61e6_87255548 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nueva Publicación</title>
        <link rel="icon" type="image/ico" href="img/pizza.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body class="bg grey lighten-3">
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <!--  Form  -->
        <section class="pt-5 mt-1 px-5 mx-5">
            <div class="container pt-5 my-2">
                <!--Row-->
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="card mx-xl-5 shadow white">
                            <!-- Card body -->
                            <div class="card-body">
                                <!--Form-->
                                <form enctype="multipart/form-data" method="POST" action="adminPubAdd.php">
                                    <!--Titulo pagina-->
                                    <h2 class="h1-responsive font-weight-bold text-left my-0">Nueva Publicación</h2>
                                    <hr>
                                    <!-- Titulo Publicacion -->
                                    <input type="text" id="titlePub" name="titlePub" class="form-control mb-4" placeholder="Título" required>
                                    <div class="row border rounded mx-1 py-2">
                                        <!--Tipo-->
                                        <label class="font-weight-light ml-3">Tipo</label>
                                        <select name="type" id="type" class="browser-default ml-3" required>
                                            <option value="" disabled selected>Seleccionar una opción</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value['tipo_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['nombreTipo'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>}
                                        </select>
                                    </div>
                                    <br>
                                    <div class="row border rounded mx-1 py-2">
                                        <!--Categoria-->
                                        <label class="font-weight-light ml-3">Categoría</label>
                                        <select name="cat" id="cat" class="browser-default ml-3" required>
                                            <option value="" disabled selected>Seleccionar una opción</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cats']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['categoria_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['nombreCat'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>}
                                        </select>
                                    </div>
                                    <br>
                                    <div class="row border rounded mx-1 py-2">
                                        <!--Input Foto-->
                                        <div class="col-4">
                                            <label for="pictureInput" class="font-weight-light">Foto de la publicación</label>
                                        </div>
                                        <div class="col-6">
                                            <input type="file" accept="image/*" name="pictureInput" id="pictureInput" required>
                                        </div>
                                    </div>
                                    <br>
                                    <!--Cuerpo de la publicacion-->
                                    <textarea type="text" id="bodyTest" name="bodyTest" class="md-textarea form-control" rows="10" placeholder="Cuerpo de la publicación" required></textarea>

                                    <div class="text-center py-4 mt-3">
                                        <a class="btn indigo darken-4 btn-sm m-0 nohover" href="adminPub.php">Cancelar</a>
                                        <button class="btn indigo darken-4 btn-sm m-0" type="submit">Publicar</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Card body -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </section>
        <!-- Form -->

        <!-- SCRIPTS -->
        <!-- JQuery -->
        <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
        <!-- Bootstrap tooltips -->
        <?php echo '<script'; ?>
 type="text/javascript" src="js/popper.min.js"><?php echo '</script'; ?>
>
        <!-- Bootstrap core JavaScript -->
        <?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <!-- MDB core JavaScript -->
        <?php echo '<script'; ?>
 type="text/javascript" src="js/mdb.min.js"><?php echo '</script'; ?>
>
        <!-- admin -->
        <?php echo '<script'; ?>
 type="text/javascript" src="js/admin.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
