package listaA;

import java.util.Scanner;

public class A5 {

	public static void main(String[] args) {
		Scanner ler = new Scanner (System.in);
		double pv, dsct, preco;
		System.out.println("Digite o preço do produto:R$ ");
		pv = ler.nextDouble();
			
	dsct = ((pv/100)*10);
	preco = (pv-dsct);
		
		System.out.println("Valor bruto do produto é:R$ "+ pv);
		System.out.println("O desconto sera de 10%");
		System.out.println("Preco com desconto::R$ "+ preco);

	}

}
