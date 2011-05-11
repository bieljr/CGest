<?= form_open('/login/auth',array('method'=>'post')) ?>
<p><?= form_label('username','username') ?><?= form_input(array('name'=>'username','value'=>'','id'=>'username','placeholder'=>'username')) ?></p>
<p><?= form_label('password','password') ?><?= form_password(array('name'=>'password','value'=>'','id'=>'password','placeholder'=>'password')) ?></p>
<p><?= form_submit('doLogin','login') ?></p>
<?= form_close() ?>