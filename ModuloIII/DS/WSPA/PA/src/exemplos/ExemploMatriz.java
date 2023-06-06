package exemplos;

import java.util.Scanner;

public class ExemploMatriz {

	public static void main(String[] args) {
		String[][] agenda = new String[3][5];
		Scanner sc = new Scanner(System.in);
		
		for (int linha = 0; linha < 3; linha++) {
			for (int coluna = 0; coluna < 5; coluna++) {
				if(linha == 0 ){
				System.out.println(" Digite os compromissos matinais ");
				agenda[linha][coluna] = sc.nextLine();
				}else if(linha == 1){
				System.out.println(" Digite os compromissos Vespertinos ");
				agenda[linha][coluna] = sc.nextLine();	
				}else{
				System.out.println(" Digite os compromissos Noturnos ");
				agenda[linha][coluna] = sc.nextLine();
				}
			}
		}
		for (int linha = 0; linha < 3; linha++) {
			for (int coluna = 0; coluna < 5; coluna++) {
				System.out.println(agenda[linha][coluna]);
			}
			System.out.println("");
		}	
		
	}

}
