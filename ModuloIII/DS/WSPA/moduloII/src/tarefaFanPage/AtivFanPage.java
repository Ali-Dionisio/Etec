package tarefaFanPage;

import java.awt.BorderLayout;
import java.awt.Container;
import java.awt.GridLayout;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JPanel;

public class AtivFanPage extends JFrame{
	public AtivFanPage(){
		super("Ativ de Fan Page");
		Container c = getContentPane();
		c.setLayout(new BorderLayout(3,3));
		
		Container c2 = new JPanel();
		c2.setLayout(new GridLayout(4, 1, 5, 3));
		c2.add(new JButton("Curtiu"));
		c2.add(new JButton("Compartilhar"));
		c2.add(new JButton("Não curtiu"));
		c2.add(new JButton("Denunciar"));
		
		Container c3 = new JPanel();
		c3.setLayout(new GridLayout(2, 1, 5, 3));
		c3.add(new JButton("Ok"));
		c3.add(new JButton("Cancelar"));
		c.add(BorderLayout.EAST, c2);
		c.add(BorderLayout.CENTER, c3);
		
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setSize(500, 500);
		setVisible(true);
				
	}
	public static void main(String[] args) {
		new AtivFanPage();
	}
}
