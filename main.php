<?php


// // Explicação linha a linha do código (PROVEDOR DE INTERNET)
// // class abstract: pode ser usada de base para outra classe.
// abstract class PlanoInternet{


//   // tres  propriedades, protegidas onde só podem ser acessadas pelas suas filhas (subclasses ) ou só por dentro da propria classe declarada.
//   protected $nome;
//   protected $velocidade;
//   protected $preco;
  
//   // construct: serve para inicializar os atributos de um objeto quando ele é criado.
//   // public: pode ser acessado por algo fora de classe 
//   public function __construct($nome, $preco, $velocidade){
    
//     // $this->nome = $nome;: aqui será atribuido o valor de "$nome" para "$this->nome"(o mesmo acontece com as demais).
//     $this->nome = $nome;
//     $this->preco = $preco;
//     $this->velocidade= $velocidade;
//   }
  
//   // uma function que é publica e abstrata que recebe o nome detalhes.  Este método será implementado nas classes filhas para fornecer os detalhes específicos de cada plano.
  
//   abstract public function detalhes();
// }

// // declara que "class PlanoBasico" é uma subclasse da classe "Plano de internet", herda todas as propriedades e métodos públicos e protegidos da classe PlanoInternet.
// class PlanoBasico extends PlanoInternet{
  
//   // uma propriedade privada que recebe o valor "Suporte Básico"
//   // private: indica que esse membro só pode ser acesso dentro da propria classe que foi declarada
//   private $diferencial = "Suporte básico";
  
//   // esse é o construtor da classe PlanoBasico, ele diz que a class pai é PlanoInternet.
//   public function __construct($nome, $preco, $velocidade){
    
//     // é utilizada para incializar as propriedades
//     // parent: para chamar o construtor da classe pai, que é a classe PlanoInternet.

//     parent::__construct($nome, $preco, $velocidade);
//   }
  
//    // esse é o metodo detalhes() da classe PlanoBasico, implementa  esse método para clase pai PlanoInternet.
//   public function detalhes(){
    
//     // retorna uma strign com as informações nome,preço,velocidade e diferencial
//     return "Nome: " . $this->nome . "\n" . "Preço: " . $this->preco . "\n" . "Velocidade: " . $this->velocidade . "\n" . "Diferencial: " . $this->diferencial . "\n";
//   }
// }

// // a mesma coisa acontece com a class PlanoAvançado

// class PlanoAvançado extends PlanoInternet{
  
//   private $diferencial = "Suporte premium e serviço de streaming gratuito";

//   public function __construct($nome, $preco, $velocidade){
//     parent::__construct($nome, $preco, $velocidade);
//   }

//   public function detalhes(){
//     return "Nome: " . $this->nome . "\n" . "Preço: " . $this->preco . "\n" . "Velocidade: " . $this->velocidade . "\n" . "Diferencial: " . $this->diferencial . "\n";
//   }
// }

// // cria um objeto da classe PlanoBasico que passa os 3 argumentos, que é armazenado na variavel $planoA.
// $planoA = new PlanoBasico("Plano A", 79.99, "100 MB");
// // vai imprimir os 3 argumentos implementados no metodo detalhes().
// echo $planoA->detalhes() . "\n\n";


// // cria um objeto da classe PlanoAvançado que passa os 3 argumentos, que é armazenado na variavel $planoB.
// $planoB = new PlanoAvançado("Plano B", 149.99, "500 MB");
// // vai imprimir os 3 argumentos implementados no metodo detalhes().
// echo $planoB->detalhes();



// --------------------------------------- CÓDIGO LIMPO SEM AS DESCRIÇÕES ----------------------------------------------



abstract class PlanoInternet{
  protected $nome;
  protected $velocidade;
  protected $preco;

  public function __construct($nome, $preco, $velocidade){
    $this->nome = $nome;
    $this->preco = $preco;
    $this->velocidade = $velocidade;
  }
  abstract public function detalhes();
}

class PlanoBasico extends PlanoInternet{

  private $diferencial = "Suporte básico";

  public function __construct($nome, $preco, $velocidade){
    parent::__construct($nome, $preco, $velocidade);
  }

  public function detalhes(){
    return "Nome: " . $this->nome . "\n" . "Preço: " . $this->preco . "\n" . "Velocidade: " . $this->velocidade . "\n" . "Diferencial: " . $this->diferencial . "\n";
  }
}

class PlanoAvançado extends PlanoInternet{
  
  private $diferencial = "Suporte premium e serviço de streaming gratuito";

  public function __construct($nome, $preco, $velocidade){
    parent::__construct($nome, $preco, $velocidade);
  }

  public function detalhes(){
    return "Nome: " . $this->nome . "\n" . "Preço: " . $this->preco . "\n" . "Velocidade: " . $this->velocidade . "\n" . "Diferencial: " . $this->diferencial . "\n";
  }
}


$planoA = new PlanoBasico("Plano A", 79.99, "100 MB");
echo $planoA->detalhes() . "\n\n";


$planoB = new PlanoAvançado("Plano B", 149.99, "500 MB");
echo $planoB->detalhes();

