		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">Lista de Utilizadores</div>
				<?php if (count($users)) { ?>
					<table class="table">
						<thead>
						<tr>
							<th>Nome</th>
							<th>Email</th>
							<th>Email Alt.</th>
							<th>Instituição</th>
							<th>Posição</th>
							<th>Ativo</th>
							<th>Role</th>
							<th>Data Criação</th>
							<th>Data Atualização</th>
							<th>Ações</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($users as $user) { ?>
							<tr>
								<td><?=$user->name?></td>
								<td><?=$user->email?></td>
								<td><?=$user->alt_email?></td>
								<td><?=$user->institution_id?></td>
								<td><?=$user->position?></td>
								<td><?=$user->flags?></td>
								<td><?=$user->role?></td>
								<td><?=$user->created_at?></td>
								<td><?=$user->updated_at?></td>
								<td><a href="admin-user-status.php?user_id=<?=$user->id?>">Status</a>
									/ <a href="admin-user-edit.php?user_id=<?=$user->id?>">Edit</a>
									/ <a href="admin-user-delete.php?user_id=<?=$user->id?>" onclick="return confirm('Pretende eliminar este utilizador?');">Delete</a>
									<input type="hidden" name="user_id">
									<input type="hidden" name="user_id">
									<input type="hidden" name="user_id"/>
								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				<?php } else { ?>
					<h2>No users found</h2>
				<?php } ?>
				</div>
			</div>
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-heading">Acções Permitidas</div>
						<div class="btn-group-horizontal" role="group">
							<p>
								<p><button type="button" class="btn btn-group-justified"><a href="/final_project/admin-user-add.php">Criar Utilizador</a></button></p>
								<p><button type="button" class="btn btn-group-justified"><a href="/final_project/autor-proj-list.php">Autor Dashboard</a></button></p>
								<p><button type="button" class="btn btn-group-justified"><a href="/final_project/editor-proj-list.php">Editor Dashboard</a></button></p>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>