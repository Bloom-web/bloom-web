<?php
	echo $HTML->subnav($CurrentUser, array(
		array('page'=>array(
						'core/apps/categories',
						'core/apps/categories/sets',
						'core/apps/categories/sets/edit',
						'core/apps/categories/sets/delete',
						'core/apps/categories/edit',
						'core/apps/categories/delete',
						'core/apps/categories/reorder',
						), 
				'label'=>'Sets'),
	));