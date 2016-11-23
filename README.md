#Document for usage

1.This layout installer make codeigniter to view with layout and able to use element file.

2.Originally in CI, every action method need to load view file.
With this layout structure, It will load view file automatically depending on your class and method.

3.installer will create "My_Controller.php" in "core" directory. Therefore when you create a new controller in "controller" directory,
your controller class must extend "My_controller" not to "CI_Controller".

4.if you  call www.yourdomain.com/controller/method 
It will load "method.php" in "views\controller" folder, please note that controller folder will not automatically create for you.

5."views\layout\main.php" is a default layout file and you can change by using  "$this->layout('my_layout')" .
    to hide layout data, use " $this->layout(false) ".
   Put "{content}" in your layout file , to display view file output.

6.to send data to view files, use "$this->set('name' , 'mg mg')" or "$this->set( ['name' => 'mg mg'] )" .

7.to send data to layout , use "$this->setLayoutData('title','My Home Page')" .
   to display layout data in layout , use " layoutData('title') ".

8.to get element file in your view file, use " element('sidebar') " .

9.if do not want any output from layout and view, use " setTemplate(false) ".
   to change default view file, use " setTemplate('another_view') ".
   to change other view file in another path, use "setTemplate('other_view','another/path/ ')".