<?php 
$title = __('Browse Exhibits by Tag');
echo head(array('maptype'=>'none','title' => $title, 'bodyid' => 'exhibit', 'bodyclass' => 'tags browse'));
?>


<div id="content">

<section class="browse tags">	
	<h2><?php 
	$title .= ( (isset($total_results)) ? ': <span class="item-number">'.$total_results.'</span>' : '');
	echo $title; 
	?></h2>
		
		
	<div id="page-col-left">
		<aside>
		<!-- add left sidebar content here -->
		</aside>
	</div>


	<div id="primary" class="browse">

		<nav class="secondary-nav" id="item-browse">
	    <?php echo nav(array(
	            array(
	                'label' => __('All'),
	                'uri' => url('exhibits/browse')
	            ),
	            array(
	                'label' => __('Tags'),
	                'uri' => url('exhibits/tags')
	            )
	        )
	    ); ?>
    	</nav>
		
		<?php echo tag_cloud($tags, 'exhibits/browse'); ?>
	</div><!-- end primary -->

	<div id="page-col-right">
	</div>	

</section>
</div> <!-- end content -->

<div id="share-this" class="browse">
<?php echo mh_share_this();?>
</div>

<?php echo foot(); ?>