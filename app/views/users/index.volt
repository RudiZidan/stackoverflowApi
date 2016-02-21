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
				{% if users is defined and users|length > 0 %}
					{% for user in users %}
						<tr>
							<td>{{user.account_id}}</td>
							<td><img src="{{user.profile_image}}" width="64" height="64"/></td>
							<td>{{user.display_name}}</td>
							<td>{{user.website_url}}</td>
							<td>{{user.link}}</td>
							<td>{{user.is_employee}}</td>
							<td>{{user.last_modified_date}}</td>
							<th>{{user.last_access_date}}</td>
							<td>{{user.age}}</td>
							<td>{{user.reputation_change_year}}</td>
							<td>{{user.reputation_change_quarter}}</td>
							<td>{{user.reputation_change_month}}</td>
							<td>{{user.reputation_change_week}}</td>
							<td>{{user.reputation_change_day}}</td>
							<td>{{user.reputation}}</td>
							<td>{{user.creation_date}}</td>
							<td>{{user.user_type}}</td>
							<td>{{user.user_id}}</td>
							<td>{{user.accept_rate}}</td>
							<td>{{user.location}}</td>
						</tr>
					{% endfor %}
				{% endif %}
			</tbody>
		</table>
	</body>
</html>