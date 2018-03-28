<div class="sidebar clear">
			<div class="samesidebar clear">
				<h2>Categories</h2>
					<ul>
					<?php
						$query = "select * from tbl_category";
						$category = $db->select($query);
						if($category){
						while($result = $category->fetch_assoc()){			
					?>
						<li><a href="posts.php?category=<?php echo $result['id']; ?>&page=1"><?php echo $result['name']; ?></a></li>
					
						<?php }} else {  ?>
						
						<li>No category found</li>
						
						<?php } ?>
					
					</ul>
			</div>
			
			<div class="samesidebar clear">
				<h2>Latest articles</h2>
				<?php
				$query = "select * from tbl_post order by date desc limit 5";
				$post = $db->select($query);
				if($post){
					while($result = $post->fetch_assoc()){			
				?>
					<div class="popular clear">
						<h3><a href="post.php?id=<?php echo $result['id']; ?>"><?php echo $result['title']; ?></a></h3>
						<a href="post.php?id=<?php echo $result['id']; ?>"><img src="admin/upload/<?php echo $result['image']; ?>" alt="post image"/></a>
						<?php echo $fm->textShorten($result['body'],120); ?>	
					</div>
					
				<?php  } } else { header("Location : 404.php"); } ?>
	
			</div>
			
		</div>