<?php

interface Publicacao {
 
    //metodos
    public function abrir();
    public function fechar();
    public function folhear($p);
    public function avancarPag();
    public function voltarPag();
    
}
