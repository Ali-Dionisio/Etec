package calculadora;

import java.util.Scanner;

public class TestaOp {

	public static void main(String[] args) {
		float num1, num2;
		int op =1, tipo;
		Scanner sc = new Scanner(System.in);//Criando objeto do tipo Scanner
		OpAritm minhaCalc = new OpAritm(); //Criando objeto do tipo OpAritm

		System.out.println(" Digite o 1� numero ");
		num1 = sc.nextFloat();
		System.out.println(" Digite o 2� numero ");
		num2 = sc.nextFloat();
		
		System.out.println(" Digite a opera��o desejada ");
		System.out.println(" 1 para somar ");
		System.out.println(" 2 para subtrair");
		System.out.println(" 3 para dividir");
		System.out.println(" 4 para multiplicar");
		op = sc.nextInt();

		
		if(op == 1) {
		System.out.println(" O resultado da Soma �: " + minhaCalc.soma(num1,num2));
		}
		if(op == 2) {
			System.out.println(" O resultado da Subtra��o �: " + minhaCalc.subtrai(num1,num2));
		}
		if(op == 3) {
			System.out.println(" O resultado da Divis�o �: " + minhaCalc.divide(num1,num2));
		}
		if(op == 4) {
			System.out.println(" O resultado da Multiplica��o �: " + minhaCalc.multiplica(num1,num2));
		}
	}

}
