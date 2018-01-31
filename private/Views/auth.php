<?php include "header.php";?>

<div class="registform container">
	<form id="auth" class="form-horizontal" role="form">
  <div class="form-group">
    <label for="auth_login" class="col-sm-2 control-label">Логин</label>
    <div class="col-sm-10">
      <input type="login" class="form-control" name="login" id="auth_login" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="auth_pass" class="col-sm-2 control-label">Пароль</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" id="auth_pass" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Запомнить меня
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Войти</button>
    </div>
  </div>
</form>
</div>
<?php include "modalauth.php";?>
<?php include "footer.php";?>