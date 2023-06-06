package listaD;

import java.util.Scanner;

public class D2 {

	public static void main(String[] args) {
		Scanner ler = new Scanner(System.in);
		double num;
		System.out.println("Digite um numero");
		num = ler.nextDouble();
		
		if(num < 100){
			System.out.println("O numero digitado é menor que 100");
		}
		if(num > 100){
			System.out.println("O numero digitado é maior que 100");
		}
		if(num == 100){
			System.out.println("O numero digitado é igual a 100");
		}

	}

}
