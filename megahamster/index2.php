<?php

include 'vendor/autoload.php';


$view = new \TYPO3Fluid\Fluid\View\TemplateView();
$paths = $view->getTemplatePaths();
$paths->setTemplatePathAndFilename('./index2.html');

class teacher {
    private $name;
    private $hobby;

    public function getName() {
        return $this->name;
    }

    public function getHobby() {
        return $this->hobby;
    }

    public function __construct($name, $hobby) {
        $this->name = $name;
        $this->hobby = $hobby;
    }
}

$values['user'][] = new teacher("WSF", "Coden");
$values['user'][] = new teacher("STF", "tanzen");
$values['user'][] = new teacher("KSP", "coden");
$view->assignMultiple($values);

echo $view->render();

//TODO: DIese und main anch megahamster kopieren