package listaD;

import java.util.Scanner;

public class D6 {

	public static void main(String[] args) {
		Scanner ler = new Scanner(System.in);
		int num;
		
		System.out.println("Digite um numero entre 0 e 10");
		num = ler.nextInt();
		
		if(num == 0){
			System.out.println("0 - Zero");	
		}
		if(num == 1){
			System.out.println("1 - Um");
		}
		if(num == 2){
			System.out.println("2 - Dois");
		}
		if(num == 3){
			System.out.println("3 - Tres");
		}
		if(num == 4){
			System.out.println("4 - Quatro");
		}
		if(num == 5){
			System.out.println("5 - Cinco");
		}
		if(num == 6){
			System.out.println("6 - Seis");
		}
		if(num == 7){
			System.out.println("7 - Sete");
		}
		if(num == 8){
			System.out.println("8 - Oito");
		}
		if(num == 9){
			System.out.println("9 - Nove");
		}
		if(num == 10){
			System.out.println("10 - Dez");
		}
	
		if(num > 10){
			System.out.println("Numero e maior que 10");
		}
	}
}
