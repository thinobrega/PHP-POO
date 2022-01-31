<?php
require_once './AcoesVideo.php';
class Video implements AcoesVideo{
  
    //atributos
    private $titulo;
    private $avaliação;
    private $views;
    private $curtidas;
    private $reproduzindo;
    
    /*============================================
    * construct 
    *============================================ */ 
  public function __construct($titulo) {
      $this->titulo = $titulo;
      $this->avaliação = 1;
      $this->views = 0;
      $this->curtidas = 0;
      $this->reproduzindo = false;
  }

  
    
   /*============================================
    * metodos abstratos 
    *============================================ */ 
    
    
    public function like() {
        $this->curtidas ++;
    }

    public function pause() {
        $this->reproduzindo = false;
    }

    public function play() {
        $this->reproduzindo = true;
    }
    
    
    /*============================================
    * getters and setters 
    *============================================ */ 
    
  public function getTitulo() {
      return $this->titulo;
  }

  public function getAvaliação() {
      return $this->avaliação;
  }

  public function getViews() {
      return $this->views;
  }

  public function getCurtidas() {
      return $this->curtidas;
  }

  public function getReproduzindo() {
      return $this->reproduzindo;
  }

  public function setTitulo($titulo): void {
      $this->titulo = $titulo;
  }

  public function setAvaliação($avaliação): void {
     
      $media = ($this->avaliação + $avaliação)/$this->views;
      $this->avaliação = $media;
  }

  public function setViews($views): void {
      $this->views = $views;
  }

  public function setCurtidas($curtidas): void {
      $this->curtidas = $curtidas;
  }

  public function setReproduzindo($reproduzindo): void {
      $this->reproduzindo = $reproduzindo;
  }


    
    
    

}
