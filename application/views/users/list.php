<table cellpadding="0" cellspacing="0">
<tr>
    <th>Username</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Active</th>
</tr>
<?php foreach($user_list as $user): ?>
<tr class="clickable">
    <td><a href="users/edit/<?= $user->id ?>"><?=$user->username?></a></td>
    <td><?= $user->firstName ?></td>
    <td><?= $user->lastName ?></td>
    <td><?= $user->email ?></td>
    <td><?= $user->active ?></td>
</tr>
<?php endforeach; ?>
</table>