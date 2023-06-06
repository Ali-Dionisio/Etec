package listaA;

import java.util.Scanner;

public class A1 {

	public static void main(String[] args) {
		Scanner entrada = new Scanner(System.in);  
		int n1, n2, n3, n4;
		double soma, media; 
		
		System.out.println("Digite a primeira nota");
		n1 = entrada.nextInt();
		System.out.println("Digite a segunda nota");
		n2 = entrada.nextInt();
		System.out.println("Digite a terceira nota");
		n3 = entrada.nextInt();
		System.out.println("Digite a quarta nota");
		n4 = entrada.nextInt();
		soma = (n1 + n2 + n3 + n4); 
		media = (soma/4);
		
		if(media>=7){ 
			System.out.println("Aluno APROVADO com media: " + media);
		}	
		if(media<7){
			System.out.println("Aluno REPROVADO com media: " + media);
		}

	}

	}

