.. raw:: html

  <style>
    @keyframes fadeIN_Images { 100% { scale : 1 ; opacity : 1 ;}}
    img { scale : 1.1 ; opacity : 0 ; animation : fadeIN_Images 1s ease-in forwards ;}</style>

Trumbowyg Editor
----------------

- Das Viewer-Typoscript zur Site - Template hinzufügen.

.. image:: ../../Images/TypoScript.png


- Den Typowyg - Viewer zum Seiteninhalt hinzufügen.

.. image:: ../../Images/AddEditor.png
.. image:: ../../Images/AddedEditor.png


- Die Konfiguration des Elements öffnen, zur Typo WYG Palette wechseln und eine Instanz-ID eintragen.

.. image:: ../../Images/InstanzID.png

- Eine entsprechende `Konfiguration <https://alex-d.github.io/Trumbowyg/documentation/plugins/>`_ eingeben.

.. image:: ../../Images/Config.png

- Die zu ladenden Plugin-Bibliotheken (wenn z.B. `speechrecognition <https://alex-d.github.io/Trumbowyg/documentation/plugins/#plugin-speechrecognition>`_ in der Konfiguration genutzt wird, ist es auch notwendig die Speechrecognition - Bibliothek hier hinzuzufügen damit diese Funktionalität zur Verfügung steht und der Mikrofon - Button im Editor angezeigt wird ) einbinden.

.. image:: ../../Images/PluginLibraries.png

- Javascript nutzen um auf den vom Nutzer in den Editor eingegeben Inhalt zuzugreifen.

.. image:: ../../Images/AccessEditor.png