.. raw:: html

  <style>
    @keyframes fadeIN_Images { 100% { scale : 1 ; opacity : 1 ;}}
    img { scale : 1.1 ; opacity : 0 ; animation : fadeIN_Images 1s ease-in forwards ;}</style>

Cosa fa questa estensione?
^^^^^^^^^^^^^^^^^^^^^^^^^^

Implementa una o più istanze del `Trumbowyg Editor <https://alex-d.github.io/Trumbowyg/>`_ ciascuna con ID specifici (`cliccare qui <https://waxcode.net/projects/sites/demo-typowyg>`_ per vedere una demo dal vivo).

.. image:: ../../Images/InstanzID.png

Questi ID vengono utilizzati per indirizzare la rispettiva istanza dell'editor e per elaborare ulteriormente il suo contenuto.

.. image:: ../../Images/AccessEditor.png

L'editor è personalizzato tramite un JSON corrispondente, come descritto nella documentazione di `Trumbowyg <https://alex-d.github.io/Trumbowyg/documentation/>`_.

.. image:: ../../Images/Configuration.png

.. image:: ../../Images/Editor.png

Typowyg include anche un plugin che consente all'utente di incorporare o collegare il proprio Google Drive nell'editor.

.. image:: ../../Images/GoogleDrive.png

Dopo aver cliccato sull'icona di `Google Drive <https://drive.google.com>`_ e aver effettuato l'accesso, si apre una finestra di dialogo con un browser in cui l'utente può rinominare e creare directory o caricare file prima di selezionare il file da incorporare o collegare.

.. image:: ../../Images/Browse.png

Il contenuto incorporato viene visualizzato utilizzando le visualizzatori di Google. Questi possono, ad esempio, ingrandire le immagini, navigare nei PDF o navigare nei file ZIP.

.. image:: ../../Images/EmbeddedViewing.png

Naturalmente è anche possibile collegare un testo con un contenuto del proprio `Google Drive <https://drive.google.com>`_.