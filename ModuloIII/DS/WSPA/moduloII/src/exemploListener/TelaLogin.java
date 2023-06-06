package exemploListener;


import java.awt.Container;
import java.awt.Font;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JPasswordField;
import javax.swing.JTextField;
import javax.swing.plaf.basic.BasicInternalFrameTitlePane.CloseAction;

	public class TelaLogin extends JFrame implements ActionListener{
	
		JTextField txtN1;
		JPasswordField txtN2;
		
		JLabel lblRes, lblLogin, lblSenha;
		JButton btnLogin, btnCancelar;
		String nomeUsuario, senhaLogin;
		

		
		public TelaLogin() {
			nomeUsuario = JOptionPane.showInputDialog(null, "Digite o Nome de usuário", 
					"ENTRADA", JOptionPane.QUESTION_MESSAGE);
			senhaLogin = JOptionPane.showInputDialog(null, "Digite a senha", 
					"ENTRADA", JOptionPane.QUESTION_MESSAGE);
			
			
			Container c = getContentPane();
			Container d = getContentPane();
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
			btnLogin.addActionListener(this);
			
			btnCancelar = new JButton("Cancelar");
			btnCancelar.addActionListener(this);
			
			setLayout(new GridLayout(3, 2));
			c.add(lblLogin);
			c.add(txtN1);
			c.add(lblSenha);
			c.add(txtN2);
			
			//c.add(lblRes);
			//c.add(lblRes);
			d.add(btnLogin);
			d.add(btnCancelar);
			
			setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
			setSize(250, 200);
			setVisible(true);
		}

		
		public static void main(String[] args) {
			
			new TelaLogin();
		}

		
		@Override
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
			if(arg0.getSource() == btnLogin) {
				if(login.equals(nomeUsuario) && senha.equals(senhaLogin)) {
					JOptionPane.showMessageDialog(null, "Login Efetuado", "Mensagem", JOptionPane.INFORMATION_MESSAGE);
				}else if(!login.equals(nomeUsuario) || !senha.equals(senhaLogin)) {
					JOptionPane.showMessageDialog(null, "Não Cadastrado", "Mensagem", JOptionPane.INFORMATION_MESSAGE);
				}
			}
			if(arg0.getSource() == btnCancelar) {	
				setVisible(false);
			}
			
		}
		
	}

