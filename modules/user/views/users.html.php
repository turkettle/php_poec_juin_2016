<table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Email</th>
			<th>Rôles</th>
		</tr>
	</thead>
	<tbody>

	<?php foreach($users as $user) : ?>

		<tr>
			<?php include 'user_row.html.php'; ?>
		</tr>

	<?php endforeach; ?>

	</tbody>
</table>
