# assunto 6: include, require e query String

# A importação de arquivos 

#A importação

#A FUNÇÃO INCLUDE ()

#-> PODEMOS INSERIR O CONTEUDO DE UM ARQUIVO DENTRO DE OUTRO ARQUIVO USANDO A FUNÇÃO INCLUDE().

#ex. - script php que calcula a soma de dois numeros (funcoes.php):

#<?php
#function soma($a, $b){
#    return $a + $b;
#}

#<?php
#include('funcoes.php');

#$resultado = soma(5, 10);
#echo "A soma é: " . $resultado;

#?>


#Ja na função " include()" temos funcionamento igual ao da função include(),porém o arquivo

# a função require importa arquivos, porém, caso o mesmo não seja encontrado, um erro fatal é gerado e a execução do script é interrompida.

# na função require_once, o arquivo é incluído apenas uma vez, evitando problemas de redeclaração de funções.
/////
# faz uma pasta chamada funcoes.php

<?php

    function soma($a, $b);
    return $a + $b

///// 
# faz uma pasta calcula.php
<?php

    include_once "funcoes.php";

    echo "soma = " .soma(3,2);
    echo "<br>";
    echo "subtração"


#função require()
    <?php
    include_once "funcoes.php";
    include_once "funcoes.php"; // não vai dar erro pq é include_once
    echo "soma = " .soma(3,2);
    echo "<br>";
    echo "subtração"
    echo "subtração"
    echo "subtração"


#exercicio
# Vamos criar um mini-projeto chamado MeuSite.com.
#• Crie uma pasta chamada MeuSite dentro da pasta
#htdocs do Xampp.
#• Depois, crie 5 arquivos:
#– index.php
#– quemsomos.php
#– clientes.php
#– faleconosco.php
#– principal.php
#• Vamos criar a index.php para receber a estrutura de
#cada página dentro de si. Ela terá o menu, topo e rodapé do
#site.
#• As demais páginas terão apenas o seu conteúdo.
#• Em fale conosco, vamos criar um formulário que envie a
#mensagem do visitante.
#• Adicional: a página Index.php pode conter apenas Includes,
#ou seja, crie arquivos como topo.php, menu.php, rodape.php
#e apenas inclua através do include_once() dentro do arquivo
#index