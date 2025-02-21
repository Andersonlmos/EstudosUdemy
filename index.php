<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assests/style.css" />
    <title>Curso PHP</title>
  </head>
  <body>
    <header class="cabecalho">
      <h1>Curso PHP</h1>
      <h2>Indice dos Exercicios</h2>
    </header>
    <main class="principal">
      <div class="conteudo">
       <nav class="modulos">
        <div class="modulo verde">
          <h3>Módulo 01 - Básico</h3>
          <ul>
            <li><a href="exercicio.php?dir=basic&file=exercicioa">Olá PHP</a></li>
            <li><a href="exercicio.php?dir=basic&file=html">Integração HTML</a></li>
            <li><a href="exercicio.php?dir=basic&file=css">Integração CSS</a></li>
            <li><a href="exercicio.php?dir=basic&file=comentarios">Comentarios</a></li>
          </ul>
        </div>
        <div class="modulo vermelho">
          <h3>Módulo 02 - Tipos</h3>
          <ul>
            <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
            <li><a href="exercicio.php?dir=tipos&file=float">tipo Float</a></li>
            <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Op. Aritmeticas PHP</a></li>
            <li><a href="exercicio.php?dir=tipos&file=desafiopre">Desafio Precedencia</a></li>
            <li><a href="exercicio.php?dir=tipos&file=string">String PHP</a></li>
            <li><a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String</a></li>
            <li><a href="exercicio.php?dir=tipos&file=booleano">Tipo Booleano</a></li>
            <li><a href="exercicio.php?dir=tipos&file=conversoes">Conversões</a></li>
          </ul>
        </div>
        <div class="modulo amarelo">
          <h3>Módulo 03 - Variáveis</h3>
          <ul>
            <li><a href="exercicio.php?dir=variaveis&file=basico">Variáveis</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=desafio_equacao">Desafio Equação</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuiçoes</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variaveis de variaveis</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=desafio_variaveis_variaveis"> Desafio Variaveis de variaveis</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=valor_referencia"> Valor vs Referência</a></li>
            <li><a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a></li>
          </ul>
        </div>
        <div class="modulo roxo">
          <h3>Módulo 04 - Controle</h3>
          <ul>
            <li><a href="exercicio.php?dir=controle&file=if_else">IF e ELSE</a></li>
            <li><a href="exercicio.php?dir=controle&file=operadores_relacionais">Op. Relacionais</a></li>
            <li><a href="exercicio.php?dir=controle&file=desafio_pi">Desafio Pi</a></li>
            <li><a href="exercicio.php?dir=controle&file=operadores_logicos">Op. Logicos</a></li>
            <li><a href="exercicio.php?dir=controle&file=desafio_operadores_logicos">Desafio Op. Lógicos</a></li>
            <li><a href="exercicio.php?dir=controle&file=operador_ternario">Operador Ternário</a></li>
            <li><a href="exercicio.php?dir=controle&file=switch">Switch</a></li>
            <li><a href="exercicio.php?dir=controle&file=desafio_switch">Desafio Switch</a></li>
          </ul>
        </div>
        <div class="modulo cinza">
          <h3>Módulo 05 - Array</h3>
          <ul>
            <li><a href="exercicio.php?dir=array&file=basico">Array</a></li>
            <li><a href="exercicio.php?dir=array&file=mapa">Mapa</a></li>
            <li><a href="exercicio.php?dir=array&file=desafio_index">Desafio Index</a></li>
            <li><a href="exercicio.php?dir=array&file=desafio_meses">Desafio Meses</a></li>
            <li><a href="exercicio.php?dir=array&file=operacoes">Operações</a></li>
            <li><a href="exercicio.php?dir=array&file=desafio_sorteio">Desafio Sorteio</a></li>
            <li><a href="exercicio.php?dir=array&file=get">$_GET</a></li>
            <li><a href="exercicio.php?dir=array&file=post">$_POST</a></li>
            <li><a href="exercicio.php?dir=array&file=comparacao">Comparação Array</a></li>
          </ul>
        </div>
        <div class="modulo azul">
          <h3>Módulo 06 - Repetições</h3>
          <ul>
            <li><a href="exercicio.php?dir=repeticoes&file=for">Laço for</a></li>
            <li><a href="exercicio.php?dir=repeticoes&file=desafio_for">Desafio for</a></li>
            <li><a href="exercicio.php?dir=repeticoes&file=foreach">Foreach</a></li>
            <li><a href="exercicio.php?dir=repeticoes&file=break_continue">Break/Continue</a></li>
            <li><a href="exercicio.php?dir=repeticoes&file=desafio_impressao">Desafio Impressão</a></li>
            <li><a href="exercicio.php?dir=repeticoes&file=while">While/do-while</a></li>
            <li><a href="exercicio.php?dir=repeticoes&file=desafio_tabela">Desafio Tabela</a></li>
            <li><a href="exercicio.php?dir=repeticoes&file=desafio_tabela2">Desafio Tabela 02</a></li>
          </ul>
        </div>
        <div class="modulo rosa">
          <h3>Módulo 07 - Funções</h3>
          <ul>
            <li><a href="exercicio.php?dir=funcoes&file=escopo">Funcoes & Escopo</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=arg_retorno">Argumentos e Retorno</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=palindromo">Desafio Palindromo</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=args_variaveis">Argumentos Variaveis</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=arg_padrao">Argumentos Padrão</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=usando_tipos">Usando Tipos</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=anonimas">Funções Anônimas</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=closure_callable">Closure & Callable</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=recursividade">Recursividade</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=desafio_recursividade">Desafio Recursividade</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=retornando_funcao">Retornando Função</a></li>
            <li><a href="exercicio.php?dir=funcoes&file=map_filter">Map & Filter</a></li>
          </ul>
        </div>
        <div class="modulo laranja">
          <h3>Módulo 08 - Paradigma O.O</h3>
          <ul>
            <li><a href="exercicio.php?dir=classe_objetos&file=classe">Primeira Classe</a></li>
            <li><a href="exercicio.php?dir=classe_objetos&file=desafio_data">Desafio Data</a></li>
            <li><a href="exercicio.php?dir=classe_objetos&file=construtor_destrutor">Const. e Destrutor</a></li>
            <li><a href="exercicio.php?dir=classe_objetos&file=heranca">Herança</a></li>
            <li><a href="exercicio.php?dir=classe_objetos&file=visibilidade">Visibilidade</a></li>
            <li><a href="exercicio.php?dir=classe_objetos&file=static">Membros Estáticos</a></li>
            <li><a href="exercicio.php?dir=classe_objetos&file=interface">Interface</a></li>
            <li><a href="exercicio.php?dir=classe_objetos&file=abstract">Abstract</a></li>
            <li><a href="exercicio.php?dir=classe_objetos&file=desafio_erro">Desafio 7 Erros</a></li>
            <li><a href="exercicio.php?dir=classe_objetos&file=final">Modificador Final</a></li>
            <li><a href="exercicio.php?dir=classe_objetos&file=traits_01">Traits #01</a></li>
            <li><a href="exercicio.php?dir=classe_objetos&file=traits_02">Traits #02</a></li>
            <li><a href="exercicio.php?dir=classe_objetos&file=magic_methods">Metodos Magicos</a></li>
          </ul>
        </div>
        <div class="modulo preto">
          <h3>Atividades</h3>
          <ul>
            <li><a href="exercicio.php?dir=atividades&file=calendario">At. Calendario</a></li>
            <li><a href="exercicio.php?dir=atividades&file=formulario">Formulario</a></li>
            <li><a href="#">Exercicio C</a></li>
          </ul>
        </div>
        <div class="modulo verde-escuro">
          <h3>Módulo 10</h3>
          <ul>
            <li><a href="#">Exercicio A</a></li>
            <li><a href="#">Exercicio B</a></li>
            <li><a href="#">Exercicio C</a></li>
          </ul>
        </div>
        <div class="modulo lilas">
          <h3>Módulo 11</h3>
          <ul>
            <li><a href="#">Exercicio A</a></li>
            <li><a href="#">Exercicio B</a></li>
            <li><a href="#">Exercicio C</a></li>
          </ul>
        </div>
        <div class="modulo azul-marinho">
          <h3>Módulo 12</h3>
          <ul>
            <li><a href="#">Exercicio A</a></li>
            <li><a href="#">Exercicio B</a></li>
            <li><a href="#">Exercicio C</a></li>
          </ul>
        </div>
       </nav>
      </div>
    </main>
    <footer class="footer">
      COD3R & ALUNOS <?=date('Y'); ?>
    </footer>
  </body>
</html>
