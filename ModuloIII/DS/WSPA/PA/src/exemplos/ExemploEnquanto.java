package exemplos;

import java.util.Scanner;

public class ExemploEnquanto {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		int num, diferenca;
		
		System.out.println("Digite um numero");
		num = sc.nextInt();
		
		if(num > 10){
			System.out.println("Número digitado é maior que 10!");
		}
		
		while(num < 10){
			diferenca = 10 - num;
			System.out.println("Número esta " + (diferenca) + " menor que 10");
			num++; //Mesmo que fazer (num = (num + 1 ))
		}
	}

}
