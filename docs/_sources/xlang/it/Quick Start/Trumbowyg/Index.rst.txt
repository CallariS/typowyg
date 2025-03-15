.. raw:: html

  <style>
    @keyframes fadeIN_Images { 100% { scale : 1 ; opacity : 1 ;}}
    img { scale : 1.1 ; opacity : 0 ; animation : fadeIN_Images 1s ease-in forwards ;}</style>

Trumbowyg Editor
----------------

- Aggiungere il Typoscript del visualizzatore al modello del sito.

.. image:: ../../Images/TypoScript.png


- Aggiungere il visualizzatore Typowyg al contenuto della pagina.

.. image:: ../../Images/AddEditor.png
.. image:: ../../Images/AddedEditor.png


- Aprire la configurazione dell'elemento, passare alla palette Typo WYG e inserire un ID istanza.

.. image:: ../../Images/InstanzID.png

- Inserire la corrispondente `Configurazione <https://alex-d.github.io/Trumbowyg/documentation/plugins/>`_.

.. image:: ../../Images/Config.png

- Le librerie del plugin da caricare (ad esempio, se nella configurazione si usa `speechrecognition <https://alex-d.github.io/Trumbowyg/documentation/plugins/#plugin-speechrecognition>`_, è necessario aggiungere qui anche la libreria speechrecognition, in modo che questa funzionalità sia disponibile e il pulsante del microfono sia visualizzato nell'editor).

.. image:: ../../Images/PluginLibraries.png

- Utilizzare Javascript per accedere al contenuto inserito dall'utente nell'editor.

.. image:: ../../Images/AccessEditor.png