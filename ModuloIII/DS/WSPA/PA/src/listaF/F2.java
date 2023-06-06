package listaF;

import java.util.Scanner;

public class F2 {

	public static void main(String[] args) {
		Scanner ler = new Scanner(System.in);
		int idade;
		System.out.println("Digite a idade da criança");
		idade = ler.nextInt();
		
		if(idade >= 6 && idade <= 8) {
			System.out.println("Categoria - Dente de Leite");
		}
		if(idade >= 9 && idade <= 11) {
			System.out.println("Categoria - Pré-Mirim");

		}
		if(idade >= 12 && idade <= 13) {			
			System.out.println("Categoria - Mirim");
		}
		if(idade >= 14 && idade <= 15) {			
			System.out.println("Categoria - Infantil");
		}
		if(idade >= 16 && idade <= 17) {			
			System.out.println("Categoria - Juvenil");
		}
		if(idade >= 18 && idade <= 20) {			
			System.out.println("Categoria - Juniores");
		}
		if(idade >= 21 || idade <= 5) {			
			System.out.println("Não é uma idade aceita;");
		}
	}

}
