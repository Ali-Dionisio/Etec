package listaF;

import java.util.Scanner;

public class F5 {

	public static void main(String[] args) {
		Scanner ler = new Scanner(System.in);
		double salario, reajuste, novosalario;
		int cod;
		System.out.println("Digite seu salario atual");
		salario = ler.nextDouble();
		System.out.println("Digite o seu codigo");
		cod = ler.nextInt();
		
		if(cod == 1) {
			reajuste = salario * 0.05;
			novosalario = salario + reajuste;
			System.out.println("Informado c�digo 1");
			System.out.println("S�lario antigo: R$ " + salario);
			System.out.println("Novo S�lario R$ " + novosalario);
			System.out.println("Valor do reajuste R$ " + reajuste);
		}
		if(cod == 2) {
			reajuste = salario * 0.10;
			novosalario = salario + reajuste;
			System.out.println("Informado c�digo 2");
			System.out.println("S�lario antigo: R$ " + salario);
			System.out.println("Novo S�lario R$ " + novosalario);
			System.out.println("Valor do reajuste R$ " + reajuste);
		}
		if(cod == 3) {
			reajuste = salario * 0.15;
			novosalario = salario + reajuste;
			System.out.println("Informado c�digo 3");
			System.out.println("S�lario antigo: R$ " + salario);
			System.out.println("Novo S�lario R$ " + novosalario);
			System.out.println("Valor do reajuste R$ " + reajuste);
		}
		if(cod == 4) {
			reajuste = salario * 0.20;
			novosalario = salario + reajuste;
			System.out.println("Informado c�digo 4");
			System.out.println("S�lario antigo: R$ " + salario);
			System.out.println("Novo S�lario R$ " + novosalario);
			System.out.println("Valor do reajuste R$ " + reajuste);
		}
		if(cod == 5) {
			reajuste = salario * 0.25;
			novosalario = salario + reajuste;
			System.out.println("Informado c�digo 5");
			System.out.println("S�lario antigo: R$ " + salario);
			System.out.println("Novo S�lario R$ " + novosalario);
			System.out.println("Valor do reajuste R$ " + reajuste);
		}
		if(cod == 6) {
			reajuste = salario * 0.30;
			novosalario = salario + reajuste;
			System.out.println("Informado c�digo 6");
			System.out.println("S�lario antigo: R$ " + salario);
			System.out.println("Novo S�lario R$ " + novosalario);
			System.out.println("Valor do reajuste R$ " + reajuste);
		}
		if(cod > 6 || cod < 1) {
			System.out.println("C�digo informado invalido. Digite um c�digo entre 1 - 6");
		}
	}

}