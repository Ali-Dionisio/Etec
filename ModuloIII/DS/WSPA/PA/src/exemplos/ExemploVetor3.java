package exemplos;

import java.util.Scanner;

public class ExemploVetor3 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		
		String[] vetNomes = new String[5]; //Cria Vetor
		double[] vetSalario = new double[5]; //Cria Vetor
		
		int n; //N�mero de Pessoas
		
		System.out.println("Digite a Quantidade de Lan�amentos");
		n = sc.nextInt();
		
		for(int i = 0; i < n; i++){
			sc.nextLine();
			System.out.println("Digite o nome " + (i + 1));
			vetNomes[i] = sc.nextLine();
			System.out.println("Digite o Sal�rio " + (i + 1));
			vetSalario[i] = sc.nextDouble();
		}
		System.out.println("RELAT�RIO");
		for(int i = 0; i < n; i++){
			System.out.println("Nome " + vetNomes[i]);
			System.out.println("Sal�rio " + vetSalario[i]);
			System.out.println("--------------------------");
		}
	}

}
