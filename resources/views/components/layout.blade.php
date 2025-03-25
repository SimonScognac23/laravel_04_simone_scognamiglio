<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Collegamento per il pre-caricamento dei font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com"> {{-- Preconnessione a fonts.googleapis.com per una connessione più veloce --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> {{-- Preconnessione per la parte del font statico --}}
    
    {{-- Collegamento ai font Montserrat, Poppins e Roboto da Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

   


</head>
<body>

    {{-- inserisci il contenuto di una pagina in maniera dinamica --}}
    {{-- In PHP, la variabile slot viene utilizzata principalmente in contesti come i componenti Blade in Laravel. Essa permette di definire sezioni di contenuto personalizzabili che possono essere riempite dinamicamente quando il componente viene utilizzato. È simile al concetto di "yield" nei layout Blade, ma con maggiore flessibilità. L'uso di slot consente di inserire contenuti specifici in parti di un componente, mantenendo la struttura generale, migliorando la riusabilità e la personalizzazione del componente. --}}
    
    <x-navbar></x-navbar>  {{-- serve questo tag per poter richiamare la navbar dentro il file navbar e la richiama  --}}

    <dv class="contaner-fluid min-vh-100">   {{-- questa operazione è comoda se sotto abbiamo un footer e vogliamo che il footer sia in basso, ossia dare una dimensione a l div che contiene lo slot --}}

    {{ $slot }}

    </dv>
  



 
</body>
</html>