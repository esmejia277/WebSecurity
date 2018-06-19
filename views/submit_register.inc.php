<div class="form-group">
  <label for="form-text">Nombre de usuario</label>
  <input id="form-text" type="text" class="form-control" name="name" placeholder="ejemplo123" value="<?php $validate -> showName()?>" >
  <?php $validate -> showNameError(); ?>
</div>
<div class="form-group">
  <label for="form-email">Email</label>
  <input id="form-email" type="email" class="form-control" name="email" placeholder="ejemplo@mail.com">
  <?php $validate -> showEmailError(); ?>
</div>
<div class="form-group">
  <label for="form-passw">Contraseña</label>
  <input id="form-passw" type="password" class="form-control" name="password" placeholder="tu contraseña...">
</div>
<?php $validate -> showPasswordError(); ?>

<div class="form-group">
  <label for="form-passwd2">Repite la contraseña</label>
  <input id="form-passwd2" type="password" class="form-control" name="password2" placeholder="repite tu contraseña...">
</div>
<?php $validate -> showPassword2Error() ?>
<br>
<div class="text-center">
  <button class="btn btn-default btn-primary" type="submit" name="send" >Registrarse</button>
  <button class="btn btn-default btn-primary" type="reset">Limpiar</button>
</div>
<br>
