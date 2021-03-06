<nav class="large-3 medium-4 columns mbot15" id="actions-sidebar">
    <ul class="nav nav-pills links-admin"> 
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Brands'), ['controller' => 'Brands', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Brand'), ['controller' => 'Brands', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Keywords'), ['controller' => 'Keywords', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Keyword'), ['controller' => 'Keywords', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">

	<div class="x_panel">
                <div class="x_title">
                  <h2><?= __('Products') ?> <small></small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

   
  <!-- <table class="table table-striped responsive-utilities jambo_table bulk_action">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->id) ?></td>
                <td><?= h($product->title) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	-->
	
	
	
	
	
	
	
	<table class="table table-striped responsive-utilities jambo_table bulk_action">
	  
                    <thead>
                      <tr class="headings">
                        <th>
                          <input type="checkbox" id="check-all" class="flat">
                        </th>
                        <th class="column-title"><?= $this->Paginator->sort('Id') ?></th>
                        <th class="column-title"><?= $this->Paginator->sort('Title') ?></th>
						 <th class="column-title"><?= $this->Paginator->sort('created') ?></th>
                    
                        <th colspan="3" class="column-title text-center no-link last"><span class="nobr">Action</span>
                        </th>
                        <th class="bulk-actions" colspan="8">
                          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                      </tr>
                    </thead>

                    <tbody>
					 <?php foreach ($products as $product): ?>
                      <tr class="even pointer">
                        <td class="a-center ">
                          <input type="checkbox" class="flat" name="table_records" value="<?= $this->Number->format($product->id) ?>">
                        </td>
                        <td class=" "><?= $this->Number->format($product->id) ?></td>
                        <td class=" "><?= h($product->title) ?></td>
						<td class=" "><?= h($product->created) ?></td>
						<td class="last"><?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?></td>
						<td class="last">  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?></td>
						<td class="last"><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?></td>
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

