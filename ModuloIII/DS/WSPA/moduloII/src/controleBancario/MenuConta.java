package controleBancario;

import javax.swing.JOptionPane;

public class MenuConta extends Menu {
	
	private ContaCorrente contaCC;
	private ContaPoupanca contaCP;
	
	int menu = 0, submenu=0;
	
	public MenuConta() {
		this.contaCC=new ContaCorrente(500,1000);
		this.contaCP=new ContaPoupanca(5000,0.01);
	}
	protected void executarMenu() {
		String opcoes[]= {"0-Sair", "1-Conta corrente","2-Conta poupança"};
		menu = JOptionPane.showOptionDialog(null, "Menu", "Escolha uma opcao", 0, JOptionPane.QUESTION_MESSAGE , null, opcoes, opcoes[0]);
		avaliarOpcaoEscolhida();
		}
	protected void avaliarOpcaoEscolhida() {
	 while(menu != 0 ) {	
			if(menu == 1) {
			operarContaCC();
			}else if(menu == 2) {
			operarContaCP();
			}else if(menu==0){
				System.exit(1);
			}else {
				JOptionPane.showMessageDialog(null, "Opção Invalida", 
						"Mensagem", JOptionPane.INFORMATION_MESSAGE);
			}
		 }
	}
	public void operarContaCC()  {
		String Main[] = {"Voltar", "Consulta Saldo", "Depositar", "Sacar", "Atualizar Saldo"};
		submenu = JOptionPane.showOptionDialog(null, "Clique na opção desejada", "Sub Menu Conta Corrente", 0, 
						  JOptionPane.QUESTION_MESSAGE,null,Main,Main[0]);
		if(submenu == 1) {
			JOptionPane.showMessageDialog(null, contaCC.toString(), 
					"Saldo", JOptionPane.INFORMATION_MESSAGE);
		}else if(submenu == 2) {//corrente =+ conta.depositar(valorDeposito);
		
			try {
			contaCC.depositar(Double.parseDouble(JOptionPane.showInputDialog(null, 
					"Digite o valor de deposito", "Deposito", JOptionPane.QUESTION_MESSAGE)));
			}catch(MovimentoNegativo e){
				JOptionPane.showMessageDialog(null, "Valor invalido", 
						"Mensagem", JOptionPane.INFORMATION_MESSAGE);
			}catch(MovimentoZero d) {
				JOptionPane.showMessageDialog(null, "Valor invalido", 
						"Mensagem", JOptionPane.INFORMATION_MESSAGE);
			}catch(NumberFormatException f) {
				JOptionPane.showMessageDialog(null, "Digite um numero", 
						"Mensagem", JOptionPane.INFORMATION_MESSAGE);
			}
		}else if(submenu == 3) {//corrente =+ conta.Sacar;
			try {
				double valorSaque = Double.parseDouble(JOptionPane.showInputDialog(null, 
						"Digite o valor de deposito", "Saque", JOptionPane.QUESTION_MESSAGE));
							contaCC.sacar(valorSaque);
			}catch(MovimentoNegativo e){
				JOptionPane.showMessageDialog(null, "Valor invalido", 
						"Mensagem", JOptionPane.INFORMATION_MESSAGE);
			}catch(MovimentoZero d) {
				JOptionPane.showMessageDialog(null, "Valor invalido", 
						"Mensagem", JOptionPane.INFORMATION_MESSAGE);
			}catch(NumberFormatException f) {
				JOptionPane.showMessageDialog(null, "Digite um numero", 
						"Mensagem", JOptionPane.INFORMATION_MESSAGE);
			}}
			else if(submenu == 4) {
			contaCC.atualizarSaldo();
		}else if(submenu==0) {
			executarMenu();
		}else {
			JOptionPane.showMessageDialog(null, "Opção Invalida", 
					"Mensagem", JOptionPane.INFORMATION_MESSAGE);
		}
	 	
	}
	
	public void operarContaCP(){
		
		String Main[] = {"Voltar", "Consulta Saldo", "Depositar", "Sacar", "Atualizar Saldo"};
		submenu = JOptionPane.showOptionDialog(null, "Clique na opção desejada", "Sub Menu Conta Poupanca", 0, 
						  JOptionPane.QUESTION_MESSAGE,null,Main,Main[0]);
		
		if(submenu == 1) {
			JOptionPane.showMessageDialog(null, contaCP.toString(), 
					"Saldo", JOptionPane.INFORMATION_MESSAGE);
		}else if(submenu == 2) {
		
			try {
			contaCP.depositar( Double.parseDouble(JOptionPane.showInputDialog(null, 
					"Digite o valor de deposito", "ENTRADA", JOptionPane.QUESTION_MESSAGE)));
			}catch(MovimentoNegativo e){
				JOptionPane.showMessageDialog(null, "Valor invalido", 
						"Mensagem", JOptionPane.INFORMATION_MESSAGE);
			}catch(MovimentoZero d) {
				JOptionPane.showMessageDialog(null, "Valor invalido", 
						"Mensagem", JOptionPane.INFORMATION_MESSAGE);
			}catch(NumberFormatException f) {
				JOptionPane.showMessageDialog(null, "Digite um numero", 
						"Mensagem", JOptionPane.INFORMATION_MESSAGE);
			}
						
			//corrente =+ conta.depositar(valorDeposito);
		}else if(submenu == 3) {
			try {
				contaCP.sacar( Double.parseDouble(JOptionPane.showInputDialog(null, 
					"Digite o valor de deposito", "ENTRADA", JOptionPane.QUESTION_MESSAGE)));
						
			}catch(MovimentoNegativo e){
				JOptionPane.showMessageDialog(null, "Valor invalido", 
						"Saida", JOptionPane.INFORMATION_MESSAGE);
			}catch(MovimentoZero d) {
				JOptionPane.showMessageDialog(null, "Valor invalido", 
						"Saida", JOptionPane.INFORMATION_MESSAGE);
			}catch(NumberFormatException f) {
				JOptionPane.showMessageDialog(null, "Digite um numero", 
						"Saida", JOptionPane.INFORMATION_MESSAGE);
			}}
			
			else if(submenu == 4) {
			try {	
				contaCP.atualizarSaldo(Double.parseDouble(JOptionPane.showInputDialog(null, 
						"Digite o valor de reajuste", "REAJUSTE", JOptionPane.QUESTION_MESSAGE)));
						
			}catch(MovimentoNegativo e){
				JOptionPane.showMessageDialog(null, "Valor invalido", 
						"Saida", JOptionPane.INFORMATION_MESSAGE);
			}catch(MovimentoZero d) {
				JOptionPane.showMessageDialog(null, "Valor invalido", 
						"Saida", JOptionPane.INFORMATION_MESSAGE);
			}catch(NumberFormatException f) {
				JOptionPane.showMessageDialog(null, "Digite um numero", 
						"Saida", JOptionPane.INFORMATION_MESSAGE);
			
			}	
			
		}else if(submenu==0) {
			executarMenu();
		}else {
			JOptionPane.showMessageDialog(null, "Opção Invalida", 
					"Saida", JOptionPane.INFORMATION_MESSAGE);
		}
	 	
		
		
	}
		
	}
	
	


