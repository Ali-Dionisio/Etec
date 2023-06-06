package extra;

import java.util.Scanner;

public class problema {

	public static void main(String[] args) {
		Scanner ler = new Scanner(System.in);
		double aumento, salario, nsalario;
		System.out.println("Digite o seu salário");
		salario = ler.nextDouble();
		
		if(salario <= 1000){
			aumento = salario * 0.20;
			nsalario = salario + aumento;
			System.out.println("O seu novo salário é "+ nsalario);
			System.out.println("Seu aumento foi de " + aumento);
			System.out.println("A porcentagem do aumento é de 20%" );
		}
		if(salario > 1000 && salario < 3000){
			aumento = salario * 0.15;
			nsalario = salario + aumento;
			System.out.println("O seu novo salário é "+ nsalario);
			System.out.println("Seu aumento foi de " + aumento);
			System.out.println("A porcentagem do aumento é de 15%" );
		}
		if(salario > 3000 && salario < 8000){
			aumento = salario * 0.10;
			nsalario = salario + aumento;
			System.out.println("O seu novo salário é "+ nsalario);
			System.out.println("Seu aumento foi de " + aumento);
			System.out.println("A porcentagem do aumento é de 10%" );
		}
		if(salario > 8000){
			aumento = salario * 0.05;
			nsalario = salario + aumento;
			System.out.println("O seu novo salário é "+ nsalario);
			System.out.println("Seu aumento foi de " + aumento);
			System.out.println("A porcentagem do aumento é de 5%" );
		}
	}

}
