<?php
	if(have_posts()) : 
		
		while(have_posts()) : the_post(); 

			the_title('<h1>', '</h1>');
			the_content();
			
		endwhile;
		
	else :?>

		Sorry there are no posts.

<?php endif;?>