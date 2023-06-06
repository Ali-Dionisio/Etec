package exemplos;

import java.util.Scanner;

public class ExemploEnquanto2 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		int num, diferenca, contador, inicio, fim;
		
		System.out.println("Digite o número para início do looping");
		inicio = sc.nextInt();
		System.out.println("Digite o número para fim do looping");
		fim = sc.nextInt();
		
		contador = inicio;
		
		while(contador <= fim) {
			System.out.println("Contador esta em "+ contador);
			contador++; //contador++;
			
		}
		System.out.println("O número digitado como início " + inicio);
		System.out.println("O número digitado como fim " + fim);

	}

}
