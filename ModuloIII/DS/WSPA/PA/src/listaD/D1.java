package listaD;

import java.util.Scanner;

public class D1 {

	public static void main(String[] args) {
		Scanner ler = new Scanner (System.in);
		double num1, num2;
		System.out.println("Digite o numero 1");
		num1 = ler.nextDouble();
		System.out.println("Digite o numero 2");
		num2 = ler.nextDouble();
		if(num1 > num2){
			System.out.println("O maior valor é: " + num1);
		}
		if(num2 > num1){
			System.out.println("O numero maior é: " + num2);
		}
	}

}
