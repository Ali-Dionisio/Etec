package extra;

import java.util.Scanner;

public class problema1 {

	public static void main(String[] args) {
		Scanner ler = new Scanner(System.in);
		double salario, nsalario, aumento;
		System.out.println("Digite seu sal�rio");
		salario = ler.nextDouble();
		if(salario <= 1000){
			aumento = salario * 0.20;
			nsalario = salario + aumento;
			System.out.println("Seu novo sal�rio �: "+ nsalario);
			System.out.println("Seu aumento foi de: " + aumento);
			System.out.println("Com porcentagem de: 15%");
		}
		if(salario > 1000 && salario < 3000){
			nsalario = salario * 0.15;
		}
		
	}

}
