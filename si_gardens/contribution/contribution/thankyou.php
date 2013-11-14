<?php
/**
 * @version $Id$
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 * @copyright Center for History and New Media, 2010
 * @package Contribution
 */

$head = array('title' => 'Contribute',
              'bodyid' => 'contribution',
              'bodyclass' => 'contribution thanks thank-you');
head($head); ?>


<div id="content">
<article class="page show">

	<div id="page-col-left">
		<aside>
		<!-- add left sidebar content here -->
		</aside>
	</div>


	<div id="primary" class="show" role="main">

    
	<h1>Thank You for Contributing!</h1>
	<p id="thanks">Thank you for sharing your garden story. You will receive an email confirmation within 24 hours. We will review your submission and you will receive a second email confirmation when your story appears on the Community of Gardens website. Meanwhile, feel free to <?php echo contribution_link_to_contribute('make another contribution'); ?> or <a href="<?php echo uri('items/browse'); ?>">browse the archive</a>.</p>
<p id="cta">Do you know someone in your community with a garden story to share? Tell a friend about Community of Gardens.</p>
<div id="share-this" class="submission-share-cta">
<?php echo mh_share_this('Share this Site','var addthis_share ={"url":"http://www.communityofgardens.org"}');?>
</div>
</div>


	<div id="page-col-right">
		<aside id="page-sidebar">

		</aside>	
	</div>	



</article>
</div> <!-- end content -->



<?php echo foot(); ?>