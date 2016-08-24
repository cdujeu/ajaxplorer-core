<?php
/*
* Copyright 2007-2013 Charles du Jeu - Abstrium SAS <team (at) pyd.io>
* This file is part of Pydio.
*
* Pydio is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* Pydio is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License
* along with Pydio.  If not, see <http://www.gnu.org/licenses/>.
*
* The latest code can be found at <http://pyd.io/>.
*/
//
//      Maintained by DepaMarco
//	http://github.com/DepaMarco
//
//      Previous maintainers:
//
//          Michele Beltrame
//          http://www.cattlegrid.info/
//          mb [AT] italpro [DOT] net

//          Updates for Pydio 2.5.5 by
//          Davide Cavalca <davide at cavalca dot name>
//
//          Original translation by Luca Zorzi
//          http://lublog.tuttoeniente.net/
//          luca [AT] tuttoeniente [DOT] net
//
//
//---------------------------------------------------------------------------------------------------

$mess=array(
"languageLabel" => "Italiano",
"date_format"  => "Y/m/d H:i",
"byte_unit_symbol" => "B",
"date_intl_locale" => "it-IT",
"0" => "Ultima versione",
"1" => "Nome file",
"2" => "Dimensione",
"3" => "Tipo",
"4" => "Modificato",
"5" => "Azioni",
"6" => "Rinomina",
"7" => "Elimina",
"8" => "Cartella",
"9" => "File MIDI",
"10" => "File di testo",
"11" => "Javascript",
"12" => "Immagine GIF",
"13" => "Immagine JPG",
"14" => "Pagina HTML",
"15" => "Pagina HTML",
"16" => "File REALE",
"17" => "File REALE",
"18" => "Script PERL",
"19" => "File ZIP",
"20" => "File WAV",
"21" => "Script PHP",
"22" => "Script PHP",
"23" => "File",
"24" => "Cartella superiore",
"25" => "Invia uno o più file (max. ". \Pydio\Core\Services\ConfService::getConf('UPLOAD_MAX_NUMBER').") nella cartella : ",
"26" => "Crea una nuova cartella in: ",
"27" => "Carica",
"28" => "Crea un nuovo file in in: ",
"29" => "Crea",
"30" => "Scrivi un nome per la cartella e poi clicca su 'Crea'",
"31" => "Devi selezionare un file",
"32" => "Esplora",
"33" => "Errore nell'invio del file!",
"34" => "Il file",
"35" => "è stato creato con successo nella cartella",
"36" => "La sua dimensione è",
"37" => "Devi inserire un nome valido",
"38" => "La cartella",
"39" => "è stata creata in",
"40" => "Questa cartella esiste già (i nomi non sono sensibili alle maiuscole)",
"41" => "è stata rinominata in",
"42" => "a",
"43" => "esiste già (i nomi sono insensibili alle maiuscole)",
"44" => "è stata cancellata",
"45" => "cartella",
"46" => "file",
"47" => "Vuoi davvero cancellare il ",
"48" => "OK",
"49" => "ANNULLA",
"50" => "File Exe",
"51" => "Modifica",
"52" => "Modifica del file",
"53" => "Salva",
"54" => "Annulla",
"55" => "è stato modificato",
"56" => "Immagine BMP",
"57" => "Immagine PNG",
"58" => "File CSS",
"59" => "File MP3",
"60" => "File RAR",
"61" => "File GZ",
"62" => "Cartella radice",
"63" => "Log out",
"64" => "File XLS",
"65" => "File Word",
"66" => "Copia",
"67" => "File selezionato",
"68" => "Incolla",
"69" => "O scegli un'altra cartella",
"70" => "Sposta",
"71" => "Questo file esiste già (i nomi sono insensibili alle maiuscole)",
"72" => "La cartella radice non è corretta. Controllala nel file conf/conf.php",
"73" => "è stato copiato nella cartella",
"74" => "è stata copiata nella cartella",
"75" => "IL file users.txt non è nella cartella privata",
"76" => "Questo file è stato cancellato",
"77" => "Invia",
"78" => "Passa",
"79" => "File PDF",
"80" => "File MOV",
"81" => "File AVI",
"82" => "File MPG",
"83" => "File MPEG",
"84" => "Aiuto",
"85" => "Aggiorna",
"86" => "Chiudi",
"87" => "Cerca",
"88" => "Scarica",
"89" => "Impossibile aprire il file",
"90" => "Stampa",
"91" => "File FLASH",
"92" => "Lingua",
"93" => "Per poter segliere una lingua, il tuo browser browser deve accettare i cookie.",
"94" => "Login",
"95" => "Scegli la lingua:",
"96" => "Scegli la cartella di destinazione nell'albero: ",
"97" => "Invia File",
"98" => "Clicca in qualsiasi punto di questo riquadro per chiuderlo.",
"99" => "non è scrivibile. Potrebbero esserci problemi di permessi...contatta il tuo amministratore.",
"100"=> "Impossibile trovare il file ",
"101"=> "La cartella di origine e quella di destinazione sono uguali!",
"102"=> "Errore durante la creazione del file:",
"103"=> "Impossibile trovare la cartella ",
"104"=> "Vai ad una destinazione",
"105"=> "Invia un indirizzo via e-mail per accedere direttamente a questa posizione.",
"106"=> "Invia e-mail",
"107"=> "Il tuo nome e/o la tua e-mail",
"108"=> "L'e-mail di destinazione",
"109"=> "URL cliccabile",
"110"=> "Aggiungi un commento",
"111"=> "La seguente e-mail è stata inviata:",
"112"=> "Invio dell'e-mail fallito: ",
"113"=> "La selezione è vuota!",
"114"=> "Si è verificato un errore sconosciuto durante la copia!",
"115"=> "Il file è stato salvato con successo",
"116"=> "file",
"117"=> "La cartella",
"118"=> "Scarica più file",
"119"=> "Clicca su qualsiasi file per scaricarlo.",
"120"=> "Non sei autorizzato a cancellare l'intero albero!",
"121"=> "Immagine",
"122"=> "Cestino",
"123"=> "è stato spostato nella ",
"124"=> "Sovrascrivere i file esistenti?",
"125"=> "Un file o una cartella con questo nome esiste già (i nomi sono insensibili alle maiuscole), scegline un'altro!",
"126"=> "Miniature",
"127"=> "Dimensione",
"128"=> "file selezionati.",
"129"=> "Visualizza",
"130"=> "Cartelle",
"131"=> "Dettagli",
"132"=> "Nessun file",
"133"=> "Nome",
"134"=> "Tipo",
"135"=> "Dimensioni",
"136"=> "Visualizza immagine più grande",
"138"=> "Ultima modifica.",
"139"=> "Modifica online",
"140"=> "Riprodici l'intera cartella",
"141"=> "Lettura della cartella",
"142"=> "Connesso come ",
"143"=> "Esplorazione come ospite. Loggati.",
"144"=> "Non connesso.",
"145"=> "Miei segnalibri",
"146"=> "Elimina segnalibro",
"147"=> "Segnalibri",
"148"=> "Superiore",
"149"=> "Aggiorna",
"150"=> "Visualizzazione",
"151"=> "Cambia modalità di visualizzazione...",
"152"=> "Segnalibro",
"153"=> "Aggiungi la posizione corrente ai miei segnalibri",
"154"=> "N. cartella",
"155"=> "Crea una nuova cartella",
"156"=> "Nuovo file",
"157"=> "Crea un nuovo file vuoto",
"158"=> "Rinomina il file o la cartella selezionati",
"159"=> "Copia la selezione in...",
"160"=> "Sposta i file selezionati in ...",
"161"=> "Elimina i file selezionati.",
"162"=> "Modifica i file di testo online.",
"163"=> "Log in",
"164"=> "Log out",
"165"=> "Impostazioni",
"166"=> "Informazioni",
"167"=> "Informazioni su Pydio",
"168" => "Accedi a APPLICATION_TITLE",
"169" => "Esci da APPLICATION_TITLE",
"170" => "Cartella corrente",
"parent_access_key" => "u",
"refresh_access_key" => "A",
"list_access_key" => "L",
"thumbs_access_key" => "t",
"bookmarks_access_key" => "g",
"upload_access_key" => "r",
"folder_access_key" => "N",
"file_access_key" => "f",
"rename_access_key" => "R",
"copy_access_key" => "C",
"move_access_key" => "p",
"delete_access_key" => "E",
"edit_access_key" => "M",
"view_access_key" => "V",
"download_access_key" => "S",
"settings_access_key" => "m",
"about_access_key" => "z",
"empty_recycle_access_key" => "o",
"restore_access_key" => "i",
"171" => "Esplora computer",
"172" => "La tua selezione",
"173" => "Nome della nuova cartella",
"174" => "Nome del nuovo file",
"175" => "Scegli la cartella di destinazione",
"176" => "I file selezionati saranno spostati nel cestino.",
"177" => "Sei sicuro di voler eliminare definitivamente i file selezioanti?",
"178" => "Precedente",
"179" => "Successivo",
"180" => "Inserisci nome utente/password",
"181" => "Utente",
"182" => "Password",
"183" => "Scegli una cartella di destinazione diversa da quella di origine!",
"184" => "Cerca nella cartella corrente e nelle sottocartelle",
"185" => "Interrompi la ricerca",
"186" => "Anteprima dell'immagine",
"187" => "Edizione online - ",
"189" => "Modifica le mie impostazioni",
"190" => "Lingua",
"191" => "Visualizzazione predefinita",
"192" => "Lista dettagliata",
"193" => "Miniature",
"194" => "Cambia Password",
"195" => "Impostazioni utente",
"196" => "La lingua selezionata è diversa da quella corrente!\\n Vuoi ricaricare la pagina per cambiare lingua?",
"197" => "Preferenze utente cambiate con successo! \\n\\n. Se hai cambiato la password, questo avrà effetto dopo la disconnessione. \\n\\n. Se hai cambiato la lingua, clicca su ricarica (F5) nel tuo browser per aggiornare la pagina.",
"198" => "Nuovo",
"199" => "Conferma",
"200" => "Modifica il Repository in...",
"201" => "Attenzione, alcune modifiche non sono state salvate!\\n Vuoi davvero chiudere?",
"202" => "Attenzione, copia ricorsiva!",
"203" => "La cartella di destinazione è la stessa di quella di origine!",
/* GROUPED SENTENCE : 'the file "filename.ext" exceeds size limit (1Mb)\nIt will not be uploaded.*/
"204" => "Il file \"",
"205" => "\" supera il limite di destinazione (",
"206" => "Mb).\\nNon sarà inviato.",
"207" => "Non hai i permessi di scrittura su questa cartella",
"208" => "Non hai i permessi di lettura su questa cartella",
"209" => "Errore interno del server, contatta l'amministratore!",
"210" => "Invio fallito",
"211" => "Il file è troppo grande!",
"212" => "Nessun file trovato sul server!",
"213" => "Errore durante la copia del file nella cartella corrente",
"214" => "Naviga tra i file",
"215" => "Inizia invio",
"216" => "Svuota la coda",
"217" => "Svuotamento completato",
"218" => "Rimuovi dalla coda",
"219" => "Completato",
"220" => "Svuota",
"221" => "Svuota il cestino",
"222" => "Ripristina",
"223" => "Ripristina il file nella sua cartella di origine",
"224" => "Vai a",
"225" => "Rinomina segnalibro",
"226" => "Lista",
"227" => "Passa alla visualizzazione dettagliata",
"228" => "Miniature",
"229" => "Passa alla visualizzazione miniature",
"230" => "Riproduci",
"231" => "Riproduci la sequenza",
"232" => "Ferma",
"233" => "Ferma la sequenza",
"234" => "Visualizza le immagini selezionate",
"235" => "Schermo intero",
"236" => "Ripristina",
"237" => "Vecchia password",
"238" => "Le password sono diverse!",
"239" => "Inserisci la tua password attuale",
"240" => "Password errata!",
"241" => "Impostazioni salvate con successo",
"242" => "Registro SVN",
"svn_log_access_key" => "L",
"243" => "Revisione",
"244" => "Autore",
"245" => "Data",
"246" => "Messaggio",
"247" => "Estrai",
"248" => "Estrai selezione da zip a...",
"249" => "Gestione utenti",
"250" => "Gestione repository",
"251" => "Registri",
"252" => "Dimensione massima di invio raggiunto.",
"253" => "Errore HTTP:",
"254" => "Errore I/U:",
"255" => "Errore di sicurezza:",
"256" => "Trasferito",
"257" => "Rimuovere",
"258" => "Numero di file:",
"259" => "Dimensioni combinato:",
"260" => "byte",
"261" => "Ricorda la password",
"262" => "Uno o più sembrano già esistere\\n nella cartella di destinazione.\\nCosa vuoi fare?",
"263" => "Sovrascrivi",
"264" => "Salta",
"265" => "File",
"266" => "B",
"267" => "Crea",
"268" => "Crea una nuova tabella",
"269" => "Struttura",
"270" => "Modifica struttura tabella",
"271" => "Elimina",
"272" => "Elimina tabella aperta",
"273" => "Inserisci",
"274" => "Inserisci una nuova riga",
"275" => "Sei sicuro di voler eliminare le tabelle selezionate?",
"276" => "Modifica riga selezionata",
"277" => "Elimina riga selezionata",
"278" => "Sei sicuro di voler eliminare le righe selezionate?",
"279" => "Tabelle",
"280" => "Righe",
"281" => "Limiti",
"282" => "Dimensione per file",
"283" => "Dimensione totale",
"284" => "Numero di file",
"285" => "Impossibile trovare l'utente, riprova per favore.\\n Assicurarsi che il blocco maiuscole non sia inserito!",
"286" => "Il tuo utente è disallineato con la versione corrente, prego usare la procedura di aggiornamento.",
"287" => "Permessi file",
"288" => "Utente",
"289" => "Gruppo",
"290" => "Tutti",
"291" => "Applicare in modo ricorsivo?",
"292" => "Collegamento pubblico",
"293" => "Crea un collegamento pubblico a questo file",
"294" => "Scadenza collegamento e password",
"295" => "Scadenza collegamento (giorni)",
"296" => "Prego copiare il link seguente:",
"297" => "Nuovo utente",
"298" => "Crea un nuovo utente",
"299" => "Nuovo repository",
"300" => "Crea un nuovo repository",
"create_repo_accesskey" => "r",
"create_user_accesskey" => "u",
"301" => "Modifica configurazione",
"302" => "Copia come testo",
"303" => "Copia selezione come testo separato da tabulatori.",
"304" => "Indietro",
"305" => "Torna alla pagina iniziale",
"306" => "Troppe cartelle",
"307" => "Riempi campi opzionali",
"308" => "Genera collegamento",
"309" => "Genera",
"310" => "Opzioni",
"311" => "Esegui il caricamento in automatico all'aggiunta di un file",
"312" => "Opzioni di caricamento",
"313" => "Comprimi...",
"314" => "Comprimi la selezione in uno zip...",
"315" => "Comprimi la selezione in",
"316" => "Apri con...",
"open_with_access" => "c",
"317" => "Vedi sorgente",
"318" => "Vedi codice sorgente CodePress",
"319" => "Editor HTML",
"320" => "Editor WYSIWYG per HTML",
"321" => "Seleziona",
"322" => "Seleziona il file corrente",
"323" => "Invia per e-mail questo URL",
"324" => "Nessun editor disponibile",
"325" => "Adatta al meglio",
"326" => "Non adattare",
"327" => "100%",
"328" => "Viewer PDF",
"329" => "Vedi PDF online",
"330" => "Attendi per favore che le pagine vengano create...",
"331" => "Pagina",
"332" => "di",
"333" => "Editor immagine Pixlr",
"334" => "altro",
"335" => "Per favore inserisci un numero di pagina compreso tra 1 e ",
"336" => "Non è possibile trascinare le cartelle, è possibile trascinare solo i files!",
"337" => "Caricamento automatico",
"338" => "Chiusura automatica dopo il caricamento",
"339" => "File esistenti",
"340" => "Allarme",
"341" => "Info sul file",
"342" => "Info sulla cartella",
"343" => "Info sull'immagine",
"344" => "Cerca in",
"345" => "Nessuna informazione sulla versione",
"346" => "La tua versione è aggiornata",
"347" => "Una nuova versione (%s) è disponibile! Visita %s",
"348" => "Un nuovo repository è stato condiviso.",
"349" => "Attenzione, mancano argomenti",
"350" => "Un utente che non sei tu esiste già con questo nome, scegli un altro nome.",
"351" => "Non sei autorizzato a condividere elementi pubblici.",
"352" => "Un repository con lo stesso nome esiste già, per favore scegli un altro nome.",
"353" => "Utente destinatario",
"354" => "Crea un nuovo utente o scegline uno di quelli esistenti dalla lista.",
"355" => "Utente",
"356" => "Password",
"357" => "Percorso Repository",
"358" => "scegliere un nome per l'elemento condiviso e assegnare i privilegi di accesso per l'utente.",
"359" => "Etichetta",
"360" => "Privilegi",
"361" => "Lettura",
"362" => "Scrittura",
"363" => "Condividi elementi",
"364" => "Non hai i privilegi necessari per completare l'operazione",
"365" => "Non ti è consentito di caricare più di %s files per volta.",
"366" => "Questo utente non ha nessun repository attivo.",
"367" => "Non sei autorizzato a caricare questo tipo di file. Sei pregato di scegliere tra le seguenti estensioni : ",
"368" => "Selezione estratta con successo dall'archivio %s alla cartella %s",
"369" => "Link APPLICATION_TITLE",
"370" => "APPLICATION_TITLE download pubblico",
"371" => "È richiesta una password per questo download",
"372" => "Repository corrente",
"373" => "Destinazione",
"374" => "Non è possibile copiare le cartelle dei repositories",
"375" => "Attenzione, sei rimasto inattivo da più di __IDLE__, sarai reindirizzato al __LOGOUT__",
"376" => "Fare clic su un punto qualsiasi per riattivare",
"378" => "Attenzione il campo password è vuoto o la password è troppo corta!",
"379" => "Parola non sicura!",
"380" => "Troppo corta",
"381" => "Molto debole",
"382" => "Debole",
"383" => "Media",
"384" => "Forte",
"385" => "Molto forte",
"386" => "Hai fallito il login per 3 volte.\\nPer sicurezza, sei pregato di inserire il codice che appare nell'immagine.",
"389" => "Per favore leggi il codice qui sotto :",
"390" => "Codice",
"391" => "Nessun Repository",
"392" => "Attenzione, la versione di APPLICATION_TITLE è cambiata (ora %s), per favore pulisci la cache del tuo browser e aggiorna la pagina per essere sicuro che tutto funzioni correttamente!",
"393" => "Attenzione, la lunghezza dei nomi deve essere inferiore a %s, il nome del file verrà troncato!",
"394" => "Purtroppo la condivisione della cartella non è momentaneamente possibile con il driver di autorizzazione attuale (utenti non modificabili). La condivisione file è comunque ancora possibile.",
"395" => "L'elemento rilasciato sembra essere una cartella e le cartelle non possono essere caricate sul server! Si conferma il caricamento?",
"396" => "Metodo autorizz.",
"397" => "Scaricamento a pezzi",
"398" => "Scaricare a pezzi il file selezionato",
"399" => "Immettere il numero di pezzi da scaricare, quindi fare clic sul pulsante e su ciascun file per scaricarlo.",
"400" => "Numero di pezzi:",
"401" => "È possibile scaricare e installare il software che segue per assemblare i pezzi copiati sul computer: ",
"402" => "http://www.hjsplit.org/",
"403" => "Preferenze WebDAV",
"404" => "Puoi utilizzare il protocollo WebDAV per montare i tuoi repository APPLICATION_TITLE come 'dischi di rete' su vari client, inclusi Windows, Mac, iPhone, etc.",
"405" => "Utilizza le seguenti URLs per accedere ai tuoi repository, con lo username e password che hai inserito. Attenzione: ciò non funzionerà finché non imposti questa caratteristicha come 'attiva' ed inserisci la tuo password.",
"406" => "Attiva le condivisioni WebDAV",
"407" => "Inserisci la tua password se è la prima volta che attivi le condivisioni WebDAV, oppure se vuoi re-inserire una nuova password :",
"408" => "Condivisioni WebDav attivate correttamente, non dimenticare di aggiornare la tua password se questa è la prima attivazione!",
"409" => "Condivisioni WebDav disattivate correttamente",
"410" => "Password WebDav aggiornata correttamente",
"411" => "Apri",
"412" => "Solo upload",
"413" => "Condiviso da",
"414" => "Usa le frecce per navigare e +/- per variare lo zoom",
"415" => "Nascondi/visualizza pannello di sinistra",
"416" => "Pannello Sx",
"leftpane_accesskey" => "L",
"417" => "Aggiungi repository ...",
"418" => "Crea il tuo repository",
"419" => "Caricando i template...",
"420" => "Template",
"421" => "Nuovo %s",
"422" => "Per favore, compila i parametri richiesti. Passa sopra i titoli dei campi con il mouse per avere maggiori informazioni.",
"423" => "Cancella repository",
"424" => "Sei sicuro di voler cancellare questo repository? L'operazione è irreversibile",
"425" => "Il repository è stato creato ed aggiunto al tuo elenco dei repository, se vuoi rimuoverlo, prima passa ad un altro repository, poi clicca sulla croce rossa vicino al nome del repository.",
"426" => "C'è stato un errore nella creazione del repository",
"427" => "C'è stato un errore nella cancellazione del repository",
"428" => "Il repository è stato cancellato con successo",
"429" => "Questo è come apparirà il repository nel tuo elenco.",
"430" => "File di Default",
"431" => "Template d'Esempio",
"432" => "Miei File",
"433" => "pronto",
"434" => "inviando",
"435" => "fatto",
"436" => "errore",
"437" => "Ooops, sembra che il tuo token di sicurezza sia scaduto! Per favore %s premendo aggiorna o F5 nel tuo browser!",
"438" => "ricarica la pagina",
"439" => "Opzioni Principali",
"440" => "Si",
"441" => "No",
"442" => "Mio Account",
"443" => "Aggiorna le tue informazioni personali",
"444" => "Per favore aggiorna la password, altrimenti non sarai in grado di autenticarti.",
"445" => "Adesso verrai disconnesso, ti preghiamo di riautenticarti con la tua nuova password, grazie!",
"446" => "Presentazione",
"447" => "Mio gruppo",
"448" => "crea utente",
"449" => "Creando %s, scegli una password",
"450" => "Ordina per ...",
"451" => "Ordina miniature per ...",
"452" => "Dimensioni delle miniature",
"453" => "Imposta le dimensioni delle miniature",
"454" => "Scegli i file dal tuo computer",
"455" => "Miei Workspace",
"456" => "Altro",
"457" => "aggiorna",
"458" => "rimuovi",
"459" => "Cartella principale",
"460" => "Dettagli",
"461" => "Passa alla visuale dettagliata",
"detail_access_key" => "D",
"date_relative_date" => "il DATE",
"date_relative_time" => "TIME",
"date_relative_date_format" => "d F Y",
"date_relative_time_format" => "H:i",
"date_relative_today" => "oggi alle TIME",
"date_relative_yesterday" => "ieri alle TIME",
"date_relative_tomorrow" => "domani alle TIME",
"date_relative_days_ago" => "%s giorni fa",
"date_relative_days_ahead" => "fra %s giorni",
"462" => "Anteprima",
"preview_access_key" => "e",
"463" => "Scarica tutto",
"464" => "Scarica in una volta tutto il contenuto del workspace (compresso)",
"465" => "Mostra URL alternativi (monta separatamente i workspace)",
"466" => "Caricamento...",
"467" => "Tutti gli elementi condivisi",
"468" => "My Workspaces",
"469" => "Condivisi con me",
"470" => "Creato %date",
"471" => "Creato da %user %date",
"472" => "Condiviso da %user",
"473" => "Condiviso da %user %date",
"474" => "Nessuna descrizione",
"475" => "File condivisi con tutti gli utenti",
"476" => "Il tuo workspace personale",
"477" => "Seleziona un file o una cartella per visualizzarne i dettagli qui",
"478" => "Nessun risultato",
"479" => "Password dimenticata?",
"480" => "Naviga nelle directory del workspace corrente.",
"481" => "Tutte i file e le cartelle da te condivise",
"482" => "Accesso rapido ai preferiti",
"483" => "Non sei autorizzato a creare nuovi utenti!",
"484" => "Crea utente",
"485" => "Crea utente condiviso",
"486" => "Avanzate",
"487" => "Base",
"488" => "Filtro Avanzato",
"489" => "Metadata",
"490" => "Intervallo date",
"491" => "Dopo",
"492" => "fino a",
"493" => "Oggi",
"494" => "Ieri",
"495" => "Ultima settimana",
"496" => "Ultimo mese",
"497" => "Ultimo anno",
"498" => "Proprierà documento",
"499" => "File",
"500" => "estensione",
"501" => "o",
"502" => "Cartella",
"503" => "Dimensione",
"504" => "1k,1M,1G",
"505" => "a",
"506" => "Parametri applicazione (utenti, workspaces, configurazioni)",
"507" => "Benvenuto su %s",
"508" => "Ho appena creato un account per te su %s. Per collegarti, clicca sul seguente link %link ed utilizza queste credenziali:  <br><br> Login: %user <br><br> Password: %pass",
"509" => "Salva la lista di utenti corrente come team",
"510" => "Inserisci un nome per il team",
"511" => "Il mio %s",
"512" => "Schermo Intero",
"513" => "mostra",
"514" => "nascondi",
"515" => "Nessun segnalibro - Trascina file o cartelle qui per l'accesso rapido.",
"516" => "espandi",
"517" => "raggruppa",
"518" => "In alternativa, puoi <a class='create_file_alt_link'>Creare un file vuoto</a>.",
"519" => "Aggiorna utente",
"520" => "Aggiorna i dati dell'utente e la password",
"521" => "Utente aggiornato correttamente",
"522" => "ID Utente",
"523" => "Password",
"524" => "Aggiorna Password",
"525" => "Mostra immagine originale",
"526" => "Versione a bassa risoluzione",
"527"=> "Condiviso con",
"528"=> "Utenti Interni",
"530"=> "Utenti Esterni",
"531"=> "Users",
"532"=> "Groups",
"533" => "Identifier used to login, please use alphanumeric or email lowercase characters.",
"534" => "Password used to login",
"535" => "Send password by email",
"536" => "Send a welcome email including the password to the new user",
"plugtype.title.access" => "Workspace Driver",
"plugtype.desc.access" => "'Plugin' definisce come un workspace può accedere al backend (un sistema di memorizzazione file o altro) e le principali azioni.",
"plugtype.title.action" => "Plugin Azioni",
"plugtype.desc.action" => "Plugin orientato alle funzionalità per gestire diversi aspetti",
"plugtype.title.authfront" => "Frontend di Autenticazione",
"plugtype.desc.authfront" => "Metodi per l'ottenimento delle credenziali d'identificazione (web form, api key, ecc)",
"plugtype.title.cypher" => "Strumenti Crittografici",
"plugtype.desc.cypher" => "Plugin crittazione dati",
"plugtype.title.editor" => "Editors",
"plugtype.desc.editor" => "Visualizzatori o editor per una vasta gamma di tipi MIME",
"plugtype.title.gui" => "Interfaccia Grafica Utente",
"plugtype.desc.gui" => "Interfaccia web principale ed i suoi effetti",
"plugtype.title.index" => "Indicizzazione",
"plugtype.desc.index" => "Stumenti per l'indicizzazione dei dati e per l'acceso rapido durante le ricerche",
"plugtype.title.meta" => "Attributi Meta Workspace",
"plugtype.desc.meta" => "Caratteristiche addizionali che saranno aggiunte ai workspace",
"plugtype.title.metastore" => "Memorizzazione Metadata",
"plugtype.desc.metastore" => "Varie implementazioni di memorizzazione per i metadati, insieme a file e cartelle",
"plugtype.title.shorten" => "URL Shortening",
"plugtype.desc.shorten" => "Collegamenti ai servizi Web per lo shortening dei link pubblici",
"plugtype.title.uploader" => "Uploader",
"plugtype.desc.uploader" => "Implementazione di uploader, utilizzando varie tecnologie (html, js, java...)",
"plugtype.title.auth" => "Backends Autenticazione",
"plugtype.desc.auth" => "Come i dati degli utenti sono memorizzati nel backend",
"plugtype.title.boot" => "Loader",
"plugtype.desc.boot" => "Plugin unico, per il caricamento del framework.",
"plugtype.title.conf" => "Memorizzazione Configurazioni",
"plugtype.desc.conf" => "Come i dati di configurazione sono memorizzati nel beckend",
"plugtype.title.cache" => "Cache server",
"plugtype.desc.cache" => "Unique plugin to set up the cache server used by the application",
"plugtype.title.feed" => "Memorizzazione Eventi",
"plugtype.desc.feed" => "Implementazioni per la memorizzazione degli eventi (al momento, solo SQL)",
"plugtype.title.log" => "Loggers",
"plugtype.desc.log" => "Invia i log dell'applicazione attraverso vari canali",
"plugtype.title.mailer" => "Mailers",
"plugtype.desc.mailer" => "Strumenti per consentire all'applicazione di inviare email",
"plugtype.title.mq" => "Messaggistica Istantanea",
"plugtype.desc.mq" => "Implementazione di un semplice server PUB/SUB",
"plugtype.title.sec" => "Security",
"plugtype.desc.sec" => "Advanced Security Features",
"plugtype.title.helper" => "Helper",
"plugtype.desc.helper" => "Helpers tools for administrative tasks",
"537" => "Il file è troppo grande! La dimensione massima autorizzata è %i",
"538" => "Errore caricamento: nessun file trovato sul server!",
"539" => "Errore caricamento: il file è parziale",
"540" => "Errore caricamento: impossibile trovare la cartella temporanea",
"541" => "Errore caricamento: non è possibile scrivere nella cartella temporanea",
"542" => "Errore caricamento: un'estensione PHP ha bloccato il processo di caricamento",
"543" => "Risultati limitati a %s.",
"544" => "Visualizza tutti",
"545" => "Remote Share Dialog",
"546" => "This item has been shared with you by %%OWNER%% from a remote location. Do you want to continue ?",
"547" => "Accept",
"548" => "Decline",
"549" => "You have previously accepted this item that was shared with you by %%OWNER%% from a remote location. Do you want to reject it now?",
"550" => "Reject this share",
"551" => "Reject",
"552" => "Please provide password.",
"553" => "Invalid password, please try again. \\n Make sure your Caps Lock is not engaged!",
/* END SENTENCE */
);
