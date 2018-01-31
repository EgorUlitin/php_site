<!-- модаль для авторизации -->
				<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times</button>
				        <h4 class="modal-title" id="myModalLabel">Авторизация</h4>
				      </div>
					  <div class="modal-body">
				      	<form id="auth" action="/index.php" method="POST" role="form">
							  	<div class="form-group">
								    <label for="auth">Ваш email*</label>
								    <input type="email" name="email" class="form-control" id="" placeholder="Ваш email">
								</div>
								<div class="form-group">
								    <label for="auth">Ваш пароль*</label>
								    <input type="password" name="password" class="form-control" id="" placeholder="Ваш пароль">
								</div>
								
							</form>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
					        <button type="button" name="login" class="btn btn-primary">Войти</button>
					      </div>
					    </div>
					</div>
			</div><!-- модаль для авторизации -->