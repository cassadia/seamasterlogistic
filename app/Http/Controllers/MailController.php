<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
   public function basic_email(Request $request) {
   $data = array('name'=>$request->nama, 'email'=>$request->email, 'phone'=>$request->phone, 'bodymessage'=>$request->message);

   print_r($data);
   $name_cust = $data['name'];

   // Mail::send(['text'=>'mail'], $data, function($message) {
   Mail::send('mail', $data, function($message) {
      $message->to('dias.saiman@ag-it.com', 'Contact Support')->subject('Contact US');
      $message->from('noreply@sangkarabuanalogistic.com','contactsupport');
   });

   Mail::send(['text/html'=>'mail'], [], function($messag) use($data) {
      $messag->to($data['email'], 'Valuable Customer')
      ->subject('Contact US')
      ->setBody('Hai <strong>' . $data['name'] . '</strong>, <br/>' . 'Terima kasih sudah memberikan comment atau pesan kepada kami.<br/>' . 'Tim kami akan segera merespond comment atau pesan anda.','text/html');
      $messag->from('noreply@sangkarabuanalogistic.com','contactsupport');
   });
   echo "Basic Email Sent. Check your inbox.";
   return redirect()->to('/contact')->with('status','Email sent!');
   }
}
