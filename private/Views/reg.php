



<div class="registform container">
    <form id="reg_form" class="form-horizontal " role="form">
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" id="email" class="form-control"  placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Имя</label>
    <div class="col-sm-10">
      <input type="text" name="name" id="name" class="form-control"  placeholder="Имя">
    </div>
  </div>
  <div class="form-group">
    <label for="login" class="col-sm-2 control-label">Логин</label>
    <div class="col-sm-10">
      <input type="login" name="login" id="login" class="form-control"  placeholder="Логин">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Пароль</label>
    <div class="col-sm-10">
      <input type="password" name="password" id="password" class="form-control"  placeholder="Пароль">
    </div>
  </div>
  <div class="form-group">
    <label for="confirm" class="col-sm-2 control-label">Повторите пароль</label>
    <div class="col-sm-10">
      <input type="password" name="confirm" id="confirm" class="form-control"  placeholder="Повторите пароль">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Зарегистрироваться</button>
    </div>
  </div>
</form>
</div>
<?php include "modalreg.php";?>

