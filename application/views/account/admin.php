
<div style="display: inline;flex-wrap: wrap-reverse;justify-content: space-between;">
	<form action=<?php echo $_SERVER['REQUEST_URI']; ?> method="post">

		<div style="display: inline;flex-wrap: wrap-reverse;justify-content: space-between;">
      <?php foreach ($news as $val): ?>
				<div style="display:inline-block;max-width: 32%;border: 1px solid;justify-content: space-around; text-align: center;">
					<h3><?php echo $val['name']." "; ?></h3>
					<h3><?php echo $val['lastname']." "; ?></h3>
					<p><?php echo $val['time']." "; ?></p>
					<p><?php echo $val['email']." "; ?></p>
					<textarea><?php echo $val['text']." "; ?></textarea><br>
					<button id=<?php echo $val['id']; ?> onClick="reply_click(this.id)" type="submit" name=<?php echo "del_".$val['id']; ?> value=<?php echo $val['id']; ?> >Delete this element  </button>
				</div>


      <?php endforeach; ?>
		</div>
		<input id="where_clicked" name="where_clicked" type="text" value="" hidden>


	</form>
</div>

<script>
	function reply_click(id_btn){
		document.getElementById('where_clicked').value = id_btn;
	}
</script>