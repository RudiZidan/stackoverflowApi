<html>
	<head></head>
	<body>
		<table>
			<thead>
				<th>account_id</th>
				<th>profile_image</th>
				<th>display_name</th>
				<th>website_url</th>
				<th>link</th>
				<th>is_employee</th>
				<th>last_modified_date</th>
				<th>last_access_date</th>
				<th>age</th>
				<th>reputation_change_year</th>
				<th>reputation_change_quarter</th>
				<th>reputation_change_month</th>
				<th>reputation_change_week</th>
				<th>rreputation_change_day</th>
				<th>reputation</th>
				<th>creation_date</th>
				<th>user_type</th>
				<th>user_id</th>
				<th>accept_rate</th>
				<th>location</th>
			</thead>
			<tbody>
				<?php if (isset($users) && $this->length($users) > 0) { ?>
					<?php foreach ($users as $user) { ?>
						<tr>
							<td><?php echo $user->account_id; ?></td>
							<td><img src="<?php echo $user->profile_image; ?>" width="64" height="64"/></td>
							<td><?php echo $user->display_name; ?></td>
							<td><?php echo $user->website_url; ?></td>
							<td><?php echo $user->link; ?></td>
							<td><?php echo $user->is_employee; ?></td>
							<td><?php echo $user->last_modified_date; ?></td>
							<th><?php echo $user->last_access_date; ?></td>
							<td><?php echo $user->age; ?></td>
							<td><?php echo $user->reputation_change_year; ?></td>
							<td><?php echo $user->reputation_change_quarter; ?></td>
							<td><?php echo $user->reputation_change_month; ?></td>
							<td><?php echo $user->reputation_change_week; ?></td>
							<td><?php echo $user->reputation_change_day; ?></td>
							<td><?php echo $user->reputation; ?></td>
							<td><?php echo $user->creation_date; ?></td>
							<td><?php echo $user->user_type; ?></td>
							<td><?php echo $user->user_id; ?></td>
							<td><?php echo $user->accept_rate; ?></td>
							<td><?php echo $user->location; ?></td>
						</tr>
					<?php } ?>
				<?php } ?>
			</tbody>
		</table>
	</body>
</html>