package listaD;

import java.util.Scanner;

public class D8 {

	public static void main(String[] args) {
		Scanner ler = new Scanner(System.in);
		double num1,num2,div;
		System.out.println("Digite o Primeiro n�mero");
		num1 = ler.nextDouble();
		System.out.println("Digite o Segundo n�mero");
		num2 = ler.nextDouble();
		
		if(num1 > num2){
			div = num1 / num2;
			System.out.println("O resultado da divis�o do maior n�mero �: " + div);
		}
		if(num2 > num1){
			div = num2 / num1;
			System.out.println("O resultado da divis�o do maior n�mero �: " + div);
		}
		if(num1 == num2){
			div = num1 / num2;
			System.out.println("O resultado da divis�o do maior n�mero �: " + div);
		}
	}

}
