<?php

use App\Mail\MailgunTeste;
use App\Models\jobs;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Symfony\Component\Mime\Part\TextPart;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     Mail::to('ls1075673@gmail.com')->send(new MailgunTeste);
//     return view('welcome');

// });

// Route::get('/job', function (Request $request) {
//     try {
//      Mail::to($request->email)->send(new MailgunTeste);

//      $insert = jobs::create([
//         'email'=>$request->email,
//         'content'=>$request->content,
//         'description'=>$request->description,
       
//         ]);
        
//     } catch (\Exception $e) {
//         return 'erro no envio do job'.$e;
//     }

// }); 

Route::get('/job', function (Request $request) {
    // Defina o remetente
    $from = 'luan.info3@gmail.com';
    $nameFrom = 'Luan';

    // Defina o destinatário
    $emailTo = 'ls1075673@gmail.com';
    $nameTo = 'Nome do Destinatário';

    // Defina o content
    $content = $request->content;  

    

    // Crie um objeto TextPart para o corpo do e-mail
    $description = new TextPart($request->description);

    // Use a função "send" para enviar o e-mail
    Mail::raw('trololo', function ($message) use ($from, $nameFrom, $emailTo, $nameTo, $content, $description) {
        $message->from($from, $nameFrom)
            ->to($emailTo, $nameTo)
            ->subject($content)
            ->setBody($description);
    });

    // Retorne uma resposta, redirecione ou faça o que for necessário após o envio do e-mail.
});





