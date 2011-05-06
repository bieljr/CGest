<?= form_open() ?>
<?= form_open() ?>
<p><?= form_label('username','username') ?><?= form_input(array('name'=>'username','value'=>'','id'=>'username','placeholder'=>'username')) ?></p>
<p><?= form_label('password','password') ?><?= form_password(array('name'=>'password','value'=>'','id'=>'password','placeholder'=>'password')) ?></p>
<?= form_close() ?>