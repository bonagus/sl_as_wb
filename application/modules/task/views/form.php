<?php 

echo validation_errors('<p style="color:red";>', '</p>');

echo form_open('task/submit');

echo "Judul: ";
echo form_input('judul', $judul);

echo "<br/>";

echo "Prioritas: ";
echo form_input('prioritas', $prioritas);

echo "<br/>";

echo form_submit('submit', 'Submit');
echo form_close();
