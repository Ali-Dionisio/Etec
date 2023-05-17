package calculadora;

import java.util.Scanner;

public class TestaOp {

	public static void main(String[] args) {
		float num1, num2;
		int op =1, tipo;
		Scanner sc = new Scanner(System.in);//Criando objeto do tipo Scanner
		OpAritm minhaCalc = new OpAritm(); //Criando objeto do tipo OpAritm

		System.out.println(" Digite o 1º numero ");
		num1 = sc.nextFloat();
		System.out.println(" Digite o 2º numero ");
		num2 = sc.nextFloat();
		
		System.out.println(" Digite a operação desejada ");
		System.out.println(" 1 para somar ");
		System.out.println(" 2 para subtrair");
		System.out.println(" 3 para dividir");
		System.out.println(" 4 para multiplicar");
		op = sc.nextInt();

		
		if(op == 1) {
		System.out.println(" O resultado da Soma é: " + minhaCalc.soma(num1,num2));
		}
		if(op == 2) {
			System.out.println(" O resultado da Subtração é: " + minhaCalc.subtrai(num1,num2));
		}
		if(op == 3) {
			System.out.println(" O resultado da Divisão é: " + minhaCalc.divide(num1,num2));
		}
		if(op == 4) {
			System.out.println(" O resultado da Multiplicação é: " + minhaCalc.multiplica(num1,num2));
		}
	}

}
