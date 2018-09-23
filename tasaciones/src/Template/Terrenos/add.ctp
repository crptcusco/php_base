<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Terrenos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="terrenos form large-9 medium-8 columns content">
    <?= $this->Form->create($terreno) ?>
    <fieldset>
        <legend><?= __('Add Terreno') ?></legend>
        <?php
            echo $this->Form->input('coordinacion');
            echo $this->Form->input('area');
            echo $this->Form->input('valorunitario');
            echo $this->Form->input('total');
            echo $this->Form->input('longitud');
            echo $this->Form->input('latitud');
            echo $this->Form->input('observacion');
            echo $this->Form->input('ruta');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
