package controleBancario;

import javax.swing.JOptionPane;

public class MovimentoNegativo extends Exception{
	public void mensagem() {
		JOptionPane.showMessageDialog(null, "ATENCAO", "O valor n�o pode ser negativo",
				JOptionPane.INFORMATION_MESSAGE);
		
		
	}
}