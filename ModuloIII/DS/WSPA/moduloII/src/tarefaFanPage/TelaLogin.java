package tarefaFanPage;

import java.awt.BorderLayout;
import java.awt.Container;
import java.awt.Font;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JPasswordField;
import javax.swing.JTextField;

public class TelaLogin extends JFrame{
	JTextField txtN1;
	JPasswordField txtN2;
	
	JLabel lblRes, lblLogin, lblSenha;
	JButton btnLogin, btnCancelar;
	String nomeUsuario, senhaLogin;
	
	
	public TelaLogin(){
		super("Fan Page");
		
		nomeUsuario = JOptionPane.showInputDialog(null, "Digite o Nome de usuário", 
				"ENTRADA", JOptionPane.QUESTION_MESSAGE);
		senhaLogin = JOptionPane.showInputDialog(null, "Digite a senha", 
				"ENTRADA", JOptionPane.QUESTION_MESSAGE);
		
		Font fonte = new Font("serif", Font.BOLD, 30);
		Font fonte2 = new Font("serif", Font.BOLD, 18);
		setTitle("Tela Login");
		
		txtN1 = new JTextField();
		txtN2 = new JPasswordField();
		
		lblRes = new JLabel();
		lblRes.setFont(fonte2);
		
		lblLogin = new JLabel("Usuário:");
		lblLogin.setFont(fonte2);
		
		lblSenha = new JLabel("Senha:");
		lblSenha.setFont(fonte2);
		
		btnLogin = new JButton("Login");
		//btnLogin.addActionListener(this);
		
		btnCancelar = new JButton("Cancelar");
		//btnCancelar.addActionListener(this);
		
		setLayout(new GridLayout(3, 2));

		
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setSize(250, 200);
		setVisible(true);
		
		
		Container c = getContentPane();
		c.setLayout(new BorderLayout(5,5));
		
		Container c2 = new JPanel();
		c2.setLayout(new GridLayout(3, 1, 5, 5));
		c2.add(txtN1);
		c2.add(txtN2);
		c2.add(btnCancelar);
		
		Container c3 = new JPanel();
		c3.setLayout(new GridLayout(3, 1, 5, 5));
		c3.add(lblLogin);
		c3.add(lblSenha);
		c3.add(btnLogin);
		
		c.add(BorderLayout.CENTER, c3);
		c.add(BorderLayout.EAST, c2);
		
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setSize(300, 300);
		setVisible(true);
	}
		public static void main(String[] args) {
			new TelaLogin();
			
		}
	
	
		public void actionPerformed(ActionEvent arg0) {
			double n1, n2;
			String login = txtN1.getText();
			String senha = String.valueOf(txtN2.getPassword());
			//n1 = Double.parseDouble(txtN1.getText());
			//n2 = Double.parseDouble(txtN2.getText());
			//res = (n1 + n2);
			txtN1.setText("");
			txtN2.setText("");
			//lblRes.setText("" + res);	
			//lblRes.setText(res);
			if(login.equals(nomeUsuario) && senha.equals(senhaLogin)) {
				JOptionPane.showMessageDialog(null, "Login Efetuado", "Mensagem", JOptionPane.INFORMATION_MESSAGE);
			}else if(!login.equals(nomeUsuario) || !senha.equals(senhaLogin)) {
				JOptionPane.showMessageDialog(null, "Não Cadastrado", "Mensagem", JOptionPane.INFORMATION_MESSAGE);
			}
		
			else {		
				System.out.println(btnCancelar);
			}
			
			
			
		}
}
