<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin">
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>

    </ul>
</nav>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><?= __('List Users') ?> <small></small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

             

                  <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <!--<th>
                          <input type="checkbox" id="check-all" class="flat">
                        </th>-->
                       
                        <th class="column-title"><?= $this->Paginator->sort('email') ?></th>
                        <th class="column-title"><?= $this->Paginator->sort('status') ?></th>
                        <th class="column-title"><?= $this->Paginator->sort('created') ?></th>
                        <th colspan="3" class="column-title text-center no-link last"><span class="nobr">Action</span>
                        </th>
                        <th class="bulk-actions" colspan="8">
                          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                      </tr>
                    </thead>

                    <tbody>
					 <?php foreach ($users as $user): ?>
                      <tr class="even pointer">
                        <!--<td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records" value="<?= $this->Number->format($user->id) ?>">
                        </td>-->
                       
                        <td class=" "><?= h($user->email) ?><i class="success fa fa-long-arrow-up"></i></td>
                        <td class=" ">
							<?php  if($user->status==1){
							echo '<div id="status'.$user->id.'" onclick="changeStatus('.$user->id.');" status="'.$user->status.'" class="btn btn-success">Active</div>' ;
							}else{
							echo '<div id="status'.$user->id.'" onclick="changeStatus('.$user->id.');" status="'.$user->status.'" class="btn btn-danger">Inactive</div>' ;
							} 
							?>
						</td>
                        <td class=" "><?= h($user->created) ?></td>
						<td class="last"><?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?></td>
						<!--<td class="last">  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?></td>-->
						<td class="last"><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?></td>
                      </tr>
					  <?php endforeach; ?>
                    </tbody>
                  </table>
				  <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
                </div>
              </div>
            </div>
</div>


<script>
function changeStatus(id){
	var current_status = $('#status'+id).attr("status");
	//alert(id);
	
	 $.ajax({
                type:"POST",
				url:"<?php echo $this->Url->build(["controller" => "Users","action" => "ChangeStatus"]);?>",
				data: { id: id }, 
                dataType: 'text',
                async:false,
                success: function(data){
					if(current_status ==1){
						$('#status'+id).removeClass("btn-success");
						$('#status'+id).addClass("btn-danger");
						$('#status'+id).text("Inactive");
						$('#status'+id).attr("status","0");
					}else if(current_status ==0){
						$('#status'+id).removeClass("btn-danger");
						$('#status'+id).addClass("btn-success");
						$('#status'+id).text("Active");
						$('#status'+id).attr("status", "1");
					}
				
                },
                
            });
	
}
</script>























