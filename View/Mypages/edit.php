<div class="baser-form baser-form-input">
<?php
if ($this->Session->check('Message.auth')) {
	$this->Session->flash('auth');
}
?>
<?php $this->BcBaser->flash() ?>
<div id="AlertMessage" class="message" style="display:none"></div>
<?php echo $this->BcForm->create('Mypage', array('action' => 'edit', 'url' => array(), 'class' => 'form-horizontal')) ?>
<h3>ユーザー情報</h3>
<div class="form-group">
<div class="col-sm-3 control-label"><?php echo $this->BcForm->label('Mypage.id', '会員番号') ?></div>
<div class="col-sm-9">
	<div class="control-body"><?php echo $user['id']; ?></div>
</div>
</div>
<div class="form-group">
<div class="col-sm-3 control-label"><?php echo $this->BcForm->label('Mypage.name', '名前') ?></div>
<div class="col-sm-9">
	<div class="control-body"><small>カタカナ推奨。</small><br>
		<?php echo $this->BcForm->input('Mypage.name', array('type'=>'text', 'tabindex'=>1, 'maxlength'=>'100', 'value'=>$user['name'], 'class' => 'form-control form-control-lg')) ?>
		<?php echo $this->BcForm->error('Mypage.name') ?></div>
</div>
</div>
<div class="form-group">
<div class="col-sm-3 control-label"><?php echo $this->BcForm->label('Mypage.email', 'メールアドレス') ?></div>
<div class="col-sm-9">
	<div class="control-body"><?php echo $this->BcForm->input('Mypage.email', array('type'=>'email', 'tabindex'=>9, 'maxlength'=>'100', 'value'=>$user['email'], 'class' => 'form-control form-control-lg')) ?>
		<?php echo $this->BcForm->error('Mypage.email') ?></div>
</div>
</div>
<div class="form-group">
<div class="col-sm-3 control-label"><?php echo $this->BcForm->label('Mypage.password', 'パスワード') ?></div>
<div class="col-sm-9">
	<div class="control-body"><small>変更する場合のみ、新しいパスワードを入力してください。</small><br>
		<?php echo $this->BcForm->input('Mypage.password', array('type' => 'password', 'size' => 16, 'tabindex' => 10, 'maxlength' => '20', 'placeholder' => '最低6文字', 'class' => 'form-control form-control-md')) ?><br>
		<?php echo $this->BcForm->input('Mypage.password_confirm', array('type' => 'password', 'size' => 16, 'tabindex' => 11, 'maxlength' => '20', 'placeholder' => '確認の為、2回入力してください。', 'class' => 'form-control form-control-md')) ?>
		<small>【確認】</small>
		<?php echo $this->BcForm->error('Mypage.password') ?></div>
</div>
</div>

<h3>コールの設定</h3>

<div class="form-group">
<div class="col-sm-3 control-label"><?php echo $this->BcForm->label('Mypage.call_plan', 'コールプラン') ?></div>
<div class="col-sm-9">
	<div class="control-body"><?php echo $this->BcForm->input('Mypage.call_plan', array('type'=>'radio', 'tabindex'=>5, 'value'=>$user['call_plan'],'options'=>array('basic'=>'基本:50P','quiz'=>'クイズ:100P'), 'class' => 'form-control')) ?>
		<?php echo $this->BcForm->error('Mypage.call_plan') ?></div>
</div>
</div>
<div class="form-group">
<div class="col-sm-3 control-label"><?php echo $this->BcForm->label('Mypage.tel', '電話番号（メイン）') ?></div>
<div class="col-sm-9">
	<div class="control-body">
	<?php echo $this->BcForm->input('Mypage.tel', array('type'=>'text', 'tabindex'=>6, 'maxlength'=>'10', 'value'=>$user['tel'], 'class' => 'form-control form-control-lg')) ?>
		<?php echo $this->BcForm->error('Mypage.tel') ?></div>
</div>
</div>
<div class="form-group">
<div class="col-sm-3 control-label"><?php echo $this->BcForm->label('Mypage.last_tel', '電話番号（予備）') ?></div>
<div class="col-sm-9">
	<div class="control-body">
	<?php echo $this->BcForm->input('Mypage.last_tel', array('type'=>'text', 'tabindex'=>6, 'maxlength'=>'10', 'value'=>$user['last_tel'], 'class' => 'form-control form-control-lg')) ?>
		<?php echo $this->BcForm->error('Mypage.last_tel') ?></div>
</div>
</div>

<div class="form-group">
<div class="col-sm-3 control-label"><?php echo $this->BcForm->label('Mypage.locate', '今日の天気') ?></div>
<div class="col-sm-9">
	<div class="control-body"><small>お住まいの地域を選択。</small>
	<?php echo $this->BcForm->input('Mypage.locate', array('type'=>'select', 'options'=>$s_cate, 'value'=>$user['locate'], 'empty'=>'---', 'class' => 'form-control form-control-sm')) ?>
        <?php echo $this->BcForm->error('Mypage.locate') ?></div>
</div>
</div>


<div class="submit">
<?php echo $this->BcForm->submit('送信', array('div' => false, 'class' => 'btn btn-lg btn-primary form-submit', 'id' => 'BtnLogin', 'tabindex' => 4)) ?>
</div>
<?php echo $this->BcForm->end() ?>
<div class="section">
<p>メールアドレスを変更すると、確認メールが送信されます。受信できていない場合はアドレスが間違えている恐れがあります。受信できなかった場合は再度修正してください。<br>
また、ログイン時のメールアドレスも同時に変更されます。</p>
</div>
</div>