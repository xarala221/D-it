<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// pour tester les envois du mail
class MailController extends Controller {
   public function basic_email(){
      $data = array('name'=>"Ousseynou Diop");
   
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('djweuze@gmail.com', 'Test Email')->subject
            ('Laravel Basic Testing Mail');
         $message->from('mstspr1155@gmail.com','Mst Spr');
      });
      echo "Basic Email Sent. Check your inbox.";
   }
   public function html_email(){
      $data = array('name'=>"Ousseynou Diop");
      Mail::send('mail', $data, function($message) {
         $message->to('djweuze@gmail.com', 'Test Email')->subject
            ('Laravel HTML Testing Mail');
         $message->from('mstspr1155@gmail.com','Mst Spr');
      });
      echo "HTML Email Sent. Check your inbox.";
   }
  /* public function attachment_email(){
      $data = array('name'=>"Ousseynou Diop");
      Mail::send('mail', $data, function($message) {
         $message->to('djweuze@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
         $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         $message->from('mstspr1155@gmail.com','Mst Spr');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }*/
}