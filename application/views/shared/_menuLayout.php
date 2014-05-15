<?php
	$pages = array();
	$pages["index"]="Home";
	$pages["users"]="Users";
	$pages["departments"]="Departments";	
?>
<nav>
	<ul>
		<?php foreach($pages as $link=>$title) {
				 $current = ($this->_controller==$link) ? " class='current'" : "";
				 $addr = $link == 'index' ? '' : $link;
				 echo "<li class='menu'><a href='/my/{$addr}'>{$title}</a></li>";
		      }			
		?>
	</ul>		
</nav>		