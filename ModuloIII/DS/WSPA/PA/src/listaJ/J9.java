package listaJ;

import javax.swing.JOptionPane;

public class J9 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int resp=0, curso, ciencia=0, direito=0,letras=0,total=0;
		double porcCiencia=0.1,porcDireito=0.1,porcLetras=0.1;

		while(resp ==0 ) {
			String tipo[] = {"Ciencia da Computação","Direito","Letras"};
			curso = JOptionPane.showOptionDialog(null, "Qual sua saga preferida?", "Entrada", 0, 
							  JOptionPane.QUESTION_MESSAGE,null,tipo,tipo[0]);
			total++;
			if(curso == 0) {
				ciencia++;
			}else if(curso == 1) {
				direito++;
			}else if(curso == 2) {
				letras++;
			}		
			String opcoes[] = {"Continuar","Encerrar"};
			resp = JOptionPane.showOptionDialog(null, "Escolha um curso universitario?", "Entrada", 0, 
							  JOptionPane.QUESTION_MESSAGE,null,opcoes,opcoes[0]);
		}
		porcCiencia = (ciencia *100)/total;
		porcLetras = (letras *100)/total;
		porcDireito = (direito *100)/total;
		if(ciencia > direito && direito > letras) {
			System.out.println("COLOCAÇÃO");
			System.out.println("1 - Ciencias da Computação");
			System.out.println("2 - Direiro");
			System.out.println("3 - Letras");
			System.out.println("A porcentagem de pessoa que votaram em Ciencias da Computação: "+porcCiencia);
			System.out.println("A porcentagem de pessoa que votaram em Direito: "+porcDireito);
			System.out.println("A porcentagem de pessoa que votaram em Letras: "+porcLetras);
			System.out.println("O Total de pessoas que participaram "+total);
			
		}else if(letras > direito && direito > ciencia) {
			System.out.println("COLOCAÇÃO");
			System.out.println("1 - Letras");
			System.out.println("2 - Direiro");
			System.out.println("3 - Ciencias da Computação");
			System.out.println("A porcentagem de pessoa que votaram em Ciencias da Computação: "+porcCiencia);
			System.out.println("A porcentagem de pessoa que votaram em Direito: "+porcDireito);
			System.out.println("A porcentagem de pessoa que votaram em Letras: "+porcLetras);
			System.out.println("O Total de pessoas que participaram "+total);
		}else if(direito > ciencia && ciencia > letras) {
			System.out.println("COLOCAÇÃO");
			System.out.println("1 - Direiro");
			System.out.println("2 - Ciencias da Computação");
			System.out.println("3 - Letras");
			System.out.println("A porcentagem de pessoa que votaram em Ciencias da Computação: "+porcCiencia);
			System.out.println("A porcentagem de pessoa que votaram em Direito: "+porcDireito);
			System.out.println("A porcentagem de pessoa que votaram em Letras: "+porcLetras);
			System.out.println("O Total de pessoas que participaram "+total);
		}else if(letras > ciencia && ciencia > direito) {
			System.out.println("COLOCAÇÃO");
			System.out.println("1 - Letras");
			System.out.println("2 - Ciencias da Computação");
			System.out.println("3 - Direiro");
			System.out.println("A porcentagem de pessoa que votaram em Ciencias da Computação: "+porcCiencia);
			System.out.println("A porcentagem de pessoa que votaram em Direito: "+porcDireito);
			System.out.println("A porcentagem de pessoa que votaram em Letras: "+porcLetras);
			System.out.println("O Total de pessoas que participaram "+total);
		}else if(direito > letras && letras > ciencia) {
			System.out.println("COLOCAÇÃO");
			System.out.println("1 - Direiro");
			System.out.println("2 - Letras");
			System.out.println("3 - Ciencias da Computação");
			System.out.println("A porcentagem de pessoa que votaram em Ciencias da Computação: "+porcCiencia);
			System.out.println("A porcentagem de pessoa que votaram em Direito: "+porcDireito);
			System.out.println("A porcentagem de pessoa que votaram em Letras: "+porcLetras);
			System.out.println("O Total de pessoas que participaram "+total);
		}else if(letras == ciencia && ciencia == direito) {
			System.out.println("COLOCAÇÃO\n ");
			System.out.println("> > EMPATE < <\n");
			System.out.println("1 - Letras");
			System.out.println("1 - Ciencias da Computação");
			System.out.println("1 - Direiro");
			System.out.println("A porcentagem de pessoa que votaram em Ciencias da Computação: "+porcCiencia);
			System.out.println("A porcentagem de pessoa que votaram em Direito: "+porcDireito);
			System.out.println("A porcentagem de pessoa que votaram em Letras: "+porcLetras);
			System.out.println("O Total de pessoas que participaram "+total);
		}else if(letras == ciencia && ciencia > direito) {
		System.out.println("COLOCAÇÃO\n ");
		System.out.println("> > Letras < <\n");
		System.out.println("> > EMPATE < <\n");
		System.out.println("1 - Letras");
		System.out.println("1 - Ciencias da Computação");
		System.out.println("2 - Direiro");
		System.out.println("A porcentagem de pessoa que votaram em Ciencias da Computação: "+porcCiencia);
		System.out.println("A porcentagem de pessoa que votaram em Direito: "+porcDireito);
		System.out.println("A porcentagem de pessoa que votaram em Letras: "+porcLetras);
		System.out.println("O Total de pessoas que participaram "+total);
	}else if(letras > ciencia && ciencia == direito) {
		System.out.println("COLOCAÇÃO\n ");
		System.out.println("> > Letras < <\n");
		System.out.println("> > EMPATE < <\n");
		System.out.println("1 - Letras");
		System.out.println("2 - Ciencias da Computação");
		System.out.println("2 - Direiro");
		System.out.println("A porcentagem de pessoa que votaram em Ciencias da Computação: "+porcCiencia);
		System.out.println("A porcentagem de pessoa que votaram em Direito: "+porcDireito);
		System.out.println("A porcentagem de pessoa que votaram em Letras: "+porcLetras);
		System.out.println("O Total de pessoas que participaram "+total);
	}else if(direito > ciencia && ciencia == letras) {
		System.out.println("COLOCAÇÃO\n ");
		System.out.println("> > Direito < <\n");
		System.out.println("> > EMPATE < <\n");
		System.out.println("1 - Direito");
		System.out.println("2 - Ciencias da Computação");
		System.out.println("2 - Direiro");
		System.out.println("A porcentagem de pessoa que votaram em Ciencias da Computação: "+porcCiencia);
		System.out.println("A porcentagem de pessoa que votaram em Direito: "+porcDireito);
		System.out.println("A porcentagem de pessoa que votaram em Letras: "+porcLetras);
		System.out.println("O Total de pessoas que participaram "+total);
	}else if(direito== ciencia && ciencia > letras) {
		System.out.println("COLOCAÇÃO\n ");
		System.out.println("> > EMPATE < <\n");
		System.out.println("1 - Direito");
		System.out.println("1 - Ciencias da Computação");
		System.out.println("2 - Letras");
		System.out.println("A porcentagem de pessoa que votaram em Ciencias da Computação: "+porcCiencia);
		System.out.println("A porcentagem de pessoa que votaram em Direito: "+porcDireito);
		System.out.println("A porcentagem de pessoa que votaram em Letras: "+porcLetras);
		System.out.println("O Total de pessoas que participaram "+total);
	}else if(ciencia > letras && letras == direito) {
		System.out.println("COLOCAÇÃO\n ");
		System.out.println("> > Ciencia da Computação < <\n");
		System.out.println("> > EMPATE < <\n");
		System.out.println("1 - Ciencia da Computação");
		System.out.println("2 - Letras");
		System.out.println("2 - Direiro");
		System.out.println("A porcentagem de pessoa que votaram em Ciencias da Computação: "+porcCiencia);
		System.out.println("A porcentagem de pessoa que votaram em Direito: "+porcDireito);
		System.out.println("A porcentagem de pessoa que votaram em Letras: "+porcLetras);
		System.out.println("O Total de pessoas que participaram "+total);
	}else if(ciencia == letras && letras > direito) {
		System.out.println("COLOCAÇÃO\n ");
		System.out.println("> > EMPATE < <\n");
		System.out.println("1 - Ciencia da Computação");
		System.out.println("1 - Letras");
		System.out.println("2 - Direiro");
		System.out.println("A porcentagem de pessoa que votaram em Ciencias da Computação: "+porcCiencia);
		System.out.println("A porcentagem de pessoa que votaram em Direito: "+porcDireito);
		System.out.println("A porcentagem de pessoa que votaram em Letras: "+porcLetras);
		System.out.println("O Total de pessoas que participaram "+total);
	}
	}

}
