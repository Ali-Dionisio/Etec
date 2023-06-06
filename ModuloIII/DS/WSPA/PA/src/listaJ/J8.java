package listaJ;

import javax.swing.JOptionPane;

public class J8 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int resp=0, eleicao, fujiko=0, takaro=0,total=0;
		double porcTakaro=0.1,porcFujiko=0.1;

		while(resp ==0 ) {
			String tipo[] = {"Fujiko NaKombi","Takaro Né"};
			eleicao = JOptionPane.showOptionDialog(null, "Eleja o melhor?", "Entrada", 0, 
							  JOptionPane.QUESTION_MESSAGE,null,tipo,tipo[0]);
			total++;
			if(eleicao == 0) {
				fujiko++;
			}else if(eleicao == 1) {
				takaro++;
			}			
			String opcoes[] = {"Continuar","Encerrar"};
			resp = JOptionPane.showOptionDialog(null, "Deseja continuar?", "Entrada", 0, 
							  JOptionPane.QUESTION_MESSAGE,null,opcoes,opcoes[0]);
		}
		porcTakaro = (takaro*100) / total;
		porcFujiko = (fujiko*100) / total;
		
		if(fujiko>takaro) {
			System.out.println("Eleito para Gerente\n");
			System.out.println("O gerente vencedor foi Fujiko NaKombi com "+ fujiko + " Votos");
			System.out.println("A porcentadem de pessoas que votaram em Takaro Né: " +porcTakaro);
			System.out.println("A porcentadem de pessoas que votaram em Fujiko NaKombi: " +porcFujiko);
			System.out.println("O total de pessoas participantes: " +total);

		}else if(takaro>fujiko) {
			System.out.println("Eleito para Gerente\n");
			System.out.println("O gerente vencedor foi Takaro Né com "+ takaro + " Votos");
			System.out.println("A porcentadem de pessoas que votaram em Takaro Né: " +porcTakaro);
			System.out.println("A porcentadem de pessoas que votaram em Fujiko NaKombi: " +porcFujiko);
			System.out.println("O total de pessoas participantes: " +total);
		}else if(takaro == fujiko){
			System.out.println("Eleito para Gerente\n");
			System.out.println("> > EMPATADO < <");
			
			String tipo[] = {"Fujiko NaKombi","Takaro Né"};
			eleicao = JOptionPane.showOptionDialog(null, "Escolha o ganhador", "Voto de minerva", 0, 
							  JOptionPane.QUESTION_MESSAGE,null,tipo,tipo[0]);
			if(eleicao == 0) {
				fujiko++;
			}else if(eleicao == 1) {
				takaro++;
			}
			
			if(fujiko>takaro) {
				System.out.println("Eleito para Gerente\n");
				System.out.println("O gerente vencedor foi Fujiko NaKombi com "+ fujiko + " Votos + 1 Voto de minerva");
				System.out.println("A porcentadem de pessoas que votaram em Takaro Né: " +porcTakaro);
				System.out.println("A porcentadem de pessoas que votaram em Fujiko NaKombi: " +porcFujiko);
				System.out.println("O total de pessoas participantes: " +total);

			}else if(takaro>fujiko) {
				System.out.println("Eleito para Gerente\n");
				System.out.println("O gerente vencedor foi Takaro Né com "+ takaro + " Votos + 1 Voto de minerva");
				System.out.println("A porcentadem de pessoas que votaram em Takaro Né: " +porcTakaro );
				System.out.println("A porcentadem de pessoas que votaram em Fujiko NaKombi: " +porcFujiko);
				System.out.println("O total de pessoas participantes: " +total);
			}
			
		}
	}

}
