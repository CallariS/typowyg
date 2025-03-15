.. raw:: html

  <style>
    @keyframes fadeIN_Images { 100% { scale : 1 ; opacity : 1 ;}}
    img { scale : 1.1 ; opacity : 0 ; animation : fadeIN_Images 1s ease-in forwards ;}</style>

Was macht diese Extension?
^^^^^^^^^^^^^^^^^^^^^^^^^^

Implementiert eine oder mehrere Instanzen des `Trumbowyg Editors <https://alex-d.github.io/Trumbowyg/>`_ mit jeweils spezifischen IDs (`hier <https://waxcode.net/projects/sites/demo-typowyg>`_ klicken um eine Live Demo zu sehen).

.. image:: ../../Images/InstanzID.png

Diese IDs werden genutzt um die jeweilige Editorinstanz anzusprechen und dessen Inhalt weiter zu verarbeiten.

.. image:: ../../Images/AccessEditor.png

Der Editor wird über eine entsprechende JSON angepasst wie in der `Trumbowyg Dokumentation <https://alex-d.github.io/Trumbowyg/documentation/>`_ beschrieben.

.. image:: ../../Images/Configuration.png

.. image:: ../../Images/Editor.png

Typowyg enthält zusätzlich auch ein Plugin welches es dem Nutzer erlaubt Dateien die auf seinem Google Drive liegen im Editor einzubetten oder zu verlinken.

.. image:: ../../Images/GoogleDrive.png

Nachdem das `Google Drive <https://drive.google.com>`_ Icon geklickt wurde und der Nutzer sich eingeloggt hat poppt ein Dialogfeld mit einem Browser auf indem der Nutzer Verzeichnisse umbennen und erstellen oder auch Dateien hochladen kann bevor er die Datei zum einbetten oder verlinken auswählt.

.. image:: ../../Images/Browse.png

Eingebetter Inhalt wird mittels der Google-Viewer angezeigt. Diese können z.B. Bilder vergrößern und auch in PDFs sowie in ZIP-Files navigieren.

.. image:: ../../Images/EmbeddedViewing.png

Einen Text mit einem Inhalt auf dem eigenen `Google Drive <https://drive.google.com>`_ zu verlinken ist natürlich auch möglich.