.. raw:: html

  <style>
    @keyframes fadeIN_Table { 100% { scale : 1 ; opacity : 1 ;}}
    table.docutils                      { border : solid !important ; border-radius : .5em ; box-shadow : 0 0 .5em black ; opacity : 0 ; scale : 1.1 ; animation : fadeIN_Table 1s ease-in forwards ;}
    table.docutils p                    { font-family : monospace ;}
    table.docutils th                   { text-align  : center ;}
    table.docutils td                   { border : none ;}
    table.docutils tr:nth-child( even ) { background-color : grey ; color : white ;}
    table.docutils thead                { background-color : lightgrey ;}</style>

Customzation
^^^^^^^^^^^^

  The `Google Drive <https://drive.google.com>`_ Browser can be customized using, among others, follwing CSS-Selectors

    ========================================================================================      =============================================================================================
    Selector                                                                                      Description
    ========================================================================================      =============================================================================================
    .-XC_OS_GD.--Link                                                                             The File- & Directory links.
    .-XC_OS_GD.--Embedded                                                                         The <iframe> embedding Google Drive content.
    .-XC_OS_GD.--Renamer                                                                          The <input> used to rename a directory.
    .-XC_OS_GD.--BackPanel                                                                        The <div> containing the "back to upper directory" - <button> and the current directory's name.
    .-XC_OS_GD.--BackPanel #BackButton                                                            The "back to upper directory" - <button>.
    .-XC_OS_GD.--BackPanel span                                                                   The current directory's name.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList                                         The <div> containing the file listing.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList.--file                                  All file-entries in the file listing.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList.--directory                             All directory-entries in the file listing.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList #Element:hover #FolderActions           The rename button's container - <div>.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList #Element #Actions                       The embed and link button's container - <div>.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList #Element #FolderActions #btnRename      The rename directory <button>.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList #Element #Actions #LinkFile             The link file <button>.
    .---WaXCode.--T3.--CX_Editor.--GoogleDrive.--FileList #Element #Actions #EmbedFile            The embed file <button>.
    .trumbowyg-modal-title #Close                                                                 The close modal <button>.
    .trumbowyg-modal-title #Options                                                               The <div> containing the create directory and upload <button>s.
    ========================================================================================      =============================================================================================