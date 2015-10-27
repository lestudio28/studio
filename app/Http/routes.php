<?php
Route::get('contact', function() {

    return View::make('contact');

});

Route::post('contact', function() {

    $fromEmail = Input::get('email');
    $fromName = Input::get('name');
    $subject = Input::get('subject');
    $data = Input::get('message');

    $toEmail = 'valezdesign@gmail.com';
    $toName = 'Valez Design';

    Mail::send('emails.contact', $data, function($message) use ($toEmail, $toName, $fromEmail, $fromName, $subject)
    {
        $message->to($toEmail, $toName)

        $message->from($fromEmail, $fromName);

        $message->subject($subject);
    });

});