package exemplos;

import java.util.Scanner;

public class usandoFor2 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Scanner sc = new Scanner(System.in);
		
		int ntab, res;
		
		System.out.println("Digite o numero da tabuada");
		ntab = sc.nextInt();
		
		for(int contador=0; contador <=10; contador++ ){
			res=ntab*contador;
			System.out.println(ntab +" X "+contador +" = "+ res);
		
		}//Fim For
		
	}//Fim Metodo
}//Fim Classe
