<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Products Image'), ['action' => 'edit', $productsImage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Products Image'), ['action' => 'delete', $productsImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsImage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Products Image'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Colors'), ['controller' => 'Colors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Color'), ['controller' => 'Colors', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productsImages view large-9 medium-8 columns content">
    <h3><?= h($productsImage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Product') ?></th>
            <td><?= $productsImage->has('product') ? $this->Html->link($productsImage->product->title, ['controller' => 'Products', 'action' => 'view', $productsImage->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Product Code') ?></th>
            <td><?= h($productsImage->product_code) ?></td>
        </tr>
        <tr>
            <th><?= __('Image') ?></th>
            <td><?= h($productsImage->image) ?></td>
        </tr>
        <tr>
            <th><?= __('Image Dir') ?></th>
            <td><?= h($productsImage->image_dir) ?></td>
        </tr>
        <tr>
            <th><?= __('Color') ?></th>
            <td><?= $productsImage->has('color') ? $this->Html->link($productsImage->color->name, ['controller' => 'Colors', 'action' => 'view', $productsImage->color->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($productsImage->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($productsImage->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($productsImage->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($productsImage->modified) ?></td>
        </tr>
    </table>
</div>
