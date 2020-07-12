var rodada = 1;
var matrizJogo = Array(3);

matrizJogo['a'] = Array(3);
matrizJogo['b'] = Array(3);
matrizJogo['c'] = Array(3);

matrizJogo['a'][1] = 0;
matrizJogo['a'][2] = 0;
matrizJogo['a'][3] = 0;

matrizJogo['b'][1] = 0;
matrizJogo['b'][2] = 0;
matrizJogo['b'][3] = 0;

matrizJogo['c'][1] = 0;
matrizJogo['c'][2] = 0;
matrizJogo['c'][3] = 0;

$(document).ready( 
    function(){
        $('#iniciar').click(
            function(){
                if($('#entradaJogador1').val() == ''){
                    alert('Apelido do jogador 1 nao foi preenchido');
                    return false;
                }
                if($('#entradaJogador2').val() == ''){
                    alert('Apelido do jogador 2 nao foi preenchido');
                    return false;
                }

            //exibir os apelidos
            $('#nomeJogador1').html($('#entradaJogador1').val());
            $('#nomeJogador2').html($('#entradaJogador2').val());
            
            $('#paginaInicial').hide();
            $('#palcoJogo').show();
            });

            $('.quadrado').click(
            function(){
                var campoClicado = this.id;
                $('#' +campoClicado).off(); // limpar o evento de clique
                jogada(campoClicado);
            });

            function jogada(id){
                var icone = '';
                var ponto = 0;

                //usando o mod pra definir quem é o jogador da vez
                if((rodada % 2) == 1){ // atribui  par para 1 e impar para o outro jogador
                    icone = 'url("imagens/marcacao_1.png")';
                    ponto = -1;
                }else{
                    icone = 'url("imagens/marcacao_2.png")';
                    ponto = 1;
                }
                rodada++;
                
                $('#'+id).css('background-image', icone);
                var linhaColuna = id.split(''); //separa a letra e o numero 
                
                matrizJogo[linhaColuna[0]][linhaColuna[1]] = ponto;
                verificaCombinacao();
            }

            function verificaCombinacao(){
                var i=1;
                var pontos = 0;

                //verifica na horizontal
                for(i=1; i<=3; i++){
                    pontos = pontos + matrizJogo['a'][i];
                }
                ganhador(pontos);

                pontos = 0; //zerando a variavel para fazer a nova verificação

                for(i=1; i<=3; i++){
                    pontos = pontos + matrizJogo['b'][i];
                }
                ganhador(pontos);

                pontos = 0; 

                for(i=1; i<=3; i++){
                    pontos = pontos + matrizJogo['c'][i];
                }
                ganhador(pontos);

                //verifica na vertical
                var j;
                for(j=1; j<=3; j++){
                    pontos = 0;
                    pontos += matrizJogo['a'][j];
                    pontos += matrizJogo['b'][j];
                    pontos += matrizJogo['c'][j];

                    ganhador(pontos);
                }

                //verifica na vertical
                pontos = 0;
                pontos = matrizJogo['a'][1] + matrizJogo['b'][2] +  matrizJogo['c'][3];
                ganhador(pontos);

                pontos = 0;
                pontos = matrizJogo['a'][3] + matrizJogo['b'][2] +  matrizJogo['c'][1];
                ganhador(pontos);
            }

            function ganhador(pontos){
                if(pontos == -3){
                    var jogada1 = $('#entradaJogador1').val();
                    alert(jogada1 + ' é o vencedor');
                    $('.quadrado').off(); //desabilita o clique apos o termino da partida
                    
                }else if(pontos == 3){
                    var jogada2 = $('#entradaJogador2').val();
                    alert(jogada2 + ' é o vencedor');
                    $('.quadrado').off();
                }
            }
    }
);
