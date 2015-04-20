<div id="content">
<div class="break"></div>
	<h1>Sonuçlar</h1>
	<?php if ($result->num_rows == 0): ?>
		<p> Sonuç bulunamadı</p>
	<?php endif ?>
<?php while ($post = mysqli_fetch_array($result)) {  ?>

<!-- yazi başlangıcı -->         
	<div class="post">
		<div class="l">
	   		<p><strong>Category ID: </strong> <?php echo $post['categoryName']; ?></p>
	   		<p><strong>Tarih: </strong> <?php echo $post['date']; ?></p>        
		</div>
		<div class="r">
	  		<h2> <?php echo $post['title']; ?> </h2>
	  		<p> <?php echo $post['postContent']; ?> </p>
	  		
	  		<button>READ MORE</button>
		</div>
	</div>
<!-- yazı sonu -->
<?php } ?>

<div class="break"></div>
	<h1>Yorum Sonuçları</h1>
<?php if ($commentResult->num_rows == 0): ?>
		<p> Sonuç bulunamadı</p>
<?php endif ?>
<?php if ($commentResult != ""): ?>
	<?php while ($comment = mysqli_fetch_array($commentResult)) {  ?>
	<!-- comment başlangıcı -->         
	<div class="post">
		<div class="l">
	   		<p><strong>Yazı Başlığı: </strong> <?php echo $comment['title']; ?></p>
	   		<p><strong>Tarih: </strong> <?php echo $comment['date']; ?></p>        
	   		<p><strong>Yazar: </strong> <?php echo $comment['writerName']; ?></p>        
		</div>
		<div class="r">
	  		<p> <?php echo $comment['comment']; ?> </p>
		</div>
	</div>
	<!-- comment sonu -->
	<?php } ?>
<?php endif ?>
</div>
