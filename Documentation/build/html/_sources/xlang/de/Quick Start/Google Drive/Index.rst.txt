.. raw:: html

  <style>
    @keyframes fadeIN_Images { 100% { scale : 1 ; opacity : 1 ;}}
    img { scale : 1.1 ; opacity : 0 ; animation : fadeIN_Images 1s ease-in forwards ;}</style>

Google Drive Plugin
-------------------

- Das `Google Drive <https://drive.google.com>`_ - Plugin konfigurieren.

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

Neben der Angabe der URLs zu den einzelnen Icons sind die `Google Drive Client-ID, der API-Key and die anzufordenden Scopes <https://console.cloud.google.com/apis/credentials?hl=en>`_ notwendig. Ein Registrierung der den Editor nutzenden App im `Google Workspace <https://developers.google.com/drive/api/quickstart/js?hl=en>`_ ist also erforderlich.

- Die `Google Drive <https://drive.google.com>`_ Bibliothek einbinden.

.. image:: ../../Images/GoogleDriveLibrary.png

Der Editor wird dann einen `Google Drive <https://drive.google.com>`_ Logo - Button haben.