package listaJ;

import javax.swing.JOptionPane;

public class J7 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int resp=0, saga, matrix=0, aneis=0,total=0;
		
		while(resp ==0 ) {
			String tipo[] = {"Matrix","Senhor dos Aneis"};
			saga = JOptionPane.showOptionDialog(null, "Qual sua saga preferida?", "Entrada", 0, 
							  JOptionPane.QUESTION_MESSAGE,null,tipo,tipo[0]);
			total++;
			if(saga == 0) {
				matrix++;
			}else if(saga == 1) {
				aneis++;
			}			
			String opcoes[] = {"Continuar","Encerrar"};
			resp = JOptionPane.showOptionDialog(null, "Qual a região onde você mora?", "Entrada", 0, 
							  JOptionPane.QUESTION_MESSAGE,null,opcoes,opcoes[0]);
		}
		if(matrix>aneis) {
			System.out.println("PESQUISA DE MELHOR SAGA\n");
			System.out.println("A saga vencedora foi Matrix com "+ matrix + " Votos");
			System.out.println("O total de pessoas que votaram em Senhor dos Aneis: " +aneis);
			System.out.println("O total de pessoas participantes: " +total);

		}else if(aneis>matrix) {
			System.out.println("PESQUISA DE MELHOR SAGA\n");
			System.out.println("A saga vencedora foi Senhor dos Aneis com "+ aneis + " Votos");
			System.out.println("O total de pessoas que votaram em Matriz: " +matrix);
			System.out.println("O total de pessoas participantes: " +total);
		}else {
			System.out.println("PESQUISA DE MELHOR SAGA\n");
			System.out.println("> > EMPATADO < <");
			System.out.println("O total de pessoas que votaram em Senhor dos Aneis: " +aneis);
			System.out.println("O total de pessoas que votaram em Matriz: " +matrix);
			System.out.println("O total de pessoas participantes: " +total);
		}
		
	}

}
