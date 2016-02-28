<?php echo $this->Session->flash(); ?>

<?php if($myblogs): ?>
<div class="section">
<h4>会員専用ブログ</h4>
<ul>
	<?php foreach($myblogs as $myblog): ?>
	<li><?php echo $this->Html->link($myblog['BlogContent']['title'], '/'.$myblog['BlogContent']['name']);?></li>
	<?php endforeach; ?>
</ul>
</div>
<?php endif; ?>

<?php if($mymails): ?>
<div class="section">
<h4>会員専用Mailフォーム</h4>
<ul>
	<?php foreach($mymails as $mymail): ?>
	<li><?php echo $this->Html->link($mymail['MailContent']['title'], '/'.$mymail['MailContent']['name']);?></li>
	<?php endforeach; ?>
</ul>
</div>
<?php endif; ?>

<div class="section">
<p><button class="btn btn-lg btn-default" type="button"><i class="fa fa-user"></i>
<?php echo $this->Html->link( 'ユーザー編集', '/members/mypages/edit');?></button></p>

<p><button class="btn btn-lg btn-default" type="button"><i class="fa fa-cogs"></i>
<?php echo $this->Html->link( '日時の一括設定', '/members/mypages/bulk_reserve');?></button></p>

<p><button class="btn btn-lg btn-default" type="button"><i class="fa fa-cog"></i>
<?php echo $this->Html->link( '日時の詳細設定', '/members/mypages/detail_reserve');?></button></p>

<p><button class="btn btn-lg btn-default" type="button"><i class="fa fa-users"></i>
<?php echo $this->Html->link( '全員起きた？', '/members/mypages/okitalist');?></button></p>

<p><button class="btn btn-lg btn-default" type="button"><i class="fa fa-credit-card"></i>
<?php echo $this->Html->link( 'ポイント購入', '/members/mypages/payselect');?></button></p>

<p><button class="btn btn-lg btn-default" type="button"><i class="fa fa-history"></i>
<?php echo $this->Html->link( 'ポイント履歴', '/members/mypages/pointbook');?></button></p>

<p><button class="btn btn-lg btn-default" type="button"><i class="fa fa-sign-out"></i>
<?php echo $this->Html->link( 'ログアウト', '/members/mypages/logout');?></button></p>

</div>