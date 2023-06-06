package listaA;

import java.util.Scanner;

public class A7 {

	public static void main(String[] args) {
		Scanner ler = new Scanner (System.in);
		double tgast,vmed,disc,lusad;
		System.out.println("Qual foi o tempo gasto na viagem?");
		tgast = ler.nextDouble();
		System.out.println("Qual a velocidade média durante a viagem?");
		vmed = ler.nextDouble();
		
		disc = tgast*vmed;
		lusad = disc/12;
		
		System.out.println("Tempo gasto "+ tgast);
		System.out.println("Velocidade média "+ vmed);
		System.out.println("Distancia percorrida "+ disc);
		System.out.println("Quantidade de litros usados "+ lusad);
	}

}
