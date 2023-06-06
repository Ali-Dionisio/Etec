package exerProposto;

import java.util.Scanner;

import javax.swing.JOptionPane;

public class Agenda {

	public static void main(String[] args) {
		String[][] agenda = new String[3][5];
		String[] diaSemana = new String[5];
		int semana = 0, tentarNovamente=1, desejaTentarNovamente = 0,cont =0, escolha=0;
		String procura = "Segunda";
		
		Scanner sc = new Scanner(System.in);
		
		
			diaSemana[0] = "Segunda";
			diaSemana[1] = "Terça";
			diaSemana[2] = "Quarta";
			diaSemana[3] = "Quinta";
			diaSemana[4] = "Sexta";
		
		for (int coluna = 0; coluna < 5; coluna++) {
				for (int linha = 0; linha < 3; linha++) {
					if(linha == 0 ){
						System.out.println(" Digite compromissos matinais nesta " + diaSemana[semana]);
						agenda[linha][coluna] = sc.nextLine();
					}else if(linha == 1){
						System.out.println(" Digite os compromissos Vespertinos " + diaSemana[semana]);
						agenda[linha][coluna] = sc.nextLine();	
					}else if(linha == 2){
						System.out.println(" Digite os compromissos Noturnos " + diaSemana[semana]);
						agenda[linha][coluna] = sc.nextLine();
				}
			}
				semana++;
		}
		semana =0;
		
		System.out.println("Digite 1 para pesquisar por dia da semana\n"
						 + "E 2 para pesquisar por uma atividade");
		escolha = sc.nextInt();
		if(escolha == 1) {
		
		while(tentarNovamente == 1){
			System.out.println(" ");
			System.out.println("Deseja realizar uma nova pequisa ?");
			System.out.println("Digite: 1 - Sim ou 0 - Nâo");
			desejaTentarNovamente = sc.nextInt();
			
			if(desejaTentarNovamente == 0){
				System.out.println(" ");
				System.out.println("Foi um prazer te-lo conosco!");
				break;
			}else if(desejaTentarNovamente == 1){
				tentarNovamente=1;
			}
		System.out.println("0 - Segunda");
		System.out.println("1 - Terça");
		System.out.println("2 - Quarta");
		System.out.println("3 - Quinta");
		System.out.println("4 - Sexta");
		System.out.println("Digite o dia da semana que deseja procurar:");
		System.out.println("--------------------------------------------");
		int selecionado = sc.nextInt();
		
		for (int linha = 0; linha < 1; linha++) {
			System.out.println(" ");
			System.out.println(diaSemana[selecionado]);
			for (int coluna = 0; coluna < 3; coluna++) {
				System.out.println(" ");
				System.out.print(agenda[linha][selecionado] + " ");
				}
				System.out.println("");
				}
			}
		}
		else if(escolha == 2) {
			
		while(tentarNovamente == 1) {
		System.out.println("Digite a atividade que deseja buscar\n"
						 + "Digite --> pare <-- a qualquer momento para parar a pesquisa");
		procura = sc.nextLine();

		if(procura.equals("pare")) {
			break;
		}		
		for (int coluna = 0; coluna < 5; coluna++) {
			for (int linha = 0; linha < 3; linha++) {
				if(agenda[linha][coluna].equals(procura)) {
					cont++;
				}
			}
		}				
		for (int coluna = 0; coluna < 5; coluna++) {
			System.out.println(" ");
			System.out.println(diaSemana[coluna]);
		for (int linha = 0; linha < 3; linha++) {			
				if(agenda[linha][coluna].equals(procura)) {					
					if(linha == 0 ) {
						System.out.println("Manhã " + procura);
					}else if(linha == 1){
						System.out.println("Tarde " + procura);
					}else if(linha == 2){
						System.out.println("Noite " + procura);
					}
				}
			}
		}	
		
		}
		}
		System.out.println("Obrigado por usar nosso sistema");
	}
}
