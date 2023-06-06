package exemplos;

import java.util.Scanner;

public class usandoFor3 {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Digite o total de Cadastro");
		int nFunc = sc.nextInt();
		int idade=0, totMaiores=0;
		
		
		for(int i = 0; i < nFunc; i++){
			System.out.println("Digite a idade: ");	
			idade = sc.nextInt();
			
			if(idade>=18){
				totMaiores = totMaiores + 1;
			}//Fim If
			
		}//Fim for
		System.out.println("FIM DO CADASTRO\n");
		System.out.println("Total de maiores: " + totMaiores);
			
		
	}//Fim Metodo
}//Fim Classe
