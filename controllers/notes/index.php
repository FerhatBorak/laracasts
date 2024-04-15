<?php 
use Core\Database;
$config = require base_path('config.php');
$db = new Database($config['database']);
$getCurrentUserID = 1;
$notes = $db->query('select*from notes where user_id =:id',[
'id' =>$getCurrentUserID
])->get();


view("notes/index.view.php",[
    'heading' => 'My Notes',
    'notes' => $notes
]);