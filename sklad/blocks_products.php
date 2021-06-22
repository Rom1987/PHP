<?
while( $object = mysqli_fetch_object($result_select) ){ ?>
	<div class="post-item">
		<div class="post-item-wrap">

			<div class="image-wrapper">
				<img src="<?= $object->img ?>">
			</div>
			<div class="post-info">
				<center>
					<button name='buy' value="<?= $object->ID ?>"> Купить </button>
				</center>
			</div>
			<center>
				<div class='block-text-img'>
					<div class="post-cat"><?= $object->name ?></div>
					<div class="post-title"><?= $object->price ?> руб </div> 
					<div class="post-title"> <?= $object->quantity ?> количество </div>
				</div> 
			</center>
		</div>
	</div>

<? } ?>