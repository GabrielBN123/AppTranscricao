<?php

// onde será definida todas as confiugurações

class Config
{
    public function baseUrl()
    {
        if (isset($_SERVER['HTTPS'])) {
            $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
        } else {
            $protocol = 'http';
        }
        $base = $protocol . "://" . $_SERVER['HTTP_HOST'] . '/AppTranscricao/';
        return $base;
    }

    public function loadCSS($arquivoCSS)
    {
        echo "<link rel='stylesheet' href='" . $this->baseURl() . "assets/css/$arquivoCSS'> \n";
    }

    public function loadJS($arquivoJS)
    {
        echo "<script src='" . $this->baseURl() . "assets/js/$arquivoJS'></script> \n";
    }

    public function loadView($pagina)
    {
        define('URLBasePage', $_SERVER['DOCUMENT_ROOT'] .  'AppTranscricao/', TRUE);
        include URLBasePage . 'app/view/' . $pagina;
    }
}
