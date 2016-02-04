<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row">
    <div class="span9">
        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    </div>
    <div class="span3">
        <div id="sidebar">
            <div class="bootstrap-widget bootstrap-widget-table">

                 <div class="bootstrap-widget-header"><h3>Operaciones</h3></div>
                    <div class="bootstrap-widget-content">

        <?php
            $this->widget('bootstrap.widgets.TbMenu', array(
                'items'=>$this->menu,
                'htmlOptions'=>array('class'=>'operations'),
            ));
         
        ?>

                </div>
            </div>
        </div><!-- sidebar -->
    </div>
</div>
<?php $this->endContent(); ?>