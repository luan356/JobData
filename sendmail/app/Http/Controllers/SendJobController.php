<?php

namespace App\Http\Controllers;

use App\Models\jobs;
use Illuminate\Http\Request;
use Symfony\Component\Mime\Part\TextPart;
use Illuminate\Support\Facades\Mail;



class SendJobController extends Controller {

  public function getRequest(Request $request){

    try {
        $from = $request->from;  // Defina o remetente
        $nameFrom = 'Luan';   
        $emailTo = $request->email; // Defina o destinatário
        $nameTo = 'Nome do Destinatário';   
        $content = $request->content;   // Defina o content
        $description = new TextPart($request->description);    // Crie um objeto TextPart para o corpo do e-mail

           // Use a função "send" para enviar o e-mail
                Mail::raw('', function ($message) use ($from, $nameFrom, $emailTo, $nameTo, $content, $description) {
                    $message->from($from, $nameFrom)
                        ->to($emailTo, $nameTo)
                        ->subject($content)
                        ->setBody($description);            
                });
        // return true;
        $this->insertData($request);

    } catch (\Exception $e) {
         return "erro->>>[snd]".$e;
    }
    
 
 }      
 
 
        public function insertData(Request $request){
            try{
                $insert = jobs::create([
                    'email'=>$request->email,
                    'content'=>$request->content,
                    'description'=>$request->description,       
                    ]);
            // Retorne uma resposta, redirecione ou faça o que for necessário após o envio do e-mail.

        }catch(\Exception $e){
            return "erro->>>[isrt]".$e;

        }
}
 
}
