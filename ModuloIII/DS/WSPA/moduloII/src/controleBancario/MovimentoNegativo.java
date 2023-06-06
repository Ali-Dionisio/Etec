package controleBancario;

import javax.swing.JOptionPane;

public class MovimentoNegativo extends Exception{
	public void mensagem() {
		JOptionPane.showMessageDialog(null, "ATENCAO", "O valor não pode ser negativo",
				JOptionPane.INFORMATION_MESSAGE);
		
		
	}
}