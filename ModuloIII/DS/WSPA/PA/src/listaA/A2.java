package listaA;

import java.util.Scanner;

public class A2 {

	public static void main(String[] args) {
		Scanner ler = new Scanner (System.in);
		double l1, l2, area;
		System.out.println("Digite o primeiro lado do triangulo");
		l1 = ler.nextDouble();
		System.out.println("Digite o segundo lado do triangulo");
		l2 = ler.nextDouble();
		area = l1 * l2;
		
		System.out.println("O calculo dos lados é: "+ area);

	}

}
