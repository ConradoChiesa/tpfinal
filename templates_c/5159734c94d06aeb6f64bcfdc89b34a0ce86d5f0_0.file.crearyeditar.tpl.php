<?php
/* Smarty version 3.1.33, created on 2018-09-29 21:32:35
  from 'I:\Xampp\htdocs\pn\templates\crearyeditar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bafd353780974_45253759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5159734c94d06aeb6f64bcfdc89b34a0ce86d5f0' => 
    array (
      0 => 'I:\\Xampp\\htdocs\\pn\\templates\\crearyeditar.tpl',
      1 => 1538249444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bafd353780974_45253759 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Crear y Editar</h2>

 <div class="container">
      <h2>Crear personaje</h2>
      <form method="post" action="agregarPersonaje">
        <div class="form-group">
          <label for="nombreForm">Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm">
        </div>
        <div class="form-group">
          <label for="nacimientoForm">Nacimiento</label>
          <input type="text" class="form-control" id="nacimientoForm" name="nacimientoForm">
        </div>
         <div class="form-group">
          <label for="actividadForm">Actividad</label>
          <input type="text" class="form-control" id="actividadForm" name="actividadForm">
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Crear Personaje</button>
      </form>
    </div>
  
     <div class="container">
      <h2>Crear hecho</h2>
      <form method="post" action="agregarHecho">
        <div class="form-group">
          <select name="persoHechoForm" id="persoHechoForm">
            <option value=""></option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Personajes']->value, 'perso');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['perso']->value) {
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['perso']->value['id_personaje'];?>
"><?php echo $_smarty_tpl->tpl_vars['perso']->value['nombre'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        </div>
        <div class="form-group">
          <label for="hechoForm">Hecho a agregar</label>
          <textarea name="hechoForm" id="hechoForm" cols="50" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Agregar Hecho</button>
      </form>
    </div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}