<!-- модаль для регистрации -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					        <h4 class="modal-title" id="myModalLabel">Регистрация</h4>
					      </div>
					      <div class="modal-body">
					      	<form id="reg_form" action="index.php" method="POST" role="form">
								<div class="form-group">
							    	<label for="name">Ваше имя*</label>
							    	<input type="name" name="name" class="form-control" id="name" placeholder="Ваше имя">
							  	</div>
							  	<div class="form-group">
							    	<label for="login">Ваш логин*</label>
							    	<input type="name" name="login" class="form-control" id="login" placeholder="Ваше имя">
							  	</div>
							  	<div class="form-group">
								    <label for="email">Ваш email*</label>
								    <input type="email" name="email" class="form-control" id="" placeholder="Ваш email">
								</div>
								<div class="form-group">
								    <label for="">Ваш пароль*</label>
								    <input type="password" name="password" class="form-control" id="" placeholder="Ваш пароль">
								</div>
								<div class="form-group">
								    <label for="">Повторите пароль*</label>
								    <input type="password" name="password1" class="form-control" id="" placeholder="Повторите пароль">
								</div>
							</form>
					      </div>
					      <div class="modal-footer">
					        <button form="reg_form" type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
					        <button form="reg_form" type="submit" name="signup" class="btn btn-primary">Подтвердить</button>
					      </div>
					    </div>
					</div>
				</div><!-- модаль для регистрации -->