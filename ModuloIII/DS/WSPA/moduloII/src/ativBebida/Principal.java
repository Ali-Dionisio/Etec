package ativBebida;

import javax.swing.JOptionPane;

import atVinho.Vinho;

public class Principal {

public static void main(String[] args) {
	int respMain = 1, respSubMain=0;
	Vinho vinhoMeu = new Vinho();
	Suco sucoMeu = new Suco();
	Refrigerante refriMeu = new Refrigerante();
	double precoVinho = 0, precoSuco = 0, precoRefri = 0;
	boolean retornavelRefri;
	
	while(respMain != 3) {//Qual op��o escolher: cadastrar, veriicar ou mostrar
		String opcoes[] = {"Cadastrar", "Verificar Pre�o", "Mostrar Dados","Sair"};
		respMain = JOptionPane.showOptionDialog(null, "Clique na op��o desejada", "Entrada", 0, 
						  JOptionPane.QUESTION_MESSAGE,null,opcoes,opcoes[0]);
		if(respMain == 0) {//Qual op��o cadastrar: vinho, refri ou suco
			while(respSubMain != 3) {
				String subMain[] = {"Vinho", "Suco", "Refrigerante", "Voltar"};
				respSubMain = JOptionPane.showOptionDialog(null, "Clique na op��o que deseja cadastrar", "Entrada", 0, 
								  JOptionPane.QUESTION_MESSAGE,null,subMain,subMain[0]);
				
				if(respSubMain == 0) {
					//Cadastrar valores vinho
					String nomeVinho = JOptionPane.showInputDialog(null, "Digite o Nome do vinho", 
							"ENTRADA", JOptionPane.QUESTION_MESSAGE);
					 precoVinho = Double.parseDouble(JOptionPane.showInputDialog(null, "Digite o pre�o do vinho", 
							"ENTRADA", JOptionPane.QUESTION_MESSAGE));
					int safraVinho = Integer.parseInt(JOptionPane.showInputDialog(null, "Digite a safra do vinho", 
							"ENTRADA", JOptionPane.QUESTION_MESSAGE));
					String tipoVinho = JOptionPane.showInputDialog(null, "Digite o tipo do vinho", 
							"ENTRADA", JOptionPane.QUESTION_MESSAGE);
					vinhoMeu = new Vinho(nomeVinho, tipoVinho, precoVinho, safraVinho);
				}//Cadastrar valores suco
				else if(respSubMain == 1){
					String nomeSuco = JOptionPane.showInputDialog(null, "Digite o Nome do suco", 
							"ENTRADA", JOptionPane.QUESTION_MESSAGE);
					 precoSuco = Double.parseDouble(JOptionPane.showInputDialog(null, "Digite o pre�o do suco", 
							"ENTRADA", JOptionPane.QUESTION_MESSAGE));
					String saborSuco = JOptionPane.showInputDialog(null, "Digite o sabor do suco", 
							"ENTRADA", JOptionPane.QUESTION_MESSAGE);
					sucoMeu = new Suco(nomeSuco, precoSuco, saborSuco);

				}//Cadastrar valores refri
				else if(respSubMain == 2){
					String nomeRefri = JOptionPane.showInputDialog(null, "Digite o Nome do Refrigerante", 
							"ENTRADA", JOptionPane.QUESTION_MESSAGE);
					 precoRefri = Double.parseDouble(JOptionPane.showInputDialog(null, "Digite o pre�o do Refrigerante", 
							"ENTRADA", JOptionPane.QUESTION_MESSAGE));			 
					String retor[] = {"N�o","Sim"};
					int retornavel = JOptionPane.showOptionDialog(null, "O Refrigerante � retornavel?", "Entrada", 0, 
							  JOptionPane.QUESTION_MESSAGE,null,retor,retor[0]);
					if(retornavel == 0) 
						retornavelRefri = false;
					else
						retornavelRefri = true;
					
					refriMeu = new Refrigerante(nomeRefri, precoRefri, retornavelRefri);
				
				}
			}respSubMain=0;
		}
		else if (respMain == 1) {//Qual op��o verificar: vinho, refri ou suco
			while(respSubMain != 3) {
			String subMain[] = {"Vinho", "Suco", "Refrigerante", "Voltar"};
			respSubMain = JOptionPane.showOptionDialog(null, "Clique na op��o que deseja cadastrar", "Entrada", 0, 
							  JOptionPane.QUESTION_MESSAGE,null,subMain,subMain[0]);
			//verifica preco
				if(respSubMain == 0) {
					//Vinho
					if(vinhoMeu.verificarPreco(precoVinho)) {
						JOptionPane.showMessageDialog(null, "Produto em oferta", "Saida", JOptionPane.INFORMATION_MESSAGE);
						}else {
						JOptionPane.showMessageDialog(null, "Produto com o pre�o normal", "Saida", JOptionPane.INFORMATION_MESSAGE);
						}
				}
				else if(respSubMain == 1){
					//Suco
					if(sucoMeu.verificarPreco(precoSuco)) {
						JOptionPane.showMessageDialog(null, "Produto em oferta", "Saida", JOptionPane.INFORMATION_MESSAGE);
						}else {
						JOptionPane.showMessageDialog(null, "Produto com o pre�o normal", "Saida", JOptionPane.INFORMATION_MESSAGE);
						}
				}
				else if(respSubMain == 2){
					//Refrigerante
					if(refriMeu.verificarPreco(precoRefri)) {
						JOptionPane.showMessageDialog(null, "Produto em oferta", "Saida", JOptionPane.INFORMATION_MESSAGE);
						}else {
						JOptionPane.showMessageDialog(null, "Produto com o pre�o normal", "Saida", JOptionPane.INFORMATION_MESSAGE);
						}
					}
				
			}respSubMain=0;
		}
		
		else if(respMain == 2){
			while(respSubMain != 3) {
			String subMain[] = {"Vinho", "Suco", "Refrigerante", "Voltar"};
			respSubMain = JOptionPane.showOptionDialog(null, "Clique na op��o que deseja cadastrar", "Entrada", 0, 
							  JOptionPane.QUESTION_MESSAGE,null,subMain,subMain[0]);
			//mostrar
			if(respSubMain == 0) {
				//Vinho
				JOptionPane.showMessageDialog(null, vinhoMeu.mostrarVinho(), "Saida", JOptionPane.INFORMATION_MESSAGE);
			}
			else if(respSubMain == 1){
				//Suco
				JOptionPane.showMessageDialog(null, sucoMeu.mostrarBebida(), "Saida", JOptionPane.INFORMATION_MESSAGE);
			}
			else if(respSubMain == 2){
				//Refrigerante
				JOptionPane.showMessageDialog(null, refriMeu.mostrarBebida(), "Saida", JOptionPane.INFORMATION_MESSAGE);
				}
			}
		}respSubMain=0;
		
	}//fim while menu
		JOptionPane.showMessageDialog(null, "Agradecemos a preferencia", "Saida", JOptionPane.INFORMATION_MESSAGE);
		
		
	}
  } 

