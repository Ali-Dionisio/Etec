package listaJ;

import javax.swing.JOptionPane;

public class J10 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int resp=0, auto, corsa=0, palio=0,gol=0,total=0;
		double porcCorsa=0.1,porcPalio=0.1,porcGol=0.1;

		while(resp ==0 ) {
			String tipo[] = {"Corsa","Palio","Gol"};
			auto = JOptionPane.showOptionDialog(null, "Pesquisa sobre Automoveis?", "Entrada", 0, 
							  JOptionPane.QUESTION_MESSAGE,null,tipo,tipo[0]);
			total++;
			if(auto == 0) {
				corsa++;
			}else if(auto == 1) {
				palio++;
			}else if(auto == 2) {
				gol++;
			}		
			String opcoes[] = {"Continuar","Encerrar"};
			resp = JOptionPane.showOptionDialog(null, "Escolha um Automovel?", "Entrada", 0, 
							  JOptionPane.QUESTION_MESSAGE,null,opcoes,opcoes[0]);
		}
		porcCorsa = (corsa *100)/total; //porcCorsa
		porcPalio = (gol *100)/total; //porcPalio
		porcGol = (palio *100)/total; //porcGol
		if(corsa > palio && palio > gol) {
			System.out.println("COLOCA플O");
			System.out.println("1 - Corsa");
			System.out.println("2 - Palio");
			System.out.println("3 - Gol");
			System.out.println("A porcentagem de pessoa que votaram em Corsa: "+porcCorsa);
			System.out.println("A porcentagem de pessoa que votaram em Palio: "+porcGol);
			System.out.println("A porcentagem de pessoa que votaram em Gol: "+porcPalio);
			System.out.println("O Total de pessoas que participaram "+total);
			
		}else if(gol > palio && palio > corsa) {
			System.out.println("COLOCA플O");
			System.out.println("1 - Gol");
			System.out.println("2 - Palio");
			System.out.println("3 - Corsa");
			System.out.println("A porcentagem de pessoa que votaram em Corsa: "+porcCorsa);
			System.out.println("A porcentagem de pessoa que votaram em Palio: "+porcGol);
			System.out.println("A porcentagem de pessoa que votaram em Gol: "+porcPalio);
			System.out.println("O Total de pessoas que participaram "+total);
		}else if(palio > corsa && corsa > gol) {
			System.out.println("COLOCA플O");
			System.out.println("1 - Palio");
			System.out.println("2 - Corsa");
			System.out.println("3 - Gol");
			System.out.println("A porcentagem de pessoa que votaram em Corsa: "+porcCorsa);
			System.out.println("A porcentagem de pessoa que votaram em Palio: "+porcGol);
			System.out.println("A porcentagem de pessoa que votaram em Gol: "+porcPalio);
			System.out.println("O Total de pessoas que participaram "+total);
		}else if(gol > corsa && corsa > palio) {
			System.out.println("COLOCA플O");
			System.out.println("1 - Gol");
			System.out.println("2 - Corsa");
			System.out.println("3 - Palio");
			System.out.println("A porcentagem de pessoa que votaram em Corsa: "+porcCorsa);
			System.out.println("A porcentagem de pessoa que votaram em Palio: "+porcGol);
			System.out.println("A porcentagem de pessoa que votaram em Gol: "+porcPalio);
			System.out.println("O Total de pessoas que participaram "+total);
		}else if(corsa > gol && gol > palio) {
			System.out.println("COLOCA플O");
			System.out.println("1 - Palio");
			System.out.println("2 - Gol");
			System.out.println("3 - Corsa");
			System.out.println("A porcentagem de pessoa que votaram em Corsa: "+porcCorsa);
			System.out.println("A porcentagem de pessoa que votaram em Palio: "+porcGol);
			System.out.println("A porcentagem de pessoa que votaram em Gol: "+porcPalio);
			System.out.println("O Total de pessoas que participaram "+total);
		}else if(gol == corsa && corsa == palio) {
			System.out.println("COLOCA플O\n ");
			System.out.println("> > EMPATE < <\n");
			System.out.println("1 - Gol");
			System.out.println("1 - Corsa");
			System.out.println("1 - Palio");
			System.out.println("A porcentagem de pessoa que votaram em Corsa: "+porcCorsa);
			System.out.println("A porcentagem de pessoa que votaram em Palio: "+porcGol);
			System.out.println("A porcentagem de pessoa que votaram em Gol: "+porcPalio);
			System.out.println("O Total de pessoas que participaram "+total);
		}else if(gol == corsa && corsa > palio) {
		System.out.println("COLOCA플O\n ");
		System.out.println("> > Gol < <\n");
		System.out.println("> > EMPATE < <\n");
		System.out.println("1 - Gol");
		System.out.println("1 - Corsa");
		System.out.println("2 - Palio");
		System.out.println("A porcentagem de pessoa que votaram em Corsa: "+porcCorsa);
		System.out.println("A porcentagem de pessoa que votaram em Palio: "+porcGol);
		System.out.println("A porcentagem de pessoa que votaram em Gol: "+porcPalio);
		System.out.println("O Total de pessoas que participaram "+total);
	}else if(gol > corsa && corsa == palio) {
		System.out.println("COLOCA플O\n ");
		System.out.println("> > Gol < <\n");
		System.out.println("> > EMPATE < <\n");
		System.out.println("1 - Gol");
		System.out.println("2 - Corsa");
		System.out.println("2 - Palio");
		System.out.println("A porcentagem de pessoa que votaram em Corsa: "+porcCorsa);
		System.out.println("A porcentagem de pessoa que votaram em Palio: "+porcGol);
		System.out.println("A porcentagem de pessoa que votaram em Gol: "+porcPalio);
		System.out.println("O Total de pessoas que participaram "+total);
	}else if(palio > corsa && corsa == gol) {
		System.out.println("COLOCA플O\n ");
		System.out.println("> > Palio < <\n");
		System.out.println("> > EMPATE < <\n");
		System.out.println("1 - Palio");
		System.out.println("2 - Corsa");
		System.out.println("2 - Palio");
		System.out.println("A porcentagem de pessoa que votaram em Corsa: "+porcCorsa);
		System.out.println("A porcentagem de pessoa que votaram em Palio: "+porcGol);
		System.out.println("A porcentagem de pessoa que votaram em Gol: "+porcPalio);
		System.out.println("O Total de pessoas que participaram "+total);
	}else if(palio== corsa && corsa > gol) {
		System.out.println("COLOCA플O\n ");
		System.out.println("> > EMPATE < <\n");
		System.out.println("1 - Palio");
		System.out.println("1 - Corsa");
		System.out.println("2 - Gol");
		System.out.println("A porcentagem de pessoa que votaram em Corsa: "+porcCorsa);
		System.out.println("A porcentagem de pessoa que votaram em Palio: "+porcGol);
		System.out.println("A porcentagem de pessoa que votaram em Gol: "+porcPalio);
		System.out.println("O Total de pessoas que participaram "+total);
	}else if(corsa > gol && gol == palio) {
		System.out.println("COLOCA플O\n ");
		System.out.println("> > Corsa < <\n");
		System.out.println("> > EMPATE < <\n");
		System.out.println("1 - Corsa");
		System.out.println("2 - Gol");
		System.out.println("2 - Palio");
		System.out.println("A porcentagem de pessoa que votaram em Corsa: "+porcCorsa);
		System.out.println("A porcentagem de pessoa que votaram em Palio: "+porcGol);
		System.out.println("A porcentagem de pessoa que votaram em Gol: "+porcPalio);
		System.out.println("O Total de pessoas que participaram "+total);
	}else if(corsa == gol && gol > palio) {
		System.out.println("COLOCA플O\n ");
		System.out.println("> > EMPATE < <\n");
		System.out.println("1 - Corsa");
		System.out.println("1 - Gol");
		System.out.println("2 - Palio");
		System.out.println("A porcentagem de pessoa que votaram em Corsa: "+porcCorsa);
		System.out.println("A porcentagem de pessoa que votaram em Palio: "+porcGol);
		System.out.println("A porcentagem de pessoa que votaram em Gol: "+porcPalio);
		System.out.println("O Total de pessoas que participaram "+total);
	}
	}

}
