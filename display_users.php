<?php

// Read CSV file and display data in table
$users = array_map('str_getcsv', file('users.csv'));
echo '<table>';
echo '<thead>
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Profile Picture</th>
        </tr>
    </thead>';
echo '<tbody>';
foreach ($users as $user) {
    echo '<tr>';
    echo '<td>' . $user[0] . '</td>';
    echo '<td>' . $user[1] . '</td>';
    echo '<td><img src="uploads/' . $user[2] . '" width="100"></td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';
