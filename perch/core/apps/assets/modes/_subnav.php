<?php
	echo PerchUtil::subnav($CurrentUser, array(
		array('page'=>array(
						'core/apps/assets',
						'core/apps/assets/edit',
						'core/apps/assets/delete',
						), 
				'label'=>'Add/Edit'),
		array('page'=>array(
						'core/apps/assets/tags',
						'core/apps/assets/tags/edit',
						'core/apps/assets/tags/delete'), 
				'label'=>'Tags'),
	));