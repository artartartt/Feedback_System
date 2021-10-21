<!-- dizaynin ushadrutyun chem dardnum -->

<div
	style="display: inline;flex-wrap: wrap-reverse;justify-content: space-between;">
  <?php foreach ($news as $val): ?>
		<div
			style="display:inline-block;max-width: 32%;border: 1px solid;justify-content: space-around; text-align: center;">
			<h3><?php echo $val['name'] . " "; ?></h3>
			<h3><?php echo $val['lastname'] . " "; ?></h3>
			<p><?php echo $val['time'] . " "; ?></p>
			<p><?php echo $val['email'] . " "; ?></p>
			<textarea><?php echo $val['text'] . " "; ?></textarea><br>
		</div>
  <?php endforeach; ?>
	<br>
  <?php for ($i = 0; $i < $page_id; $i++): ?>
	  <a style="font-size: 50px;" href="<?php echo ROOT.($i+1); ?>" ><?php echo $i+1; ?></a>
  <?php endfor ?>


</div>