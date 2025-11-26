paginadeteste

<!DOCTYPE html>
<head>   
   <title>Exemplo especificidade de seletores</title>
   <style>
      /*regra 1*/ li{color:red;}
      /*regra 2*/ .churras{color:green;}
      /*regra 3*/ .fruta{color:gray}
      /*regra 4*/ li+li.churras{color: black;}
      /*regra 5*/ .churras[draggable="true"]{color: magenta;}
      /*regra 6*/ #lip1,#lip2,#lip3{color:blue}
      /*regra 7*/ #lip3.fruta{color:orange}
      /*regra 8*/ ol>li.churras#lip5{color:purple}
   </style>
</head>
<body>   
   <ol>
   <!--item 1--> <li id="lip0">Abacaxi</li> <!--fica vermelho-->
   <!--item 2--> <li           class="fruta">Melão</li> <!--fica cinza-->
   <!--item 3--> <li id="lip2" class="fruta">Pera</li> <!--fica azul-->
   <!--item 4--> <li id="lip3" class="fruta">Uva</li> <!--fica laranja -->
   <!--item 5--> <li id="lip4" class="fruta">Maçã</li> <!--fica cinza-->
   <!--item 6--> <li           class="churras">Carne</li> <!--fica preto-->
   <!--item 7--> <li           class="churras">Linguiça</li> <!--fica preto-->
   <!--item 8--> <li id="lip7" class="churras" draggable="true">Pão de alho</li> <!--e fica magenta-->
   </ol>   
</body>
</html>
 