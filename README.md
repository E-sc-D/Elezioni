# Elezioni

 La struttura del sito è la seguente:
    tutte le pagine che necessitano di controlli password oppure
    modifiche sono in php e sono fuori dalla cartella php cioè
    index.php e result-waitpage.php
    
        Nell'index vengono stampate delle flipcard attraverso il php
        una volta selezionata una tutte le altre sono bloccate;
        Il result-wait page serve come pagina di attesa nel caso le 
        elezioni non sono iniziate e come pagina di visualizzazione delle 
        statistiche alla fine delle votazioni
        
    la cartella php contiene degli script usati dalle pagine php principali
    cofig ad esempio ha i settaggi per la connessione al database,
    election time decide se mostrare result-waitpage.php oppure no e cosi via
    
    Nella cartella javascript sono contenuti i file js, in questo caso fetch.js serve
    a raccogliere i dati dalla votazione e con ajax effettuare la query per salvarli 
    nel database.
    
    
