<?php

    class homecontroler{
        public function index(){

            try{

                $colectpostagem = postagem::selecionatodos();

                $loader = new \Twig\Loader\FilesystemLoader('app/View');
                $twig = new \Twig\Environment($loader); 
                $template = $twig->load('home.html');

                $parametros = array();
                $parametros['postagens']= $colectpostagem;

                $conteudo = $template->render($parametros);
                echo $conteudo;

        
              
            }catch(Exception $e){
                echo $e->getMessage();
            }

           

            
        }
    }