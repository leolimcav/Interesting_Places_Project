<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cidade $cidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cidade'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Uf'), ['controller' => 'Uf', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Uf'), ['controller' => 'Uf', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Endereco'), ['controller' => 'Endereco', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Endereco'), ['controller' => 'Endereco', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cidade form large-9 medium-8 columns content">
    <?= $this->Form->create($cidade) ?>
    <fieldset>
        <legend><?= __('Add Cidade') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('uf_id', ['options' => $uf]);
            echo $this->Form->control('codigo_ibge');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
