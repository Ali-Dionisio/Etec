package listaA;

import java.util.Scanner;

public class A4 {

	public static void main(String[] args) {
		Scanner ler = new Scanner(System.in);
		double r, altura, volume;
		System.out.println("Digite o valor do raio");
		r = ler.nextDouble();
		System.out.println("Digite o valor do altura");
		altura = ler.nextDouble();
		volume = 3.14159*r*r*altura;
		System.out.println("O valor do volume é: "+volume);

	}

}
