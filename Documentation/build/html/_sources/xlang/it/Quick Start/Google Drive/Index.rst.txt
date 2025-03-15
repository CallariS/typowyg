.. raw:: html

  <style>
    @keyframes fadeIN_Images { 100% { scale : 1 ; opacity : 1 ;}}
    img { scale : 1.1 ; opacity : 0 ; animation : fadeIN_Images 1s ease-in forwards ;}</style>

Google Drive Plugin
-------------------

- Configura il plugin `Google Drive <https://drive.google.com>`_.

.. code-block:: json

   "plugins" : {
         "WaXCode_OnlineStorage_Google" : {
         "clientID"            : "00000000-xxxxxx.apps.googleusercontent.com",
         "apiKey"              : "xxxxx",
         "scopes"              : "https://www.googleapis.com/auth/drive",
         "cDriveLinkIcon"      : "/ResolveURN?uid=184",
         "cDriveEmbedIcon"     : "/ResolveURN?uid=187",
         "cDriveDirecotryIcon" : "/ResolveURN?uid=188",
         "cDriveRenameIcon"    : "/ResolveURN?uid=190",
         "cDriveUploadIcon"    : "/ResolveURN?uid=191",
         "cDriveLoaderHTML"    : "/ResolveURN?uid=186"}}

Oltre a specificare gli URL per le singole icone, sono necessari l'ID del client di `Google Drive, la chiave API e gli scopes da richiedere <https://console.cloud.google.com/apis/credentials?hl=en>`_. È quindi necessaria la registrazione dell'applicazione nello `Google Workspace <https://developers.google.com/drive/api/quickstart/js?hl=en>`_.

- Definire che la libreria di `Google Drive <https://drive.google.com>`_ deve essere caricata.

.. image:: ../../Images/GoogleDriveLibrary.png

L'editor avrà quindi un pulsante con il logo di `Google Drive <https://drive.google.com>`_.