package controleBancario;

import javax.swing.JOptionPane;

public class MovimentoZero extends Exception{
	public void mensagem() {
		JOptionPane.showMessageDialog(null, "ATENCAO", "O valor n�o pode ser zero",
				JOptionPane.INFORMATION_MESSAGE);
	}
}