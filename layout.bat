SET var=%cd%
cd %var%
mkdir application\views\elements
mkdir application\views\layout
move "layout_install\main.php" application\views\layout
move "layout_install\layout_class.php" application\core
move "layout_install\My_Controller.php" application\core
move "layout_install\layout_helper.php" application\helpers
move "layout_install\layout_readme.txt".
start layout_readme.txt
rmdir layout_install
del layout.bat
Pause