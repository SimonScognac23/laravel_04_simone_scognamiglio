<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller

     
{

    public $arrayJordan = [
        ['id' => 1, 'name' => 'Air Jordan 1', 'year' => 1985, 'description' => 'La Air Jordan 1 è il primo modello della linea Jordan, celebre per la sua alta tomaia e per la sua connessione con Michael Jordan durante la sua stagione da rookie. Ha cambiato il mondo delle scarpe da basket.', 'photo' => 'https://th.bing.com/th/id/R.e197d6123abda8ef76e64e270dbf897b?rik=11p2i9UYVlNgrA&pid=ImgRaw&r=0.jpg'],
        ['id' => 2, 'name' => 'Air Jordan 2', 'year' => 1986, 'description' => 'La Air Jordan 2 è stata la prima scarpa di Michael Jordan progettata da Bruce Kilgore. Con una tomaia in pelle e un design più elegante, è stata una delle scarpe più iconiche degli anni \'80.', 'photo' => 'https://th.bing.com/th/id/R.4e2945d84105ccd79071eaeee54d2b02?rik=hwocjmQERymdBw&riu=http%3a%2f%2fwww.nicekicks.com%2ffiles%2f2006%2f05%2fair-jordan-2-white-red.jpg&ehk=LG6g0GuTkjZAR%2bdvZ52gjlMuV8%2b93ZvxFdPgxMYUoWo%3d&risl=&pid=ImgRaw&r=0.jpg'],
        ['id' => 3, 'name' => 'Air Jordan 3', 'year' => 1988, 'description' => 'La Air Jordan 3 è famosa per essere la prima scarpa con il logo "Jumpman" e la prima a presentare la tecnologia Nike Air. È anche la scarpa in cui Michael Jordan ha vinto il suo primo Slam Dunk Contest.', 'photo' => 'https://th.bing.com/th/id/OIP.iGf5bJ3ICQ659bA4tG_P2wHaFN?rs=1&pid=ImgDetMain.jpg'],
        ['id' => 4, 'name' => 'Air Jordan 4', 'year' => 1989, 'description' => 'La Air Jordan 4 è diventata celebre per il suo design innovativo e l\'utilizzo di materiali come la plastica traslucida. Fu anche la prima ad essere venduta globalmente.', 'photo' => 'https://th.bing.com/th/id/OIP.o1ou8bc4w0Lco6Pd2-yzDQHaEq?rs=1&pid=ImgDetMain.jpg'],
        ['id' => 5, 'name' => 'Air Jordan 5', 'year' => 1990, 'description' => 'La Air Jordan 5 è ispirata agli aerei da combattimento della Seconda Guerra Mondiale e presenta una suola traslucida e una protezione per la caviglia più alta.', 'photo' => 'https://cdn.flightclub.com/TEMPLATE/011797/1.jpg'],
        ['id' => 6, 'name' => 'Air Jordan 6', 'year' => 1991, 'description' => 'La Air Jordan 6 è famosa per essere la scarpa che Michael Jordan ha indossato durante il suo primo campionato NBA. Presenta un design pulito e un comfort migliorato.', 'photo' => 'https://th.bing.com/th/id/R.720201d4c7df23851d263d2bd397afd1?rik=5QqCuyrawRYEuA&pid=ImgRaw&r=0.jpg'],
        ['id' => 7, 'name' => 'Air Jordan 7', 'year' => 1992, 'description' => 'La Air Jordan 7 è ispirata alla cultura africana e presenta un design unico con un\'aggiunta di colori vivaci. È stata indossata durante il Dream Team ai Giochi Olimpici di Barcellona.', 'photo' => 'https://th.bing.com/th/id/OIP.Ly12hizX89QZtJ7g6qDoCQHaFN?rs=1&pid=ImgDetMain.jpg'],
        ['id' => 8, 'name' => 'Air Jordan 8', 'year' => 1993, 'description' => 'La Air Jordan 8 presenta una tomaia con strisce e una chiusura a velcro. È stata progettata per offrire supporto e stabilità, e Michael Jordan la indossò durante il suo secondo campionato NBA.', 'photo' => 'https://th.bing.com/th/id/OIP.eEXIa-b7b8x2nO1i4QeLKgAAAA?rs=1&pid=ImgDetMain.jpg'],
        ['id' => 9, 'name' => 'Air Jordan 9', 'year' => 1993, 'description' => 'La Air Jordan 9 è stata la prima scarpa della linea Jordan a essere rilasciata senza Michael Jordan, che si era ritirato momentaneamente dal basket. Il design si ispira alla cultura globale e all\'atletismo.', 'photo' => 'https://th.bing.com/th/id/OIP.o0DEWIv9SqZ5V6L171DEbAAAAA?rs=1&pid=ImgDetMainhttps://th.bing.com/th/id/OIP.o0DEWIv9SqZ5V6L171DEbAAAAA?rs=1&pid=ImgDetMain.jpg'],
        ['id' => 10, 'name' => 'Air Jordan 10', 'year' => 1994, 'description' => 'La Air Jordan 10 celebra i successi di Michael Jordan nella sua carriera, con una suola che elenca tutte le sue imprese. È una scarpa di transizione mentre Jordan si ritirava e tornava alla NBA.', 'photo' => 'https://th.bing.com/th/id/OIP.KJImzkVrB85e33oxfb6uHgHaE5?rs=1&pid=ImgDetMain.jpg'],

    ];

 

    //---------------------------------PAGINA HOME PAGE ----------------------------------------------------------------------------------------------------------


    public function homepage() {  
        $title = 'Tutte le migliori Jordan';  
        return view('welcome', ['titolo' => $title]); 
    }  


    //--------------------------------------PAGINA DETTAGLIO-------------------------------------------------------
    


    public function dettaglio($id) {  
  

        foreach($this->arrayJordan as $jordan) {  
           
            if($id == $jordan['id']) {   
                return view('jordan.dettaglio', ['jordan' => $jordan]); 
            }
        }
        return view('jordan.dettaglio');  
    }

    //-------------------------------------- PAGINA INDICE-------------------------------------------

    public function indice() { 


        return view('indice', ['jordans' => $this->arrayJordan]); 
     
    }


}



















