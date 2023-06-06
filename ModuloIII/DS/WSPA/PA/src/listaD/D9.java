package listaD;

import java.util.Scanner;

public class D9 {

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
			System.out.println("Código 1 - Função Operador");
			System.out.println("Sálario antigo: R$ " + salario);
			System.out.println("Novo Sálario R$ " + novosalario);
			System.out.println("Valor do reajuste R$ " + reajuste);
		}
		if(cod == 2) {
			reajuste = salario * 0.10;
			novosalario = salario + reajuste;
			System.out.println("Código 2 - Função Programador");
			System.out.println("Sálario antigo: R$ " + salario);
			System.out.println("Novo Sálario R$ " + novosalario);
			System.out.println("Valor do reajuste R$ " + reajuste);
		}
		if(cod == 3) {
			reajuste = salario * 0.15;
			novosalario = salario + reajuste;
			System.out.println("Código 3 - Função Analista");
			System.out.println("Sálario antigo: R$ " + salario);
			System.out.println("Novo Sálario R$ " + novosalario);
			System.out.println("Valor do reajuste R$ " + reajuste);
		}
		if(cod > 3 || cod < 1) {
			System.out.println("Código informado invalido. Digite um código entre 1 - 3");
		}
		
	}

}
