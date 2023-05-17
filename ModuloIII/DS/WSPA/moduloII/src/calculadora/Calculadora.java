package calculadora;
import java.util.Scanner;

public class Calculadora {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		float num1, num2, resul;
		int op, repetir=1;
		
		Scanner sc = new Scanner(System.in);

		while(repetir == 1) {
			
		System.out.println(" Digite o primeiro numero ");
		num1 = sc.nextFloat();
		System.out.println(" Digite o segundo numero ");
		num2 = sc.nextFloat();
		
		System.out.println(" Digite a operação desejada ");
		System.out.println(" 0 para somar ");
		System.out.println(" 1 para subtrair");
		System.out.println(" 2 para dividir");
		System.out.println(" 3 para multiplicar");
		op = sc.nextInt();
		
		
		if(op == 0) {
			resul = num1 + num2;
			System.out.println(" O resultado da Soma é: " + resul);

		}
		if(op == 1) {
			resul = num1 - num2;
			System.out.println(" O resultado da Subtrair é: " + resul);

		}
		if(op == 2) {
			resul = num1 / num2;
			System.out.println(" O resultado da Dividir é: " + resul);

		}
		if(op == 3) {
			resul = num1 * num2;
			System.out.println(" O resultado da Multiplicar é: " + resul);

		}
		
		System.out.println(" Digite 1 para realizar um novo calculo");
		repetir = sc.nextInt();
		}
		
	}

}
