<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Html->link(__('List Colors'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><?= __('Add Color') ?>  <small></small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
    <?= $this->Form->create($color, ['type'=>'file', 'class'=>'form-horizontal form-label-left']) ?>
    	<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php echo $this->Form->input('name', ['required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']); ?>
                      </div>
                    </div>
					<div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  <?php  echo $this->Form->input('image', ['type'=>'file', 'required'=> true, 'label' => false, 'class'=>'form-control col-md-7 col-xs-12']);
                         echo $this->Form->input('image_dir', ['type'=>'hidden']);
						 ?>
                      </div>
                    </div>
        <?php
            /* echo $this->Form->input('name');
            echo $this->Form->input('image', ['type'=>'file']);
            echo $this->Form->input('image_dir', ['type'=>'hidden']); */
        ?>
    
<?php  /* $this->Form->button(__('Submit')) */ ?>
	<div class="ln_solid"></div>
	<div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <!--<button type="submit" class="btn btn-success">Submit</button>-->
						 <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
    
                      </div>
                    </div>
    <?= $this->Form->end() ?>
</div>
              </div>
            </div>
          </div>
