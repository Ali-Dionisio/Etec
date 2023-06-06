package listaD;

import java.util.Scanner;

public class D7 {

	public static void main(String[] args) {
		Scanner ler = new Scanner(System.in);
		int num;
		System.out.println("Digite um numero");
		num = ler.nextInt();
		if(num < 5){
			System.out.println("O numero digitado é menor que 5");
		}
		if(num > 10){
			System.out.println("O numero digitado é maior que 10");
		}
		if(num > 5 && num < 10){
			System.out.println("O numero digitado esta entre 5 e 10");
		}
		
	}

}
