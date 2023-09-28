<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class GunMail extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function gun()
    {
        $minhaClasse = new \App\Mail\MailgunTeste();
        $resultado = $minhaClasse->envelope();

        // $this->assertTrue(true);
    }
}






// // Crie uma instância da sua classe
//         $minhaClasse = new \App\Mail\MailgunTeste();

//         // Execute a função que você deseja testar
//         $resultado = $minhaClasse->envelope();

//         echo '<pre>'; print_r($resultado); echo '</pre>';
//         // // Use os métodos de assert do PHPUnit para verificar o resultado
//         // $this->assertEquals('esperado', $resultado);
//     }
// }

$new = new GunMail;
$new->gun();
return $new;
