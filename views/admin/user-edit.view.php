		<?php use Ainet\Support\HtmlHelper;?>
		<div class="col-md-6">
			<div class="col-md-6">
				<label for="name">Nome:</label>
				<p></p>
			</div>
			<div class="col-md-6">
				<input type="text" name="name" id="name" value="<?=$user->name?>" />
				<?=HtmlHelper::error('name',$errors)?>
				<p></p>
			</div>
			<div class="col-md-6">
				<label for="email">Email:</label>
				<p></p>
			</div>
			<div class="col-md-6">
				<input type="text" name="email" id="email" value="<?=$user->email?>"/>
				<?=HtmlHelper::error('email',$errors)?>
				<p></p>
			</div>
			<div class="col-md-6">
				<label for="email">Email Alternativo:</label>
				<p></p>
			</div>
			<div class="col-md-6">
				<input type="text" name="alt_email" id="alt_email" value="<?=$user->alt_email?>"/>
				<?=HtmlHelper::error('alt_email',$errors)?>
				<p></p>
			</div>
			<div class="col-md-6">
				<label for="email">Número Instituição:</label>
				<p></p>
			</div>
			<div class="col-md-6">
				<input type="text" name="institution_id" id="institution_id" value="<?=$user->institution_id?>"/>
				<?=HtmlHelper::error('institution_id',$errors) ?>
				<p></p>
			</div>
			<div class="col-md-6">
				<label for="email">Posição:</label>
				<p></p>
			</div>
			<div class="col-md-6">
				<input type="text" name="position" id="position" value="<?=$user->position?>"/>
				<?=HtmlHelper::error('position',$errors)?>
				<p></p>
			</div>
			<div class="col-md-6">
				<label for="email">Photo URL:</label>
				<p></p>
			</div>
			<div class="col-md-6">
				<input type="text" name="photo_url" id="photo_url" value="<?=$user->photo_url?>"/>
				<?=HtmlHelper::error('photo_url',$errors)?>
				<p></p>
			</div>
			<div class="col-md-6">
				<label for="email">Profile URL:</label>
				<p></p>
			</div>
			<div class="col-md-6">
				<input type="text" name="profile_url" id="profile_url" value="<?=$user->profile_url?>"/>
				<?=HtmlHelper::error('profile_url',$errors)?>
				<p></p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-12">
				<label for="email">Estado:</label>
			</div>
			<div class="col-md-12">
				<div class="container">
					<div class="radio">
						<input type="radio" name="flags" id="flags" value="0" checked> Ativo
					</div>
					<div class="radio">
						<input type="radio" name="flags" id="flags" value="1"> Inativo
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<label for="role">Role:</label>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<select name="role">
						<option value="1">Administrator</option>
						<option value="2">Autor</option>
						<option value="3">Editor</option>
					</select>
				</div>
			</div>
			<div class="col-md-12">
				<td><label for="password">Password:</label></td>
			</div>
			<div class="col-md-12">
				<input type="password" name="password" id="password" value="<?=$user->password?>"/>
				<?=HtmlHelper::error('password',$errors)?>
			</div>
			<div class="col-md-12">
				<label for="passwordConfirmation">Password confirmation:</label>
			</div>
			<div class="col-md-12">
				<input type="password" name="passwordConfirmation" id="passwordConfirmation"/>
				<?=HtmlHelper::error('passwordConfirmation',$errors)?>
			</div>
		</div>
		<div class="col-md-12">
			<div class="container">
				<input type="submit" name="ok" value="Add" />
				<input type="submit" name="cancel" value="Cancel" />
			</div>
		</div>
	</div>