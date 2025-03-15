.. raw:: html

  <style>
    @keyframes fadeIN_Table { 100% { scale : 1 ; opacity : 1 ;}}
    table.docutils                      { border : solid !important ; border-radius : .5em ; box-shadow : 0 0 .5em black ; opacity : 0 ; scale : 1.1 ; animation : fadeIN_Table 1s ease-in forwards ;}
    table.docutils p                    { font-family : monospace ;}
    table.docutils th                   { text-align  : center ;}
    table.docutils td                   { border : none ;}
    table.docutils tr:nth-child( even ) { background-color : grey ; color : white ;}
    table.docutils thead                { background-color : lightgrey ;}</style>

Anpassungen
^^^^^^^^^^^

  Der `Google Drive <https://drive.google.com>`_ Browser kann unter anderem mit folgenden CSS - Selektoren angepasst werden

    ========================================================================================      ========================================================================================================================
    Selector                                                                                      Description
    ========================================================================================      ========================================================================================================================
    .-XC_OS_GD.--Link                                                                             Die Datei- & Verzeichnis links.
    .-XC_OS_GD.--Embedded                                                                         Das <iframe> welches den Inhalt von Google einbettet.
    .-XC_OS_GD.--Renamer                                                                          Der <input> welcher genutzt wird um einen Verzeichnisnamen zu ändern.
    .-XC_OS_GD.--BackPanel                                                                        Die <div> Die den "Zurück zum übergeordneten Verzeichnis" - <button> und den Namen des aktuellen Verzeichnisses enthält.
    .-XC_OS_GD.--BackPanel #BackButton                                                            Der "back to upper directory" - <button>.
    .-XC_OS_GD.--BackPanel span                                                                   Der Name des aktuellen Verzeichnisses.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList                                         Die <div> welche die Auflistung der Dateien und Verzeichnisse beinhaltet.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList.--file                                  Alle Dateien in der Auflistung der Dateien und Verzeichnisse.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList.--directory                             Alle Verzeichnisse in der Auflistung der Dateien und Verzeichnisse.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList #Element:hover #FolderActions           Die <div> welche den Umbennen <button> enthält.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList #Element #Actions                       Die <div> welche die Einbetten- und Verlinken- <button>s enthält.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList #Element #FolderActions #btnRename      Der Verzeichnis umbennen <button>.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList #Element #Actions #LinkFile             Der Datei verlinken <button>.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList #Element #Actions #EmbedFile            Der Datei einbetten <button>.
    .trumbowyg-modal-title #Close                                                                 Der Dialog schließen <button>.
    .trumbowyg-modal-title #Options                                                               Die <div> welchen den Verzeichnis erstellen und upload <button> enthält.
    ========================================================================================      ========================================================================================================================