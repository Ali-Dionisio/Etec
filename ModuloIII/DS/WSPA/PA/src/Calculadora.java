import java.util.Scanner;

public class Calculadora {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		float num1, num2, resul;
		int op;
				
		Scanner sc = new Scanner(System.in);

		System.out.println(" Digite o primeiro numero ");
		num1 = sc.nextFloat();
		System.out.println(" Digite o segundo numero ");
		num2 = sc.nextFloat();
		
		System.out.println(" Digite a opera��o desejada ");
		System.out.println(" 0 para somar ");
		System.out.println(" 1 para subtrair");
		System.out.println(" 2 para dividir");
		System.out.println(" 3 para multiplicar");
		op = sc.nextInt();
		
		
		if(op == 0) {
			resul = num1 + num2;
			System.out.println(" O resultado da Soma �: " + resul);

		}
		if(op == 1) {
			resul = num1 - num2;
			System.out.println(" O resultado da Subtrair �: " + resul);

		}
		if(op == 2) {
			resul = num1 / num2;
			System.out.println(" O resultado da Dividir �: " + resul);

		}
		if(op == 3) {
			resul = num1 * num2;
			System.out.println(" O resultado da Multiplicar �: " + resul);

		}
		
	}

}
