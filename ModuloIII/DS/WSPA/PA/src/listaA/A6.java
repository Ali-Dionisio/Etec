package listaA;

import java.util.Scanner;

public class A6 {

	public static void main(String[] args) {
		Scanner ler = new Scanner(System.in);
		double htrab, valhora, pdesc, salbrut, salliq, tdesc;
		System.out.println("Digite as horas trabalhadas no m�s");
		htrab = ler.nextDouble();
		System.out.println("Digite o valor das horas trabalhadas");
		valhora = ler.nextDouble();
		System.out.println("Digite o percentual de desconto");
		pdesc = ler.nextDouble();
		
		salbrut = htrab*valhora;
		tdesc = ((pdesc/100)*salbrut);
		salliq = salbrut-tdesc;
		
		System.out.println("Seu salario bruto �: R$ "+ salbrut);
		System.out.println("Seu salario liquido �: R$ "+ salliq);
		System.out.println("O total de desconto �: R$ "+ tdesc);

	}

}
