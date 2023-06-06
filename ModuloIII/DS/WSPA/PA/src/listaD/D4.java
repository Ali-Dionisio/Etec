package listaD;

import java.util.Scanner;

public class D4 {

	public static void main(String[] args) {
		Scanner ler = new Scanner(System.in);
		double valor1, valor2, resul;
		System.out.println("Digite um valor");
		valor1 = ler.nextDouble();
		System.out.println("Digite outro valor");
		valor2 = ler.nextDouble();
		
		if(valor1 > valor2){
			resul = valor1 - valor2;
			System.out.println("A diferença do primeiro valor para o segundo é: "+resul);
		}
		if(valor1 < valor2){
			resul = valor2 - valor1;
			System.out.println("A diferença do segundo valor para o primeiro é: "+resul);
		}
	}

}
