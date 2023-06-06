package extra;

import java.util.Scanner;

public class problema2 {

	public static void main(String[] args) {
		Scanner ler = new Scanner (System.in);
		double minutos, excedido, apagar, total;
		System.out.println("Digite a quantidade de minutos consumida");
		minutos = ler.nextDouble();
		if(minutos < 100){
			System.out.println("Valor a pagar: R$ 50,00");
		}
		if(minutos > 100){
			excedido = minutos - 100;
			apagar = excedido * 2;
			total = apagar + 50;
			System.out.println("Valor a pagar: R$ " + total);
		}
	}

}
