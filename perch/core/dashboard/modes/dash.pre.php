<?php
	$Form 	= new PerchForm('reorder', false);

    if ($Form->posted() && $Form->validate()) {

		if ($Form->submitted_via_ajax) {
			$Settings->set('dashboard_order', $_POST['order'], $CurrentUser->id());
    	    echo $Form->get_token();
    	    exit;
    	}

    }

