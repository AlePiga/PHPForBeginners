<?php

use Core\Database;
use Core\App;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 1;

// Find the corresponding note
$note = $db->query('SELECT * FROM notes WHERE id = :id', [
	'id' => $_POST['id']
])->findOrFail();

// Authorize that the user can edit the note
authorize($note['user_id'] === $currentUserId);

// Validate the form
$errors = [];

if (!Validator::string($_POST['body'], 1, 1000)) {
	$errors['body'] = 'A body of no more than 1,000 characters is required';
}

// If no validation errors, update the record in the notes database table
if (count($errors)) {
	return view('notes/edit.view.php', [
		'heading' => 'Edit note',
		'errors' => $errors,
		'note' => $note
	]);
}

$db->query('UPDATE notes SET body = :body WHERE id = :id', [
	'id' => $_POST['id'],
	'body' => $_POST['body']
]);

// Redirect the user
header('Location: /notes');
die();
