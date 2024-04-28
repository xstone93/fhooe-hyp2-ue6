# Beschreibung

In diesem Teil der Übung - Hypermedia 2 (Teil Datenbanken) - soll basierend auf einem zur Verfügung gestellten Framework eine Anbindung zur Datenbank hergestellt werden. Der Schwerpunkt dieser Übung liegt in den sogenannten *CRUD-Operations* (Create, Receive, Update, und Delete). Das vorhandene Template soll so erweitert werden, dass es möglich ist eine Lilste aller Quizzes abzurufen, Quiz anzulegen, zu bearbeiten und zu löschen. Als Datenbank wird die von uns bereits angelegt ``QuizQuest`` verwendet.

Hinweis: Im Verzeichniz *QuizQuest* befindet sich ein Template, das bereits die relevanten Funktionen zur Verfügung gestellt. Alle Bereiche an denen Anpassungen vorgenommen werden müssen, beginnen mit ``TODO Begin`` und enden mit ``TODO End``.

Das Framework nutzt folgende Packages:

- [Twig](https://twig.symfony.com/)
- [FHOOE Router](https://github.com/Digital-Media/fhooe-router/)

# Teil 1: Das Framework
Machen Sie sich mit dem Framework vertraut. 
Versuch Sie den Router und auch die einzelnen Templates zu verstehen. 
Ein guter Ausgangspunkte dafür ist die Datei ``public/index.php``, in der alle Routen definiert wurden.
Wichtig ist auch die Datei ``src/functions.php``, in der das ``PDO``-Objekt erstellt wird - somit sind hier ev. Anpassungen nötig.

Achtung: Sollten Sie noch einen Container vom letzten Jahr verwenden, vergessen Sie nicht als User ``onlinehshop`` (statt ``hypermedia``) zu verwenden.

> [!NOTE]  
> Hinweis: Bevor das Framework läuft, müssen zuerst alle notwendigen Packages mit ``compose install`` installiert werden.
> Dazu ist es nötig, mit der Kommandozeile in das richtige Verzeichnis zu browsen (QuizQuest-Verzeichnis) und den Befehl einzugeben.
> Sobald alle Pakete nachgeladen wurden, muss in der Datei ``public/index.php`` das Basisverzeichnis bei ``setBasePath`` richtig gesetzt werden (der Pfad zur Applikation ausgehend von Webapp). 

# Teil 2: Abfragen aller Quizzes (3 Punkte)
Die Funktion ``getQuizzes`` (Datei ``src/quiz.php``) soll so erweitert werden, dass alle Quizzes die aktuell offen sind angezeigt werden. 
Offen bedeutet, dass das aktuelles Datum zwischen Beginn- und Enddatum des Quizzes liegt und das der Status ``public`` ist.
Es soll ein Array aller Quizzes zurückgegeben werden.

Zusätzlich soll die Funktion ``getQuiz`` implementiert werden.
Diese Funktion soll ein bestimmtes Quiz (anhand der ID) abfragen und das Objekt zurückgeben. 

# Teil 3: Anlage eines neuen Quizzes (4 Punkte)
In der Datei ``quiz_create.php`` soll das Erstellen eines neuen Quizzes implementiert werden.
Das Formular wird mittels POST übergeben - verarbeiten Sie die Daten.
Wichtig ist, dass hierbei ``Prepared Statements`` verwendet werden.

Hinweis: Die Funktion ``print_r($_POST)`` hilft Ihnen beim Debuggen der Fomulare. 

# Teil 4: Bearbeiten eines Quizzes (4 Punkte)
Bestehende Quizzes sollen bearbeitet werden können.
Dazu wird in der Datei ``quiz_modify.php`` die Funktionalität umgesetzt.
Nutzen Sie für die Umsetzung ``Prepared Statements``.

# Teil 5: Löschen eines Quizzes (2 Punkte)
In der Datei ``quiz_delete.php`` soll der bestehende Code so erweitert werden, dass das angegebene Quiz (Information per $_POST, hier hilft der ``print_r``-Befehl wieder) gelöscht wird.
Nutzen Sie für die Umsetzung ``Prepared Statements``.

# Teil 6: Soft-Delete des Quizzes (3 Punkte)
Ein Soft-Delete (im Unterschied zu einem Hard-Delete) löscht den Datensatz nicht ganz, sondern markiert diesen zu löschen, ohne ihn tatsächlich zu entfernen.
Das hat den Vorteil, dass die Daten nicht unmittelbar aus der Datenbank entfernt werden.

Erweitern Sie die Tabellenstruktur der Tabelle ``Game`` so, dass Sie ein neues Feld ``deletedAt`` einführen. 
Dieses Feld soll den Typ ``DATETIME`` haben und per Default ``NULL`` sein.
Wenn dieses Feld gesetzt ist, kann dieser Datensatz weder abgerufen noch bearbeitet werden.

Implementieren Sie in der ``quiz_delete.php`` Datei diese Funktionalität anstelle des SQL ``DELETE``, aus Teil 5. 
Sie können die grobe Funktionalität weiter verwenden (d. h. POST als REQUEST_METHOD und den $_POST-Wert des Quizzes). 
Kommentieren Sie den Code aus Teil 5 aus, sodass nur noch ein Soft-Delete durchgeführt wird. 

Zusätzlich soll auch das Bearbeiten eines Datensatzes nicht mehr möglich sein, dass ein ``deletedAt`` gesetzt hat. 
Passen Sie die ``WHERE``-Klausel aus Teil 4 entsprechend an. 

