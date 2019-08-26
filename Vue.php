<?php

class Vue {
    private $fichier;

    private $titre;

    public function __construct($action) {
        $this->fichier = "vues/vue" . $action . ".php";
    }

    public function generer($donnes) {
        $contenu = $this->genererFichier($this->fichier, $donnes);
        $vue = $this->genererFichier('vues/template.php',
            array('titre' => $this->titre, 'contenu' => $contenu));

        echo $vue;
    }

    private function genererFichier($fichier, $donnes) {
        if(file_exists($fichier)) {
            extract($donnes);
            ob_start();
            require $fichier;
            return ob_get_clean();
        }
        else {
            throw new Exception("Fichier " . $fichier . "introuvable");
        }
    }
}
