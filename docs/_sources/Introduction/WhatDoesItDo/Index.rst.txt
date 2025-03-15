.. raw:: html

  <style>
    @keyframes fadeIN_Images { 100% { scale : 1 ; opacity : 1 ;}}
    img { scale : 1.1 ; opacity : 0 ; animation : fadeIN_Images 1s ease-in forwards ;}</style>

What does it do?
^^^^^^^^^^^^^^^^

Implements one or more instances of the `Trumbowyg Editor <https://alex-d.github.io/Trumbowyg/>`_ along with specific IDs for each instance (click `here <https://waxcode.net/projects/sites/demo-typowyg>`_ to see a demo).

.. image:: ../../Images/InstanzID.png

Those IDs are used to access the editor to perform further processment of it's content.

.. image:: ../../Images/AccessEditor.png

The editor can be customized providing a proper JSON as described in the `Trumbowyg Documentation <https://alex-d.github.io/Trumbowyg/documentation/>`_.

.. image:: ../../Images/Configuration.png

.. image:: ../../Images/Editor.png

Typowyg also includes a plugin that enables the user to embed or link content of his own google drive.

.. image:: ../../Images/GoogleDrive.png

After clicking the `Google Drive <https://drive.google.com>`_ icon and logging in a browser will popup that enables the user to create and rename directories or upload files prior to select the one to either embed or link to.

.. image:: ../../Images/Browse.png

When embedded google's viewer are used to display the type of file. Those viewer are for example able to zoom into images, navigate PDFs and browse ZIP-Files.

.. image:: ../../Images/EmbeddedViewing.png

Simply linking text to `Google Drive <https://drive.google.com>`_ content is, of course, also possible.