package listaF;

import java.util.Scanner;

public class F7 {

	public static void main(String[] args) {
		Scanner ler = new Scanner(System.in);
		int x,y,z;
		System.out.println("Digite o valor de X");
		x = ler.nextInt();
		System.out.println("Digite o valor de Y");
		y = ler.nextInt();
		System.out.println("Digite o valor de Z");
		z = ler.nextInt();
		
		if(x == y && y == z) {
			System.out.println("Este é um triângulo equilátero/isóceles");
		}
		if(x != y && y != z) {
			System.out.println("Este é um triângulo escaleno");
		}
	}

}
