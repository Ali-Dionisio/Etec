package listaF;

import java.util.Scanner;

public class F3 {

	public static void main(String[] args) {
		Scanner ler = new Scanner (System.in);
		double nota1, nota2, nota3, nota4, media, exame, mediaexame;
		
		System.out.println("Digite sua 1ª nota");
		nota1 = ler.nextDouble();
		System.out.println("Digite sua 2ª nota");
		nota2 = ler.nextDouble();
		System.out.println("Digite sua 3ª nota");
		nota3 = ler.nextDouble();
		System.out.println("Digite sua 4ª nota");
		nota4 = ler.nextDouble();
		media = (nota1 + nota2 + nota3 + nota4 ) / 4;
		
		if(media >= 7) {
			System.out.println("Parabéns, você foi aprovado");
			System.out.println("Sua média " + media);
		}
		if(media < 7) {
			System.out.println("Sua nota foi inferior a 7");
			System.out.println("Digite a nota do exame");
			exame = ler.nextDouble();
			mediaexame = (media + exame) / 2;
			if(mediaexame >= 5) {
				System.out.println("Foi por pouco, aluno aprovado em exame");
				System.out.println("Sua média " + mediaexame);
			}
			if(mediaexame < 5) {
				System.out.println("Aluno reprovado em exame");
				System.out.println("Sua média " + mediaexame);
			}
		}
	}

}
