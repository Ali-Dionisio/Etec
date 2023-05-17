package atVinho;

import javax.swing.JOptionPane;

public class Principal {

	public static void main(String[] args) {
		//Vinho meuVinho = new Vinho(); //CRIAÇÃO DO OBJETO meuVinho;		
		//meuVinho.nome = "Sangue de boi";
		int resp = 1;
		String nomeVinho, tipoVinho;
		double precoVinho=0;
		int safraVinho=0;
		Vinho meuVinho = new Vinho();
		
		
		while(resp != 0) {
		String opcoes[] = {"Sair","Cadastrar Vinho", "Verificar Preço", "Mostrar Vinho"};
		resp = JOptionPane.showOptionDialog(null, "Clique na opção desejada", "Entrada", 0, 
						  JOptionPane.QUESTION_MESSAGE,null,opcoes,opcoes[0]);
			
			
		if(resp == 1) {
			//Cadastrar Vinho
			nomeVinho = JOptionPane.showInputDialog(null, "Digite o Nome do vinho", 
					"ENTRADA", JOptionPane.QUESTION_MESSAGE);
			
			tipoVinho = JOptionPane.showInputDialog(null, "Digite o tipo do vinho", 
					"ENTRADA", JOptionPane.QUESTION_MESSAGE);
			
			precoVinho = Double.parseDouble(JOptionPane.showInputDialog(null, "Digite o preço do vinho", 
					"ENTRADA", JOptionPane.QUESTION_MESSAGE));
			
			safraVinho = Integer.parseInt(JOptionPane.showInputDialog(null, "Digite a safra do vinho", 
					"ENTRADA", JOptionPane.QUESTION_MESSAGE));
			
			 meuVinho = new Vinho(nomeVinho, tipoVinho, precoVinho, safraVinho);

		}else if (resp == 2) {
			//Verificar preço
			if(meuVinho.verificarPreco(precoVinho)) {
				JOptionPane.showMessageDialog(null, "Produto em oferta", "Saida", JOptionPane.INFORMATION_MESSAGE);
				}else {
				JOptionPane.showMessageDialog(null, "Produto com o preço normal", "Saida", JOptionPane.INFORMATION_MESSAGE);
				}
		}else if(resp == 3){
			//Mostrar
			JOptionPane.showMessageDialog(null, meuVinho.mostrarVinho(), "Saida", JOptionPane.INFORMATION_MESSAGE);
		}
		}
		JOptionPane.showMessageDialog(null, "Agradecemos a preferencia", "Saida", JOptionPane.INFORMATION_MESSAGE);
		
		
	}

}
