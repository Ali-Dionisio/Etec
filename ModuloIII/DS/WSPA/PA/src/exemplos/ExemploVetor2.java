package exemplos;

import java.util.Scanner;

public class ExemploVetor2 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		int i;
		int n; //Número de Pessoas
		
		System.out.println("Digite a Quantidade de Lançamentos");
		n = sc.nextInt();
		
		int[] vetIdades = new int[n]; //Cria Vetor
		
	// Alimentando o Vetor
		for(i=0; i<n; i++){
			System.out.println("Digite a idade " + (i + 1));
			vetIdades[i] = sc.nextInt();
		}//For
	// Leitura dos Dados
		int totMaiores = 0;
		int totMenores = 0;
		for(i=0; i<n; i++){
			if(vetIdades[i] >= 18){
				totMaiores++;
			}else{
				totMenores++;
			}
		}
		
	// Exibe o resultado de maiores e menores
		System.out.println("-----------------");
		System.out.println("RELATÓRIO");
		System.out.println("O total de maiores = " + totMaiores);
		System.out.println("O total de menores = " + totMenores);
		
		/*for(i=0; i<n; i++){
			System.out.println("   Resultado\nIdades digitadas");
			System.out.println(vetIdades[i]);
		}*/
	}

}
