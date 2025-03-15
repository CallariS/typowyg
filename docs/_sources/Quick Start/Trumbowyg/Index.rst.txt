.. raw:: html

  <style>
    @keyframes fadeIN_Images { 100% { scale : 1 ; opacity : 1 ;}}
    img { scale : 1.1 ; opacity : 0 ; animation : fadeIN_Images 1s ease-in forwards ;}</style>

Trumbowyg Editor
----------------

- Add the Viewer-Typoscript to the site's template.

.. image:: ../../Images/TypoScript.png


- Add the Typowyg - Viewer to your page content.

.. image:: ../../Images/AddEditor.png
.. image:: ../../Images/AddedEditor.png


- Enter the element's configuration, go to the Typo WYG tab and assign an appropriate ID.

.. image:: ../../Images/InstanzID.png

- Assign a proper `configuration <https://alex-d.github.io/Trumbowyg/documentation/plugins/>`_.

.. image:: ../../Images/Config.png

- Select the Plugin-Libraries to load (if `speechrecognition <https://alex-d.github.io/Trumbowyg/documentation/plugins/#plugin-speechrecognition>`_ is used in the configuration, for example, it is neccessary to select the speechrecognition library here in order for the functionality to work / appear in the editor's button pane).

.. image:: ../../Images/PluginLibraries.png

- Use Javascript to access the data entered into the editor.

.. image:: ../../Images/AccessEditor.png