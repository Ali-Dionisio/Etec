package exemplos;

import java.util.Scanner;

public class ExemploEnquanto2 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		int num, diferenca, contador, inicio, fim;
		
		System.out.println("Digite o n�mero para in�cio do looping");
		inicio = sc.nextInt();
		System.out.println("Digite o n�mero para fim do looping");
		fim = sc.nextInt();
		
		contador = inicio;
		
		while(contador <= fim) {
			System.out.println("Contador esta em "+ contador);
			contador++; //contador++;
			
		}
		System.out.println("O n�mero digitado como in�cio " + inicio);
		System.out.println("O n�mero digitado como fim " + fim);

	}

}
