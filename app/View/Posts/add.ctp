<!-- File: /app/View/Posts/add.ctp -->

<h1>Ingresar Datos Perro</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('name');
echo $this->Form->input('age');
echo $this->Form->input('breed');
echo $this->Form->input('description', array('rows' => '3'));
echo $this->Form->input('latitude');
echo $this->Form->input('longitude');
echo $this->Form->input('images');


echo $this->Form->end('Save Post');
?>