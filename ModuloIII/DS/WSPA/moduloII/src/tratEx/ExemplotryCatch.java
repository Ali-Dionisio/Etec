package tratEx;

import java.util.InputMismatchException;
import java.util.Scanner;

public class ExemplotryCatch {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		int n1, n2, res;
		int n[] = new int[3];
	try {
		System.out.println("Digite um n�mero");
		n[0] = sc.nextInt();
		System.out.println("Digite um n�mero");
		n[1] = sc.nextInt();
		n[2] = (n[0] / n[1]);
		System.out.println(n[2]);
		
	}catch(ArithmeticException e) {
		System.out.println("N�o dividimos por zero");
	}catch(InputMismatchException e) {
		System.out.println("Digite apenas numeros");
	}catch(Exception e) {
		System.out.println("Ocorreu uma excess�o: "+ e);
	}finally {
		System.out.println("Finally executado");//pode ser usado com calculos;
	}
	}

}
