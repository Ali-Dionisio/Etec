package exemplos;

import java.util.Scanner;

public class ExemploVetor1 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Scanner sc = new Scanner(System.in);
		int[] vetIdades=new int [4]; //Cria Vetor
		
		int i;
		//Percorre as posi��es do Vetor para alimenta-lo
		for (i=0;i<4;i++){
			System.out.println("Digite a idade " + (i + 1));
			vetIdades[i] = sc.nextInt();
		}//for
		//Imprimir o Conte�do do Vetor
			System.out.println("---------------");
		for(i=0;i<4;i++){
			System.out.println(vetIdades[i]);
		}
	}
}
