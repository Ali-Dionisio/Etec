package listaA;

import java.util.Scanner;

public class A3 {

	public static void main(String[] args) {
		Scanner ler = new Scanner(System.in);
		double c, f;
		System.out.println("Digite o grau atual");
		c = ler.nextDouble();
		f = (9*c+160)/5;
		System.out.println("A temperatura em Fahrecheit é: "+ f);
	}

}
