<div class="row-fluid background-row">
	<div class="span12 text-center">
		<h1>Les membres</h1>
	</div>
</div>
<div class="row-fluid background-row table">
	<div class="span4 text-center">
		<h4>Top membre</h4>
	</div>
</div>
<div class="row-fluid background-row table">
		<div class="span1"><p class="th">#</p></div>
		<div class="span3"><p class="th">Pseudo</p></div>
</div>
<div class="row-fluid background-row">
	<div class="span4"><hr></div>
</div>

	<?php $i = 1; ?>
    <?php foreach ($users as $user): ?>
		<div class="row-fluid background-row table">
			<div class="span1 text-center"><p><?php echo $i ?></p></div>
			<div class="span3 text-center"><p><?php echo $user['User']['username']; ?></p></div>
		</div>
	<?php $i++; ?>
    <?php endforeach; ?>
    