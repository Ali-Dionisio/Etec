package thread;
public class GameCarro extends Thread{
	
	public static Principal main = new Principal();
	
	String veiculo;
	long pausa;
	static boolean var=false;
	
	public GameCarro(String veiculo, long pausa){
		this.veiculo = veiculo;
		this.pausa = pausa;
		
	}
	
	public void run(){
	try {
		for(int i = 0; i < 8; i++){
		System.out.println(veiculo);
		Thread.sleep(pausa);
		}
		
}	catch (InterruptedException e){
	return;
}
	}
	public static void main(String[] args){
		
		main.menu();
		System.out.println("O veiculo escolhido � " + main.veiculo + " e a velocidade randomica � " + main.velocidade);
		System.out.println("O veiculo escolhido do adversario � " + main.veiculoAdversario + " e a velocidade randomica � " + main.velocidadeAdversario);
		new GameCarro(main.veiculo, main.velocidade).start();
		new GameCarro(main.veiculoAdversario, main.velocidadeAdversario).start();
		
		

			if(main.velocidade > main.velocidadeAdversario) {
				main.msgCampeao = "Voc� ganhou";
				System.out.println(main.msgCampeao);
			}
			if(main.velocidade < main.velocidadeAdversario) {
				main.msgCampeao = "N�o foi dessa vez, voc� perdeu";
				System.out.println(main.msgCampeao);
			}
		
}
}