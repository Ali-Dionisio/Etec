package thread;

import java.util.Random;
import java.util.Scanner;

public class Principal {
	
	static Scanner carro = new Scanner(System.in);
	static int escolhaCarro, escolheCarroAdversario;
	static int contador=0, contadorAdversario=0, campeao;
	
	static Random escolheVelocidade = new Random();
	static int velocidade, velocidadeAdversario;
	static String veiculo, veiculoAdversario, msgCampeao;
	
	public static void menu() {
		
		System.out.println("BEM-VINDO ao GameCar");
		System.out.println("ESCOLHA O SEU VEICULO E CORRA PELA VELOCIDADE");
		System.out.println("Preste atenção na velocidade minima e maxima de cada veiculo");
		System.out.println("Iremos randomizar e escolher um valor entre esse espaço");
		System.out.println("ESTA PRONTO PARA A ADRENALINA ?");
		System.out.println("1 - Camaro / Min 1200 - Max 2000");
		System.out.println("2 - Dodge / Min 1400 - Max 1800");
		System.out.println("3 - Veloster / Min 1000 - Max 2200");
		System.out.println("4 - Corsinha do balacubaco / Min 800 - Max 2400");
		escolhaCarro = carro.nextInt();
		
		if(escolhaCarro == 1) {
			velocidade = escolheVelocidade.nextInt(1200,2000);
			veiculo = "Camaro";
		}
		if(escolhaCarro == 2) {
			velocidade = escolheVelocidade.nextInt(1400,1800);
			veiculo = "Dodge";
		}
		if(escolhaCarro == 3) {
			velocidade = escolheVelocidade.nextInt(1000,2200);
			veiculo = "Veloster";
		}
		if(escolhaCarro == 4) {
			velocidade = escolheVelocidade.nextInt(800,2400);
			veiculo = "Corsinha do balacubaco";
		}
		//definir adversario
		System.out.println("ESCOLHA O VEICULO ADVERSARIO");
		System.out.println("TENHA CAUTELA, ELE PODE TE FAZER COMER POEIRA");
		System.out.println("ESTA PRONTO PARA A ADRENALINA ?");
		System.out.println("1 - Camaro / Min 1200 - Max 2000");
		System.out.println("2 - Dodge / Min 1400 - Max 1800");
		System.out.println("3 - Veloster / Min 1000 - Max 2200");
		System.out.println("4 - Corsinha do balacubaco / Min 800 - Max 2400");
		escolheCarroAdversario = carro.nextInt();
		
		if(escolheCarroAdversario == 1) {
			velocidadeAdversario = escolheVelocidade.nextInt(1200,2000);
			veiculoAdversario = "Camaro ";
		}
		if(escolheCarroAdversario == 2) {
			velocidadeAdversario = escolheVelocidade.nextInt(1400,1800);
			veiculoAdversario = "Dodge ";
		}
		if(escolheCarroAdversario == 3) {
			velocidadeAdversario = escolheVelocidade.nextInt(1000,2200);
			veiculoAdversario = "Veloster ";
		}
		if(escolheCarroAdversario == 4) {
			velocidadeAdversario = escolheVelocidade.nextInt(800,2400);
			veiculoAdversario = "Corsinha do balacubaco ";
		}
		
	
		
	}

}
