
var timerId = null //variavel que armazena a chamada da função timeout

function iniciaJogo(){
	var url = window.location.search;//pega a url inteira
	var nivelJogo = url.replace("?", ""); //substitui a ? da url por nada
	var tempoSegundos = 0;

	if(nivelJogo == 1) { //1 fácil -> 120segundos
		tempoSegundos = 120;
	}

	if(nivelJogo == 2) { //2 normal -> 60segundos
		tempoSegundos = 60;
	}
	
	if(nivelJogo == 3) { //3 difícil -> 30segundos
		tempoSegundos = 30;
	}

	//inserindo segundos no span
	document.getElementById('cronometro').innerHTML = tempoSegundos;

	var qtde_baloes = 80;
	
	cria_baloes(qtde_baloes);

	//imprimir qtde baloes inteiros
	document.getElementById('baloesInteiros').innerHTML = qtde_baloes;
	document.getElementById('baloesEstourados').innerHTML = 0;
	contagemTempo(tempoSegundos + 1);
}

function contagemTempo(segundos){
    //setTimeout("funcao", 1000); //executa a função a cada 1 segundo (1000 milisegundos)
    segundos = segundos - 1;
    if(segundos == -1){
        clearTimeout(timerId); //para a execução da função do setTimeout
        gameOver();
        return false;
    }
    document.getElementById('cronometro').innerHTML = segundos;
    timerId = setTimeout("contagemTempo("+segundos+")", 1000);
    //funciona de forma recursiva decrementando os segundos
   
}

function gameOver(){
    alert("Fim de jogo! Você não conseguiu estourar todos os balões a tempo. Tente novamente.");
    remove_eventos_baloes();
}

function cria_baloes(qtde_baloes){

	for(var i = 1; i <= qtde_baloes; i++){

		var balao = document.createElement("img");
		balao.src = 'imagens/balao_azul_pequeno.png';
        balao.style.margin = '10px';
        balao.id = 'b'+ i;
        balao.onclick = function(){ 
            estourar(this);
        }

		document.getElementById('cenario').appendChild(balao);
	}
}
function estourar(e){
    var idBalao = e.id;
    //corrigindo o bug de pontuar ao clicar no mesmo balao
    document.getElementById(idBalao).setAttribute("onclick", ""); //limpa o que esta contido na propriedade onclick do elemento
    document.getElementById(idBalao).src = 'imagens/balao_azul_pequeno_estourado.png';
    pontuacao(-1);
}

function pontuacao(acao){
    var baloesInteiros = document.getElementById('baloesInteiros').innerHTML;
    var baloesEstourados = document.getElementById('baloesEstourados').innerHTML;
    baloesInteiros = parseInt(baloesInteiros);
    baloesEstourados = parseInt(baloesEstourados);

    baloesInteiros = baloesInteiros + acao; // acao = -1
    baloesEstourados = baloesEstourados - acao; //baloes estourados - (-1);
    
    document.getElementById('baloesInteiros').innerHTML = baloesInteiros; 
    document.getElementById('baloesEstourados').innerHTML = baloesEstourados; 
    situacaoJogo(baloesInteiros);
}

function situacaoJogo(baloesInteiros){
    if(baloesInteiros == 0){
        alert("Parabens, voce conseguiu estourar todos os balões a tempo!!")
        parar();
    }
}

function parar(){ 
    clearTimeout(timerId);
}

function remove_eventos_baloes() {
    var i = 1; //contado para recuperar balões por id
    
    //percorre o elementos de acordo com o id e só irá sair do laço quando não houver correspondência com elemento
    while(document.getElementById('b'+ i)) {
        //retira o evento onclick do elemento
        document.getElementById('b'+ i).onclick = '';
        i++; //faz a iteração da variávei i
    }
}

