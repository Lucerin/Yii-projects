		<?php
	    $this->widget(
    'booster.widgets.TbPanel',
    array(
    'title' => 'Basic Box',
    'headerIcon' => 'home',
    'content' => $this->renderPartial('_view',array('data'=>$data)),
    )
    );
	?>