.. raw:: html

  <style>
    @keyframes fadeIN_Table { 100% { scale : 1 ; opacity : 1 ;}}
    table.docutils                      { border : solid !important ; border-radius : .5em ; box-shadow : 0 0 .5em black ; opacity : 0 ; scale : 1.1 ; animation : fadeIN_Table 1s ease-in forwards ;}
    table.docutils p                    { font-family : monospace ;}
    table.docutils th                   { text-align  : center ;}
    table.docutils td                   { border : none ;}
    table.docutils tr:nth-child( even ) { background-color : grey ; color : white ;}
    table.docutils thead                { background-color : lightgrey ;}</style>

Personalizzazione
^^^^^^^^^^^^^^^^^

  Il browser di `Google Drive <https://drive.google.com>`_ può essere personalizzato, tra l'altro, con i seguenti selettori CSS

    ========================================================================================      =======================================================================================================
    Selector                                                                                      Description
    ========================================================================================      =======================================================================================================
    .-XC_OS_GD.--Link                                                                             I collegamenti a file e directory.
    .-XC_OS_GD.--Embedded                                                                         Il <iframe> che incorpora il contenuto di Google.
    .-XC_OS_GD.--Renamer                                                                          L'<input> che viene utilizzato per modificare il nome di una directory.
    .-XC_OS_GD.--BackPanel                                                                        Il <div> che contiene il pulsante “Torna alla directory principale” e il nome della directory corrente.
    .-XC_OS_GD.--BackPanel #BackButton                                                            Il “torna alla directory superiore” - <button>.
    .-XC_OS_GD.--BackPanel span                                                                   Il nome della directory corrente.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList                                         Il <div> che contiene l'elenco dei file e delle directory.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList.--file                                  Tutti i file dell'elenco di file e directory.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList.--directory                             Tutte le directory dell'elenco di file e directory.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList #Element:hover #FolderActions           Il <div> che contiene il rinominare <button>.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList #Element #Actions                       Il <div> che contiene i <button> di incorporamento e di collegamento.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList #Element #FolderActions #btnRename      Rinominare la directory <button>.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList #Element #Actions #LinkFile             Collegare il file <button>.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList #Element #Actions #EmbedFile            Incorpora il file <button>.
    .trumbowyg-modal-title #Close                                                                 Chiudere il dialogo <button>.
    .trumbowyg-modal-title #Options                                                               Il <div> che contiene la directory di creazione e il <button> di caricamento.
    ========================================================================================      =======================================================================================================